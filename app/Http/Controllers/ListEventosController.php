<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class ListEventosController extends Controller
{
    public function index(Request $request)
    {
        $cont = $request->input('cont', 4);
        $isPaginate = $request->input('isPaginate', true);

        if ($cont == 0) {
            $eventos = Evento::get();
        } else {
            if ($isPaginate) {
                $eventos = Evento::paginate($cont);
            } else {
                $eventos = Evento::limit($cont)->get();
            }
        }

        return view('layouts.ListEventos', compact('eventos','cont', 'isPaginate'));
    }


}
