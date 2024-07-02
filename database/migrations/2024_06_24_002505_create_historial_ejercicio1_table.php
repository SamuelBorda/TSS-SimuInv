<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialEjercicio1', function (Blueprint $table) {
            $table->id();
            $table->integer('Numerodias');
            $table->integer('Inventario');
            $table->integer('Costomantenimiento');
            $table->integer('Costoordenar');
            $table->integer('Costofaltante');
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
        Schema::dropIfExists('historialEjercicio1');
    }
};
