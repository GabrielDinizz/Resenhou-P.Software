<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Evento;
use Illuminate\Http\Request;

class ListEventosController extends Controller
{
    public function listar(Request $request)
    {
        $categoria = $request->input('categoria');
        $cont = $request->input('cont', 4); // Número de itens por página

        if ($categoria) {
            $eventos = Evento::where('categoria', $categoria)->paginate($cont);
        } else {
            $eventos = Evento::paginate($cont);
        }

        // Manter os parâmetros na paginação
        $eventos->appends($request->except('page'));

        return view('layouts.ListEventos', [
            'eventos' => $eventos,
            'categoriaSelecionada' => $categoria
        ]);
    }

    public function index(Request $request)
    {
        $cont = $request->input('cont', 4);
        $isPaginate = $request->input('isPaginate', true);

        if ($cont == 0) {
            $eventos = Evento::paginate(4);
        } else {
            if ($isPaginate) {
                $eventos = Evento::paginate($cont);
            } else {
                $eventos = Evento::limit($cont)->get();
            }
        }

        // Manter os parâmetros na paginação
        $eventos->appends($request->except('page'));

        return view('layouts.ListEventos', compact('eventos', 'cont', 'isPaginate'));
    }
}
