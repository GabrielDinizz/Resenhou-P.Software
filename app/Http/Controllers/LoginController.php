<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; //Para que serve a Hash?

class LoginController extends Controller
{
    public function login() {
        return view('layouts.Login');
    }

    public function create() {
        return view('layouts.CreateAccount');
    }

    public function register(Request $req) {
        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return redirect('/login')->with('success', 'Conta criada com sucesso! Faça login para continuar.');
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
