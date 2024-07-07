<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;
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
        
        Card::create([
            'titulo' => 'Péricles Céu Lilas',
            'data' => 'Amanhã',
            'imgURL' => 'https://folhadecuritiba.com.br/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-04-at-11.05.54-jpeg.webp' 
        ]);

        Card::create([
            'titulo' => 'Baile do Bololô',
            'data' => 'Amanhã',
            'imgURL' => 'https://d2aflxsgc0z59a.cloudfront.net/events/2343bf95-8314-475c-9b01-65827becffb4_banner.jpeg' 
        ]);

        Card::create([
            'titulo' => 'Ana Castela',
            'data' => 'Amanhã',
            'imgURL' => 'https://s3.guicheweb.com.br/imagenseventos/23-05-2023_09-35-15.jpg' 
        ]);

        Card::create([
            'titulo' => 'Menos é Mais',
            'data' => 'Amanhã',
            'imgURL' => 'https://s3.guicheweb.com.br/imagenseventos/04-09-2023_09-38-08.jpg' 
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
