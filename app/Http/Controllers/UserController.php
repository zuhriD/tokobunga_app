<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show_profile()
    {
        $user = Auth::user();
        return view('page.profile', compact('user'));
    }

    public function store(Request $request)
    {
        $validasiData = request()->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validasiData) {
            $user =  new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role_id = 2;
            $user->save();
            return redirect()->route('dashboardAdmin')->with('success', "Data berhasil ditambahkan");
        }
        return redirect()->route('dashboardAdmin')->with('error', "Data gagal ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $validasiData = request()->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validasiData) {
            $user = User::find($id);
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role_id = 2;
            $user->save();
            return redirect()->route('dashboardAdmin')->with('success', "Data berhasil diubah");
        }
        return redirect()->route('dashboardAdmin')->with('error', "Data gagal diubah");
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('dashboardAdmin')->with('success', "Data berhasil dihapus");
    }

    public function show($id)
    {
        $user = User::findOrFail($id); // Query ke database untuk mengambil data sesuai id
        return response()->json($user);
    }
}
