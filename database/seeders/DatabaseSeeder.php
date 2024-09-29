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

        Evento::create([
            'evento_nome' => 'Péricles Céu Lilas',
            'imagem' => 'https://folhadecuritiba.com.br/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-04-at-11.05.54-jpeg.webp',
            'local_nome' => 'SP - Teatro Positivo',
            'evento_preco' => 55.55,
            'evento_data' => '2025-08-20', // Apenas a data
            'evento_hora' => '21:00:00', // Hora separada
            'evento_categoria' => 'pagode',
        ]);

        Evento::create([
            'evento_nome' => 'Baile do Bololô',
            'imagem' => 'https://d2aflxsgc0z59a.cloudfront.net/events/2343bf95-8314-475c-9b01-65827becffb4_banner.jpeg',
            'local_nome' => 'BH - Beira Linha',
            'evento_preco' => 27.00,
            'evento_data' => '2025-07-05', // Apenas a data
            'evento_hora' => '20:00:00', // Hora separada
            'evento_categoria' => 'pagode',
        ]);

        Evento::create([
            'evento_nome' => 'Ana Castela',
            'imagem' => 'https://s3.guicheweb.com.br/imagenseventos/23-05-2023_09-35-15.jpg',
            'local_nome' => 'BH - Mineirão',
            'evento_preco' => 120.00,
            'evento_data' => '2025-09-29', // Apenas a data
            'evento_hora' => '23:00:00', // Hora separada
            'evento_categoria' => 'sertanejo',
        ]);

        Evento::create([
            'evento_nome' => 'Menos é Mais',
            'imagem' => 'https://s3.guicheweb.com.br/imagenseventos/04-09-2023_09-38-08.jpg',
            'local_nome' => 'Santa Luzia - MegaSpace ',
            'evento_preco' => 70.00,
            'evento_data' => '2025-10-17', // Apenas a data
            'evento_hora' => '11:00:00', // Hora separada
            'evento_categoria' => 'pagode',
        ]);

        // Adicionando mais eventos com diferentes categorias

        Evento::create([
            'evento_nome' => 'Sertanejo em Alta',
            'imagem' => 'https://www.aen.pr.gov.br/sites/default/arquivos_restritos/files/imagem/2024-02/20240216_agb_show_verao_maior_-_amado-5.jpg',
            'local_nome' => 'BH - Centro',
            'evento_preco' => 45.00,
            'evento_data' => '2024-11-15', // Apenas a data
            'evento_hora' => '22:00:00', // Hora separada
            'evento_categoria' => 'sertanejo',
        ]);

        Evento::create([
            'evento_nome' => 'Eletrônica na Praça',
            'imagem' => 'https://culturanf.com.br/wp-content/uploads/2023/12/fotografia-festival-eletronico-luzes-multicultural.webp',
            'local_nome' => 'BH - Praça da Liberdade',
            'evento_preco' => 50.00,
            'evento_data' => '2024-10-20', // Apenas a data
            'evento_hora' => '21:00:00', // Hora separada
            'evento_categoria' => 'eletronica',
        ]);

        Evento::create([
            'evento_nome' => 'Baile de Pagode',
            'imagem' => 'https://wx.mlcdn.com.br/ponzi/production/portaldalu/108838_00.jpg',
            'local_nome' => 'BH - Bairro de Lourdes',
            'evento_preco' => 35.00,
            'evento_data' => '2024-12-01', // Apenas a data
            'evento_hora' => '23:00:00', // Hora separada
            'evento_categoria' => 'pagode',
        ]);

        Evento::create([
            'evento_nome' => 'Funk na Arena',
            'imagem' => 'https://s2-oglobo.glbimg.com/iejEUySILUDANB1_ocyd2EGwZM8=/0x353:1577x1766/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_da025474c0c44edd99332dddb09cabe8/internal_photos/bs/2023/B/2/SbtkpDSB6i25uE0PBbpQ/img-3604.jpg',
            'local_nome' => 'BH - Arena Esportes',
            'evento_preco' => 40.00,
            'evento_data' => '2025-01-10', // Apenas a data
            'evento_hora' => '00:00:00', // Hora separada
            'evento_categoria' => 'funk',
        ]);

        Evento::create([
            'evento_nome' => 'Sertanejo Acústico',
            'imagem' => 'https://imagens.ebc.com.br/v_yJI_Ycm9TXh31Z-uS0jQc39YA=/1170x700/smart/https://agenciabrasil.ebc.com.br/sites/default/files/thumbnails/image/alta_captura_de_tela_2024-01-04_094759_jv.jpg?itok=sFkNhF8A',
            'local_nome' => 'BH - Clube da Esquina',
            'evento_preco' => 60.00,
            'evento_data' => '2024-12-25', // Apenas a data
            'evento_hora' => '21:00:00', // Hora separada
            'evento_categoria' => 'sertanejo',
        ]);

        User::create([
            'name' => 'teste',
            'email' => 'teste@email.com',
            'password' => Hash::make('12345678'), // Criptografando a senha
            'cpf' => '999.999.99-99',
            'birthdate' => '2000-01-01',
            'avatar' => 'avatar2',
        ]);
    }
}
