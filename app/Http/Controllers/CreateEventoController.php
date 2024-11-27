<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class CreateEventoController extends Controller
{
    public function Etapa1()
    {
        return view('layouts.CreateEventos.etapa1', ['dados' => session('evento')]);
    }

    public function saveEtapa1(Request $request)
    {
        // Validação dos dados
        $dados = $request->validate([
            'evento_nome' => 'required|string|max:255',
            'evento_data' => 'required|string|date_format:d/m/Y',
            'evento_hora' => 'required|string|date_format:H:i',
        ], [
            'evento_nome.required' => 'O nome do evento é obrigatório.',
            'evento_data.required' => 'A data do evento é obrigatória.',
            'evento_data.date_format' => 'A data deve estar no formato DD/MM/YYYY e ser válida.',
            'evento_hora.required' => 'A hora do evento é obrigatória.',
            'evento_hora.date_format' => 'A hora deve estar no formato HH:MM e ser válida.',
        ]);

        // Convertendo data e hora para os formatos adequados
        $dados['evento_data'] = Carbon::createFromFormat('d/m/Y', $dados['evento_data'])->format('Y-m-d');
        $dados['evento_hora'] = Carbon::createFromFormat('H:i', $dados['evento_hora'])->format('H:i:s');

        // Salvando na sessão os dados ajustados
        session(['evento' => array_merge(session('evento', []), $dados)]);

        // Redireciona para a próxima etapa
        return redirect()->route('evento.etapa2');
    }

    public function Etapa2()
    {
        return view('layouts.CreateEventos.etapa2', ['dados' => session('evento')]);
    }
    
    public function saveEtapa2(Request $request)
    {
        // Validação dos dados
        $dados = $request->validate([
            'evento_descricao' => 'required|string|max:1000', // Limite de texto
            'evento_categoria' => 'required|string|max:50',  // Categoria com limite de tamanho
            'evento_preco' => 'nullable|string|regex:/^\d+(\,\d{1,2})?$/', // Valida o formato do preço
        ], [
            'evento_descricao.required' => 'A descrição do evento é obrigatória.',
            'evento_categoria.required' => 'A categoria do evento é obrigatória.',
            'evento_preco.regex' => 'O preço deve estar no formato R$00,00.',
        ]);
    
        // Convertendo o preço para o formato correto
        if (!empty($dados['evento_preco'])) {
            $dados['evento_preco'] = str_replace(',', '.', str_replace('R$', '', $dados['evento_preco']));
        }
    
        // Armazenando os dados ajustados na sessão
        session(['evento' => array_merge(session('evento', []), $dados)]);
    
        // Redireciona para a próxima etapa
        return redirect()->route('evento.etapa3');
    }
    

    public function Etapa3()
    {
        return view('layouts.CreateEventos.etapa3', ['dados' => session('evento')]);
    }

    public function saveEtapa3(Request $request)
    {
        // Validação dos dados
        $dados = $request->validate([
            'local_nome' => 'required|string|max:255',
            'local_cep' => 'required|string|size:8', // CEP com exatamente 8 caracteres
            'local_rua' => 'required|string|max:255',
            'local_numero' => 'required|string|max:10', // Número com limite de 10 caracteres
            'local_bairro' => 'required|string|max:255',
            'local_cidade' => 'required|string|max:255',
            'local_estado' => 'required|string|size:2', // Estado com exatamente 2 caracteres
        ], [
            'local_nome.required' => 'O nome do local é obrigatório.',
            'local_cep.required' => 'O CEP é obrigatório.',
            'local_cep.size' => 'O CEP deve ter exatamente 8 caracteres.',
            'local_rua.required' => 'A rua é obrigatória.',
            'local_numero.required' => 'O número é obrigatório.',
            'local_numero.max' => 'O número deve ter no máximo 10 caracteres.',
            'local_bairro.required' => 'O bairro é obrigatório.',
            'local_cidade.required' => 'A cidade é obrigatória.',
            'local_estado.required' => 'O estado é obrigatório.',
            'local_estado.size' => 'O estado deve ter exatamente 2 caracteres.',
        ]);
    
        // Salvando na sessão
        session(['evento' => array_merge(session('evento', []), $dados)]);
        // Redireciona para a próxima etapa
        return redirect()->route('evento.etapa4');
    }
    
    

    public function Etapa4()
    {
        return view('layouts.CreateEventos.etapa4', ['dados' => session('evento')]);
    }

    public function saveEtapa4(Request $request)
    {
        $dados = $request->validate([
            'grupo_link' => 'nullable|string',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Substituir a chave "image" pelos caminhos
        if ($request->hasFile('image')) {
            $dados['image'] = array_map(
                fn($image) => $image->store('images', 'public'),
                $request->file('image')
            );
        }

        session(['evento' => array_merge(session('evento', []), $dados)]);

        return redirect()->route('evento.etapa5');
    }


    public function Etapa5()
    {
        return view('layouts.CreateEventos.etapa5', ['dados' => session('evento')]);
    }

    public function saveEtapa5()
    {
        $dados = session('evento');

        if (!$dados) {
            return redirect()->route('evento.etapa1')->with('error', 'Nenhum dado encontrado para salvar.');
        }

        // Verifica se há imagens na chave "image" e converte para JSON
        $dados['imagem'] = json_encode($dados['image'] ?? []);

        // Remove qualquer chave desnecessária para evitar erro na criação
        unset($dados['images'], $dados['image']);

        Evento::create($dados);

        session()->forget('evento');

        return redirect()->route('pagina-inicial')->with('success', 'Evento criado com sucesso!');
    }
}
