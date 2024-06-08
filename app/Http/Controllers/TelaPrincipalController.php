<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class TelaPrincipalController extends Controller
{
    public function index()
    {
        $cardView = $this->renderCardSection();

        return view('layouts.TelaPrincipal', [
            'card' => $cardView
        ]); 
    }

    private function renderCardSection() {
        $cards = Card::all();
        return $cardView = view('sectionsTelaPrincipal.card', compact('cards'));
    }
}
