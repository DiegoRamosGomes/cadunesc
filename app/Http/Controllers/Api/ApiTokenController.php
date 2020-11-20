<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ApiTokenController extends Controller
{
    /**
     * Update the authenticated user's API token.
     *
     * @param Request $request
     * @return User|array|MessageBag
     */
    public function login(Request $request)
    {
        try {
            $this->validate(['email', 'password']);

            $user = $this->authenticate($request->all());

            $user->update(['api_token' => bcrypt(Str::random(60))]);

            return $user;
        } catch (ValidationException $e) {
            return $e->validator->errors();
        }
    }


    /**
     * Tenta autenticar o usuario com as credenciais
     *
     * @param array $credentials dados de login do usuario
     * @return User
     *
     * @throws UnauthorizedHttpException
     */
    public function authenticate(array $credentials)
    {
        $user = User::auth($credentials['email'], $credentials['password']);

        if ($user) {
            return $user;
        }

        throw new UnauthorizedHttpException('Not authorized!');
    }
}
