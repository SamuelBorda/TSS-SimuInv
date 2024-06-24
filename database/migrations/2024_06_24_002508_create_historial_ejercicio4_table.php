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
        Schema::create('historialEjercicio4', function (Blueprint $table) {
            $table->id();
            $table->integer('NumeroSimulaciones');
            $table->integer('TREMA');
            $table->integer('Aceptacionproyecto');
            $table->integer('PromedioTIR');
            $table->string('Mejoropcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historialEjercicio4');
    }
};
