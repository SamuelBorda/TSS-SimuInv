<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialEjercicio1 extends Model
{
    use HasFactory;

    protected $table = 'historialEjercicio1';

    protected $fillable = [
        'Numerodias',
        'Inventario',
        'Costomantenimiento',
        'Costoordenar',
        'Costofaltante',
        'Costopolitica1',
        'Costopolitica2',
        'Mejoropcion',
    ];
}
