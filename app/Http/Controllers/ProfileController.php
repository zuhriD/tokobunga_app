<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $orders = $user->orders()->with('products')->latest()->get();

        return view('profile.show', compact('user', 'orders'));
    }
}
