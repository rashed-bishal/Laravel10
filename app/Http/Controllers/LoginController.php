<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'username.required' => 'Why did you keep username field empty?',
            'email.required' => 'Why did you keep email field empty?',
            'email.email' => 'Invalid Email format',
            'password' => 'You left Password field empty.',
        ]);

        dd($request->all());
    }
}
