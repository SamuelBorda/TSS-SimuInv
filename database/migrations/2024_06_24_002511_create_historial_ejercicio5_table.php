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
        Schema::create('historialEjercicio5', function (Blueprint $table) {
            $table->id();
            $table->integer('InventarioInicial');
            $table->integer('CostoDeOrdenar');
            $table->integer('CostoDeInventario');
            $table->integer('CostoDeFaltante');
            $table->integer('PoliticaQ');
            $table->integer('PoliticaR');
            $table->integer('CostoTotal');
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
        Schema::dropIfExists('historialEjercicio5');
    }
};
