<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function index(){

        return view('ejercicio2.ejercicio2');
    }
    public function historial(){

        return view('ejercicio2.historial');
    }
    public function simular(){

        return view('ejercicio2.simular');
    }
    public function ayuda(){

        return view('ejercicio2.ayuda');
    }
}
