<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio4Controller extends Controller
{
    public function index(){

        return view('ejercicio4.ejercicio4');
    }

    public function ayuda(){
        return view('ejercicio4.ayuda');
    }

    public function historial(){
        return view('ejercicio4.historial');
    }

    public function simular(){
        return view('ejercicio4.simular');
    }
}
