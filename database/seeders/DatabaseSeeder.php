<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        Card::create([
            'titulo' => 'Péricles Céu Lilas',
            'data' => 'Amanhã',
            'imgURL' => 'https://folhadecuritiba.com.br/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-04-at-11.05.54-jpeg.webp' 
        ]);

        Card::create([
            'titulo' => 'Baile Funk Mc Pedrinho',
            'data' => 'Daqui uma semana',
            'imgURL' => 'https://www.designi.com.br/images/preview/10312743.jpg' 
        ]);        
    }
}
