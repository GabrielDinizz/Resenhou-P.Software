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
        'nome',
        'local',
        'data',
        'valor',
        'descricao',
        'categoria',
        'imgURL',
    ];
}
