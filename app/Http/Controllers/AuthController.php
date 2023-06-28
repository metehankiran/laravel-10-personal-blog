<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Show the login page.
     *
     * This function returns the login page required for user authentication.
     *
     * @return void
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Login the user.
     *
     * This function authenticates the user and redirects them to the dashboard.
     *
     * @param  mixed $request
     * @return void
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|max:255',
            'remember' => 'nullable|boolean'
        ]);

        $credentials = $request->only('email', 'password');

        if(auth()->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Logout the user.
     *
     * This function logs out the user and redirects them to the home page.
     *
     * @param  mixed $request
     * @return void
     */
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('home.index');
    }
}
