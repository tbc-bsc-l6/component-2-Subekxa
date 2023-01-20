<?php

namespace App\Http\Controllers;

use App\Models\User;

class SessionController extends Controller
{

    public function create()
    {
        return view('login.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'exists:users,email'],
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            return back()
                ->withErrors(['email' => 'Credential could not be verified.']);
        }

        session()->regenerate();

        return redirect('/dashboard')->with('success', 'Welcome');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Logged Out!');
    }
}