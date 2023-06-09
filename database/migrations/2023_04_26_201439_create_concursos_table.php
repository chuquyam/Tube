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
        Schema::create('concursos', function (Blueprint $table) {
            $table->id();
            $table->string('codconcurso');
            $table->string('nomedoconcurso');
            $table->string('numerodoedital');
            $table->string('nomedoinstituto');
            $table->string('nomedocargo');
            $table->string('nomedaorganizadora');
            $table->date('datadaprova');
            $table->date('datadeinicio');
            $table->date('datafinal');
            $table->string('nomeinterno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concursos');
    }
};
