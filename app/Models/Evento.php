<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    // Explicitamente definir o nome da tabela
    protected $table = 'eventos';

    public $timestamps = false;

    protected $fillable = [
        'evento_nome',
        'evento_data',
        'evento_hora',
        'evento_descricao',
        'evento_categoria',
        'evento_preco',
        'local_nome',
        'local_cep',
        'local_rua',
        'local_numero',
        'local_bairro',
        'local_cidade',
        'local_estado',
        'imagem',
        'grupo_link',
    ];
}
