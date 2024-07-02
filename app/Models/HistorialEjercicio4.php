<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialEjercicio4 extends Model
{
    use HasFactory;

    protected $table = 'historialEjercicio4';

    protected $fillable = [
        'NumeroSimulaciones',
        'TREMA',
        'Aceptacionproyecto',
        'PromedioTIR',
        'Mejoropcion',
    ];
}
