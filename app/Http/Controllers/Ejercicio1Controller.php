<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function index(){

        return view('ejercicio1.ejercicio1');
    }
    public function historial(){

        return view('ejercicio1.historial');
    }
    public function simular(){

        return view('ejercicio1.simular');
    }
    public function ayuda(){

        return view('ejercicio1.ayuda');
    }
}
