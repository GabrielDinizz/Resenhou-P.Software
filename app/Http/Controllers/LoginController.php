<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('layouts.Login');
    }

    public function create() {
        return view('layouts.CreateAccount');
    }

    public function authenticate(Request $req) {
        $credentials = array(
            'email' => $req->email,
            'password' => $req->password
        );
        
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => "Usuário ou Senha Inválidos!"
        ])->withInput();
    }

    public function logout(Request $req) {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('login');
    }
}
