<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle the login process
    public function login(Request $request)
    {
        // Validate the login request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to home or dashboard
            return redirect()->route('home')->with('success', 'Login successful');
        }

        // Authentication failed, redirect back with error message
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }
}
