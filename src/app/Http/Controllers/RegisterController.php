<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{

    public function create()
    {
        return view("register.create");
    }

    public function store()
    {
        $attributes = request()->validate([
            "name" => 'required|max:255',
            "username" => 'required|min:2|max:255|unique:users,username',
            "email" => 'required|email|unique:users,email',
            "password" => 'required|min:6',
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect("/")->with('success', 'Your account has been created.');

    }
}
