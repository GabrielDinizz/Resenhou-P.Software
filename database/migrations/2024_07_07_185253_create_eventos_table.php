<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(true);
            $table->string('local')->nullable(true);
            $table->timestamp('data');
            $table->decimal('valor', 8, 2)->nullable(true); // Assumindo que 'valor' é um valor monetário
            $table->text('descricao')->nullable(true);
            $table->string('categoria')->nullable(true);
            $table->json('imgURL')->nullable(true); // Usando JSON para múltiplas URLs
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
