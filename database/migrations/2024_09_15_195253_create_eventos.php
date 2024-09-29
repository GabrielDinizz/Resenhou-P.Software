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
            $table->string('evento_nome');
            $table->string('evento_data'); // Armazenando apenas a data
            $table->string('evento_hora'); // Armazenando apenas a hora
            $table->text('evento_descricao')->nullable(); // Coluna para descrição
            $table->string('evento_categoria');
            $table->string('evento_preco');
            $table->string('local_nome')->nullable();
            $table->string('local_cep')->nullable();
            $table->string('local_rua')->nullable();
            $table->string('local_numero')->nullable();
            $table->string('local_bairro')->nullable();
            $table->string('local_cidade')->nullable();
            $table->string('local_estado')->nullable();
            $table->string('imagem')->nullable();
            $table->string('grupo_link')->nullable();
            $table->timestamps(); // Se quiser habilitar timestamps automáticos
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
