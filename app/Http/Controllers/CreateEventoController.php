<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;

class CreateEventoController extends Controller
{
    public function Etapa1() {
        return view('layouts.CreateEventos.etapa1', ['dados' => session('evento')]);
    }

    public function saveEtapa1(Request $request) {

         $dados = $request->validate([
            'evento_nome' => 'string',
            'evento_data' => 'string',
            'evento_hora' => 'string',
        ]);

        session(['evento' => array_merge(session('evento', []), $dados)]);

        return redirect()->route('evento.etapa2');
    }

    public function Etapa2() {
        return view('layouts.CreateEventos.etapa2', ['dados' => session('evento')]);
    }

    public function saveEtapa2(Request $request) {

        $dados = $request->validate([
            'evento_descricao' => 'string',
            'evento_categoria' => 'string',
            'evento_preco' => 'string',
        ]);

        session(['evento' => array_merge(session('evento', []), $dados)]);

        return redirect()->route('evento.etapa3');
        
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
