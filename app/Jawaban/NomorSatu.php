<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NomorSatu
{
    public function auth(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'login' => ['required'], // Bisa berupa email atau username
            'password' => ['required'],
        ]);

        // Tentukan apakah input adalah email atau username
        $loginField = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Autentikasi
        $loginData = [
            $loginField => $credentials['login'], // Gunakan email atau username
            'password' => $credentials['password'],
        ];

        if (Auth::attempt($loginData)) {
            // Jika login berhasil
            $request->session()->regenerate();
            return redirect()->intended('event');
        }

        // Jika login gagal
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        // Logout user dan invalidasi session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/event'); // Redirect ke halaman utama
    }
}
