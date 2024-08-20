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
        Schema::create('livros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Titulo');
            $table->string('Autor');
            $table->unsignedBigInteger('Genero');
            $table->foreign('Genero')->references('id')->on('generos');
            $table->unsignedBigInteger('Prop');
            $table->foreign('Prop')->references('id')->on('membros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
