<?php

namespace App\Http\Repositories;
use App\Interfaces\AuthenticationInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class AuthenticationRepository implements AuthenticationInterface
{

    public function login($data)
    {
        return Auth::attempt($data);
    }

    public function registration($data)
    {
        return User::create($data);
    }
}
