<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class TelaPrincipalController extends Controller
{
    public function index()
    {
        return view('layouts.TelaPrincipal', [
            'eventos' => Evento::all()
        ]); 
    }

}
