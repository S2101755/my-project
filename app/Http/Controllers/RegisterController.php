<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Display the registration form
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registers',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create a new user
        $newUser = \App\Models\Register::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Redirect to the home page or wherever you want
        return redirect()->route('login')->with('success', 'Registration successful!');
    }
}
