<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialEjercicio2;

class Ejercicio2Controller extends Controller
{
    public function index(){

        return view('ejercicio2.ejercicio2');
    }
    public function historial(){
        $historial = HistorialEjercicio2::all();
        return view('ejercicio2.historial', compact('historial'));
    }
    public function simular(){

        return view('ejercicio2.simular');
    }
    public function ayuda(){

        return view('ejercicio2.ayuda');
    }


    public function actualizarhistorial(Request $request){


        // Crear una nueva instancia del modelo y guardar los datos
        $historial = new HistorialEjercicio2();
        $historial->TiempoHorasSimulacion = $request->TiempoHorasSimulacion;
        $historial->CostoPorComponente = $request->CostoPorComponente;
        $historial->CostoPorHoraDesconexion = $request->CostoPorHoraDesconexion;
        $historial->Costopolitica1 = $request->costo1;
        $historial->Costopolitica2 = $request->costo2;
        $historial->Mejoropcion = $request->Mejoropcion;

        // Guardar en la base de datos
        $historial->save();

        // Retornar una respuesta exitosa
        return response()->json(['message' => 'Datos actualizados con éxito'], 200);
        }

}
