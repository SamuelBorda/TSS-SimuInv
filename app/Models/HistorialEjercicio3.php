<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialEjercicio3 extends Model
{
    use HasFactory;

    protected $table = 'historialEjercicio3';

    protected $fillable = [
        'Cantidadcomprainicial',
        'Costocomprainicial',
        'Costoventa',
        'Costocompraadicional',
        'Costodevolucioninicial',
        'Costodevolucionfinal',
        'Costopolitica1',
        'Costopolitica2',
        'Mejoropcion',
    ];
}
