<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255', 'unique:users,name'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:7', 'max:255']
        ]);

        $user = User::create($attributes);

        return redirect('/login')->with('success', 'Account created successfully.');
    }
}