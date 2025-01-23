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
        Schema::create('cita_medicas', function (Blueprint $table) {
            $table->id();
            $table->integer('estado')->default('1');
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger('idMedico');
            $table->unsignedBigInteger('idPaciente');
            $table->timestamps();

            $table->foreign('idMedico')->references('id')->on('medicos')->onDelete('cascade');
            $table->foreign('idPaciente')->references('id')->on('pacientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cita_medicas');
    }
};
