<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {

        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('evento_nome'); // Nome do evento
            $table->date('evento_data'); // Armazenar apenas a data no formato correto
            $table->time('evento_hora'); // Armazenar apenas a hora no formato correto
            $table->text('evento_descricao')->nullable(); // Coluna para descrição
            $table->string('evento_categoria'); // Categoria do evento
            $table->decimal('evento_preco', 8, 2)->nullable(); // Preço com precisão decimal
            $table->string('local_nome'); // Nome do local
            $table->string('local_cep', 8); // CEP
            $table->string('local_rua'); // Nome da rua
            $table->string('local_numero', 10);// Número do local
            $table->string('local_bairro'); // Bairro
            $table->string('local_cidade'); // Cidade
            $table->string('local_estado'); // Estado
            $table->string('imagem'); // Caminho para imagem
            $table->string('grupo_link')->nullable(); // Link para grupo
            $table->timestamps(); // Timestamps automáticos para created_at e updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
