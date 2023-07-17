<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
       $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Selamat datang ' . Auth::user()->name);
        }
        return back()->with('error', 'Email atau password salah');
    }

    public function logout() {
        auth()->logout();
        session()->flush();
        session()->regenerate();
        return redirect()->route('login')->with('success', 'Logout Berhasil');
    }
}
