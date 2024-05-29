<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class TelaPrincipalController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        $cardView = view('sectionsTelaPrincipal.card', compact('cards'));

        return view('layouts.TelaPrincipal', ['card' => $cardView]); 
    }
}
