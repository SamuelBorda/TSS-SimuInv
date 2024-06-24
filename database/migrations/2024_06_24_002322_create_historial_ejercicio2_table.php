<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialEjercicio2Table extends Migration
{
    public function up()
    {
        Schema::create('historialEjercicio2', function (Blueprint $table) {
            $table->id();
            $table->integer('TiempoHorasSimulacion');  // Renamed for consistency and to avoid spaces
            $table->integer('CostoPorComponente');     // Renamed for consistency and to avoid spaces
            $table->integer('CostoPorHoraDesconexion'); // Renamed for consistency and to avoid spaces
            $table->integer('Costopolitica1');
            $table->integer('Costopolitica2');
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
        Schema::dropIfExists('historialEjercicio2');
    }
}
