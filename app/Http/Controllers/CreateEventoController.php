<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;
use Carbon\Carbon;


class CreateEventoController extends Controller
{
    public function create()
    {
        return view('layouts.CreateEvento');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'nomeEvento' => 'required|string|max:255',
            'dataHora' => 'required|date_format:Y-m-d\TH:i',
            'categoria' => 'required|string|max:50',

        ]);

        // Extrai os dados validados
        $nomeEvento = $validatedData['nomeEvento'];
        $dataHora = $validatedData['dataHora'];
        $categoria = $validatedData['categoria'];

        // Convertendo a data/hora para o formato Y-m-d H:i:s
        $dataHoraFormatada = date('Y-m-d H:i:s', strtotime($dataHora));

        // Criando um novo evento e salvando no banco de dados usando atribuição em massa
        Evento::create([
            'nome' => $nomeEvento,
            'data' => $dataHoraFormatada,
            'categoria' => $categoria,
        ]);

        // Redireciona para a página inicial com uma mensagem de sucesso
        return redirect()->route('eventos.create')->with('success', 'Evento criado com sucesso!');
    }
}
