<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index_login()
    {
        return view('auth.login');
    }

    public function index_register()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users|email',
            'password' => 'required|string|confirmed',
        ]);

        $credentials['password'] = bcrypt($request->password);

        User::create($credentials);

        return redirect('/login')->with('success', 'Register success!');
    }

    public function login(Request $request)
    {
        $loginField = $request->input('email');
        $loginType = filter_var($loginField, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginType => $loginField,
            'password' => $request->input('password')
        ];

        $attempt = Auth::attempt($credentials);

        if ($attempt && Auth::user()->role_id == 1) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else if ($attempt && Auth::user()->role_id == 2) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('error', 'Login failed!');
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect('/login');
    }
}
