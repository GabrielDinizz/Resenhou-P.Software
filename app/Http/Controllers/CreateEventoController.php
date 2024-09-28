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

    public function Etapa2() {
        return view('layouts.CreateEventos.etapa2');
    }

    public function Etapa3() {
        return view('layouts.CreateEventos.etapa3');
    }

    public function Etapa4() {
        return view('layouts.CreateEventos.etapa4');
    }

    public function Etapa5() {
        return view('layouts.CreateEventos.etapa5');
    }
}
