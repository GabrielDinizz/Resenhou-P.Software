<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        //Eventos
        Evento::create([
            'nome' => 'Péricles Céu Lilas',
            'imgURL' => 'https://folhadecuritiba.com.br/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-04-at-11.05.54-jpeg.webp',
            'local' => 'SP - Teatro Positivo',
            'valor' => 55.55,
            'data' => '2025-08-20 21:00', // Armazenando a data completa
        ]);

        Evento::create([
            'nome' => 'Baile Funk Mc Pedrinho',
            'imgURL' => 'https://www.designi.com.br/images/preview/10312743.jpg',
            'local' => 'BH - Serra',
            'valor' => 30.95,
            'data' => '2024-12-12 23:30', // Armazenando a data completa
        ]);   

        Evento::create([
            'nome' => 'Baile do Bololô',
            'imgURL' => 'https://d2aflxsgc0z59a.cloudfront.net/events/2343bf95-8314-475c-9b01-65827becffb4_banner.jpeg', 
            'local' => 'BH - Beira Linha',
            'valor' => 27.00,
            'data' => '2025-07-5 20:00', 
        ]);

        Evento::create([
            'nome' => 'Ana Castela',
            'imgURL' => 'https://s3.guicheweb.com.br/imagenseventos/23-05-2023_09-35-15.jpg',
            'local' => 'BH - Mineirão',
            'valor' => 120.00,
            'data' => '2025-09-29 23:00', 
            
        ]);

        Evento::create([
            'nome' => 'Menos é Mais',
            'imgURL' => 'https://s3.guicheweb.com.br/imagenseventos/04-09-2023_09-38-08.jpg',
            'local' => 'Santa Luzia - MegaSpace ',
            'valor' => 70.00,
            'data' => '2025-10-17 11:00', 
        ]);

        //Login 
        //?o que é esse Hash?
        User::factory()->create([
            'name' => 'Papaleguas',
            'email' => 'acme@acme.com',
            'password' => Hash::make('123456')
        ]);
    }
}
