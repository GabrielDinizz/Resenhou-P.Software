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
            //porque se eu mudo o nome do 'cards' nao altera o resultado?
            'cards' => $cardView
        ]); 
    }

    private function renderCardSection() {
        $cards = Card::all();
        return $cardView = view('sectionsTelaPrincipal.card', compact('cards'));
    }
}
