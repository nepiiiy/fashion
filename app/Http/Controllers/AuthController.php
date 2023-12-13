<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function registerPost(Request $request)
    {
        if (User::where('role', 'admin')->count() > 0) {
            return redirect()->route('login')->with('error', 'Registrasi ditolak. Website hanya mendukung satu user sebagai admin.');
        }
          // Mendapatkan ID pengguna baru
          $newUserId = User::max('id') + 1;

          // Menentukan peran berdasarkan ID pengguna
          $role = ($newUserId == 1) ? 'admin' : 'user';

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $role;

        $user->save();
        return redirect()->route('login')->with('success','Register berhasil silahkan login untuk dapat mengakses akun mu.');
    }

    public function login()
    {
        return view("login");
    }

    public function loginPost(Request $request){
        $creditials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($creditials)){
            return redirect('/dashboard_admin')->with('success','Login berhasil');
        }
        return back()->with('error','Error Email or Password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Anda berhasil keluar dari akun tersebut.');
    }
}
