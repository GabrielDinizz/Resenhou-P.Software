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
