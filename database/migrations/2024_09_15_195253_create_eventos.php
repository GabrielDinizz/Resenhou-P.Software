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
            $table->string('nome');
            $table->string('local');
            $table->timestamp('data');
            $table->decimal('valor', 8, 2);
            $table->text('descricao')->nullable();
            $table->string('categoria');
            $table->string('imgURL')->nullable();
            $table->timestamps(); // Se você quiser habilitar timestamps automáticos, pode remover "$timestamps = false" do modelo.
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
