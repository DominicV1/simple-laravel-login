<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    protected array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
        'password_confirmation' => 'required|string|min:8|same:password',
    ];

    public function render()
    {
        return view('login');
    }

    public function register()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }

        $credentials = request()->only('name', 'email', 'password', 'password_confirmation');

        $validator = validator($credentials, $this->rules);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        $credentials['password'] = bcrypt($credentials['password']);

//        Validate that both passwords are the same

        $user = \App\Models\User::create($credentials);

        auth()->login($user);

        return redirect()->route('home');
    }

    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        
        $credentials = request()->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }

        session()->flash('error', 'Invalid credentials');

        return redirect()->route('login');
    }
}
