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
        return view('layouts.CreateEventos.etapa3', ['dados' => session('evento')]);
    }

    public function saveEtapa3(Request $request) {      
        
        $dados = $request->validate([
            'local_nome' => 'string',
            'local_cep' => 'string',
            'local_rua' => 'string',
            'local_numero' => 'string',
            'local_bairro' => 'string',
        ]);

        session(['evento' => array_merge(session('evento', []), $dados)]);

        return redirect()->route('evento.etapa4');
    }

    public function Etapa4() {
        return view('layouts.CreateEventos.etapa4', ['dados' => session('evento')]);
    }

    public function saveEtapa4(Request $request) {      
        
        $dados = $request->validate([
            'grupo_link' => 'string'
        ]);

        session(['evento' => array_merge(session('evento', []), $dados)]);

        return redirect()->route('evento.etapa5');
    }

    public function Etapa5() {
        // Recupera os dados da sessão
        $dados = session('evento');

        // Validação adicional, se necessário
        if (!$dados) {
            return redirect()->route('evento.etapa1')->with('error', 'Nenhum dado encontrado para salvar.');
        }

        // Salvando no banco de dados
        Evento::create($dados);

        // Limpando os dados da sessão após o salvamento
        session()->forget('evento');

        return redirect()->route('pagina-inicial')->with('success', 'Evento criado com sucesso!');
    }
}
