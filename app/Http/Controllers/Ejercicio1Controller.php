<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialEjercicio1;

class Ejercicio1Controller extends Controller
{
    public function index(){

        return view('ejercicio1.ejercicio1' );
    }
    public function historial(){
        $historial = HistorialEjercicio1::all();
        return view('ejercicio1.historial', compact('historial'));
    }
    public function simular(){

        return view('ejercicio1.simular');
    }
    public function ayuda(){

        return view('ejercicio1.ayuda');
    }


    public function actualizarhistorial(Request $request){


        // Crear una nueva instancia del modelo y guardar los datos
        $historial = new HistorialEjercicio1();
        $historial->Numerodias = $request->NumeroDias;
        $historial->Inventario = $request->Inventario;
        $historial->Costomantenimiento = $request->Costomantenimiento;
        $historial->Costoordenar = $request->Costoordenar;
        $historial->Costofaltante = $request->Costofaltante;
        $historial->Costopolitica1 = $request->costo1;
        $historial->Costopolitica2 = $request->costo2;
        $historial->Mejoropcion = $request->Mejoropcion;

        // Guardar en la base de datos
        $historial->save();

        // Retornar una respuesta exitosa
        return response()->json(['message' => 'Datos actualizados con éxito'], 200);
        }

}
