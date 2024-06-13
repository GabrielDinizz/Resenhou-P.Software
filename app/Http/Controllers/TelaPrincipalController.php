<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class TelaPrincipalController extends Controller
{
    public function index()
    {
        return view('layouts.TelaPrincipal', [
            //porque se eu mudo o nome do 'cards' nao altera o resultado?
            'cards' => Card::all()
        ]); 
    }

}
