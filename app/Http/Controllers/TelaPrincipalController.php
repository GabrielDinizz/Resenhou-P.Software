<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class TelaPrincipalController extends Controller
{
    public function index()
    {
        return view('layouts.TelaPrincipal', [
            'cards' => Card::all()
        ]); 
    }

}
