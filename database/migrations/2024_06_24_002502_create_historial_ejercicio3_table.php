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
        Schema::create('historialEjercicio3', function (Blueprint $table) {
            $table->id();
            $table->integer('Cantidadcomprainicial');
            $table->integer('Costocomprainicial');
            $table->integer('Costoventa');
            $table->integer('Costocompraadicional');
            $table->integer('Costodevolucioninicial');
            $table->integer('Costodevolucionfinal');
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
        Schema::dropIfExists('historialEjercicio3');
    }
};
