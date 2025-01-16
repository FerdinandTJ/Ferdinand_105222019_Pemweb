<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban\NomorSatu;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('event');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function auth (Request $request) {

        $nomorSatu = new NomorSatu();
        return $nomorSatu->auth($request);
    }

    public function logout (Request $request) {

        $nomorSatu = new NomorSatu();
        return $nomorSatu->logout($request);
    }
}
