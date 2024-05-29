<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;

class TableSeenderCards extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Card::create([
            'titulo' => 'Péricles Céu Lilas',
            'data' => 'Amanhã'
        ]);

        Card::create([
            'titulo' => 'Baile Funk Mc Pedrinho',
            'data' => 'Daqui uma semana'
        ]);
    }
}
