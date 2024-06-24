<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialEjercicio4;


class Ejercicio4Controller extends Controller
{
    public function index(){

        return view('ejercicio4.ejercicio4');
    }

    public function ayuda(){
        return view('ejercicio4.ayuda');
    }

    public function historial(){
        $historial = HistorialEjercicio4::all();
        return view('ejercicio4.historial' , compact('historial'));
    }

    public function simular(){
        return view('ejercicio4.simular');
    }

    public function actualizarhistorial(Request $request){


        // Crear una nueva instancia del modelo y guardar los datos
        $historial = new HistorialEjercicio4();
        $historial->NumeroSimulaciones = $request->NumeroSimulaciones;
        $historial->TREMA = $request->TREMA;
        $historial->Aceptacionproyecto = $request->Aceptacionproyecto;
        $historial->PromedioTIR = $request->PromedioTIR;
        $historial->Mejoropcion = $request->Mejoropcion;

        // Guardar en la base de datos
        $historial->save();

        // Retornar una respuesta exitosa
        return response()->json(['message' => 'Datos actualizados con éxito'], 200);
        }

}
