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
            'categoria' => 'pagode',
        ]);

        Evento::create([
            'nome' => 'Baile Funk',
            'imgURL' => 'https://www.designi.com.br/images/preview/10312743.jpg',
            'local' => 'BH - Serra',
            'valor' => 30.95,
            'data' => '2024-12-12 23:30', // Armazenando a data completa
            'categoria' => 'funk',
        ]);

        Evento::create([
            'nome' => 'Baile do Bololô',
            'imgURL' => 'https://d2aflxsgc0z59a.cloudfront.net/events/2343bf95-8314-475c-9b01-65827becffb4_banner.jpeg',
            'local' => 'BH - Beira Linha',
            'valor' => 27.00,
            'data' => '2025-07-5 20:00',
            'categoria' => 'pagode',
        ]);

        Evento::create([
            'nome' => 'Ana Castela',
            'imgURL' => 'https://s3.guicheweb.com.br/imagenseventos/23-05-2023_09-35-15.jpg',
            'local' => 'BH - Mineirão',
            'valor' => 120.00,
            'data' => '2025-09-29 23:00',
            'categoria' => 'sertanejo',

        ]);

        Evento::create([
            'nome' => 'Menos é Mais',
            'imgURL' => 'https://s3.guicheweb.com.br/imagenseventos/04-09-2023_09-38-08.jpg',
            'local' => 'Santa Luzia - MegaSpace ',
            'valor' => 70.00,
            'data' => '2025-10-17 11:00',
            'categoria' => 'pagode',
        ]);

        // Adicionando mais eventos com diferentes categorias

        Evento::create([
            'nome' => 'Sertanejo em Alta',
            'imgURL' => 'https://www.aen.pr.gov.br/sites/default/arquivos_restritos/files/imagem/2024-02/20240216_agb_show_verao_maior_-_amado-5.jpg',
            'local' => 'BH - Centro',
            'valor' => 45.00,
            'data' => '2024-11-15 22:00',
            'categoria' => 'sertanejo',
        ]);

        Evento::create([
            'nome' => 'Eletrônica na Praça',
            'imgURL' => 'https://culturanf.com.br/wp-content/uploads/2023/12/fotografia-festival-eletronico-luzes-multicultural.webp',
            'local' => 'BH - Praça da Liberdade',
            'valor' => 50.00,
            'data' => '2024-10-20 21:00',
            'categoria' => 'eletronica',
        ]);

        Evento::create([
            'nome' => 'Baile de Pagode',
            'imgURL' => 'https://wx.mlcdn.com.br/ponzi/production/portaldalu/108838_00.jpg',
            'local' => 'BH - Bairro de Lourdes',
            'valor' => 35.00,
            'data' => '2024-12-01 23:00',
            'categoria' => 'pagode',
        ]);

        Evento::create([
            'nome' => 'Funk na Arena',
            'imgURL' => 'https://s2-oglobo.glbimg.com/iejEUySILUDANB1_ocyd2EGwZM8=/0x353:1577x1766/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_da025474c0c44edd99332dddb09cabe8/internal_photos/bs/2023/B/2/SbtkpDSB6i25uE0PBbpQ/img-3604.jpg',
            'local' => 'BH - Arena Esportes',
            'valor' => 40.00,
            'data' => '2025-01-10 00:00',
            'categoria' => 'funk',
        ]);

        Evento::create([
            'nome' => 'Sertanejo Acústico',
            'imgURL' => 'https://imagens.ebc.com.br/v_yJI_Ycm9TXh31Z-uS0jQc39YA=/1170x700/smart/https://agenciabrasil.ebc.com.br/sites/default/files/thumbnails/image/alta_captura_de_tela_2024-01-04_094759_jv.jpg?itok=sFkNhF8A',
            'local' => 'BH - Clube da Esquina',
            'valor' => 60.00,
            'data' => '2024-12-25 21:00',
            'categoria' => 'sertanejo',
        ]);

        User::create([
            'name' => 'teste',
            'email' => 'teste@email.com',
            'password' => '12345678',
            'cpf' => '999.999.99-99',
            'birthdate' => '2000-01-01',
            'avatar' => 'avatar2'
        ]);

    }
}
