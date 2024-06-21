<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function index(){

        return view('Ejercicio3.Ejercicio3');
    }
    public function historial(){

        return view('ejercicio3.historial');
    }
    public function simular(){

        return view('ejercicio3.simular');
    }
    public function ayuda(){

        return view('ejercicio3.ayuda');
    }

}
