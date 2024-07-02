<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialEjercicio5 extends Model
{
    use HasFactory;

    protected $table = 'historialEjercicio5';

    protected $fillable = [
        'InventarioInicial',
        'CostoDeOrdenar',
        'CostoDeInventario',
        'CostoDeFaltante',
        'PoliticaQ',
        'PoliticaR',
        'CostoTotal',
    ];
}
