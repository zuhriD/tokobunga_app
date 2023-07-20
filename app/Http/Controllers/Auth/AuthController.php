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
            'role_id' => 'required|integer'
        ]);

        try {
            $credentials['password'] = bcrypt($request->password);

            User::create($credentials);

            return redirect('/login')->with('success', 'Register success!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Registration failed. Please try again later.']);
        }
    }


    public function login(Request $request)
    {
        $loginField = $request->input('identifier');
        $loginType = filter_var($loginField, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginType => $loginField,
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials, $request->input('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role_id == 1) {
                return redirect()->intended('/dashboard');
            } else if ($user->role_id == 2) {
                return redirect()->intended('/');
            }
        }

        return redirect()->back()->withInput()->withErrors(['identifier' => 'Invalid login credentials.']);
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
        }
        return redirect('/login');
    }
}
