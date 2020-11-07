<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Facade\FlareClient\Http\Exceptions\MissingParameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

class ApiAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->has('api_token')) {
            if($user = User::where('api_token', $request->api_token)->first()) {
                Auth::login($user);
                return $next($request);
            } else {
                return response(['error' => 'Não autorizado'], 401);
            }
        }
        return response()->json(['error' => 'parametro api_token obrigatório']);
    }
}
