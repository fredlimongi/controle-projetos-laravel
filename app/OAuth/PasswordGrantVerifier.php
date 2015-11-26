<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 23/11/2015
 * Time: 15:03
 */

namespace SelfProjeto\OAuth;


use Illuminate\Support\Facades\Auth;

class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}