<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\WelcomeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Database\QueryException;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name'  => ['required'],
            'email'      => ['required', 'email', 'unique:users,email'], // Add unique validation
            'password'   => ['required', Password::min(6), 'confirmed'],
        ]);

        try {
            $user = User::create($attributes);

            Auth::login($user);

            return redirect('/')->with('status', 'Registration successful!');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 19) {
                return redirect()->back()->withErrors(['email' => 'This email is already in use. Please use a different email.'])->withInput();
            }

            return redirect()->back()->withErrors(['error' => 'An unexpected error occurred. Please try again.'])->withInput();
        }
    }
}
