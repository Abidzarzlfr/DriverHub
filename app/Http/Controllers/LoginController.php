<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('front-end.layouts.admin.login');
        }
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika autentikasi berhasil
            return redirect()->intended('/'); // Ganti dengan rute yang sesuai
        } else {
            // Jika autentikasi gagal
            return back()->withInput()->withErrors(['message' => 'Email atau password salah']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/about');
    }

}
