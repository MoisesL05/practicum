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
        Schema::create('horario_atencions', function (Blueprint $table) {
            $table->id();
            $table->integer('diaDeSemana');
            $table->time('horaFin');
            $table->time('horaInicio');
            $table->unsignedBigInteger('idMedico');
            $table->timestamps();

            $table->foreign('idMedico')->references('id')->on('medicos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horario_atencions');
    }
};
