<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialEjercicio5;


class Ejercicio5Controller extends Controller
{
    public function index(){

        return view('ejercicio5.ejercicio5' );
    }
    public function historial(){
        $historial = HistorialEjercicio5::all();
        return view('ejercicio5.historial', compact('historial'));
    }
    public function simular(){

        return view('ejercicio5.simular');
    }
    public function ayuda(){

        return view('ejercicio5.ayuda');
    }


    public function actualizarhistorial(Request $request){


        // Crear una nueva instancia del modelo y guardar los datos
        $historial = new HistorialEjercicio5();
        $historial->InventarioInicial = $request->InventarioInicial;
        $historial->CostoDeOrdenar = $request->CostoDeOrdenar;
        $historial->CostoDeInventario = $request->CostoDeInventario;
        $historial->CostoDeFaltante = $request->CostoDeFaltante;
        $historial->PoliticaQ = $request->PoliticaQ;
        $historial->PoliticaR = $request->PoliticaR;
        $historial->CostoTotal = $request->CostoTotal;


        // Guardar en la base de datos
        $historial->save();

        // Retornar una respuesta exitosa
        return response()->json(['message' => 'Datos actualizados con éxito'], 200);
        }

}
