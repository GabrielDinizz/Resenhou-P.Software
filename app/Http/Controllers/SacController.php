<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sac;

class SacController extends Controller
{
    public function create()
    {
        return view('layouts.TelaPrincipal');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'mensagem' => 'required|string',
        ]);

        Sac::create([
            'nome' => $request->nome,
            'mensagem' => $request->mensagem,
        ]);

        return redirect()->route('sac.create')->with('success', 'Mensagem enviada com sucesso!');
    }
}
