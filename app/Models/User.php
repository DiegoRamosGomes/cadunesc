<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:d/m/Y H:i:s',
        'updated_at' => 'datetime:d/m/Y H:i:s',
    ];

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'api_token' => Str::random(60),
        ]);
    }

    /**
     * Tenta autenticar o usuario com os dados de login
     *
     * @param string $email Email para autenticar o usuario
     * @param string $password Senha para autenticar o usuario
     * @return $this|bool
     */
    public static function auth(string $email, string $password)
    {
        // Busca um usuario pelo email
        $user = static::where('email', $email)->first();

        if ($user !== null) {
            // Testa a senha dos dados de login contra a senha do usuario do banco
            if (Hash::check($password, $user->password)) {
                return $user;
            }
        }

        return false;
    }
}
