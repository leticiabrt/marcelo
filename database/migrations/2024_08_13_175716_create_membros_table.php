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
        Schema::create('membros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nome');
            $table->string('CPF');
            $table->string('Telefone');
            $table->unsignedBigInteger('livros_id');
            $table->foreign('livros_id')->references('id')->on('livros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membros');
    }
};
