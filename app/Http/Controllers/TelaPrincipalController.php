<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelaPrincipalController extends Controller
{
    public function mostrarView()
    {
        return view('sectionsTelaPrincipal.card');
    }
}
