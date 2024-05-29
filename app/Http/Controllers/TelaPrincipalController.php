<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class TelaPrincipalController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        $cardView = view('sectionsTelaPrincipal.card', compact('cards')); // Carrega a view 'sectionsTelaPrincipal.card' com os dados dos cartões

        return view('layouts.TelaPrincipal', ['card' => $cardView]); // Passa a view carregada para 'layouts.TelaPrincipal'
    }
}
