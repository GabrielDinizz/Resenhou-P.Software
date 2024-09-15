<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;

class CreateEventoController extends Controller
{
    public function Etapa1() {
        return view('layouts.CreateEventos.etapa1');
    }
}
