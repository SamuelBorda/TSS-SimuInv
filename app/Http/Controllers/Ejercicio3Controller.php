<?php

namespace App\Http\Controllers;

use App\Models\HistorialEjercicio3;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function index(){

        return view('ejercicio3.ejercicio3');
    }
    public function historial(){
        $historial = HistorialEjercicio3::all();
        return view('ejercicio3.historial', compact('historial'));
    }
    public function simular(){

        return view('ejercicio3.simular');
    }


    public function ayuda(){

        return view('ejercicio3.ayuda');
    }

    public function actualizarhistorial(Request $request){
            // Validar los datos recibidos
            $request->validate([
                'Cantidadcomprainicial' => 'required|numeric',
                'Costocomprainicial' => 'required|numeric',
                'Costoventa' => 'required|numeric',
                'Costocompraadicional' => 'required|numeric',
                'Costodevolucioninicial' => 'required|numeric',
                'Costodevolucionfinal' => 'required|numeric',
                'Costopolitica1' => 'required|numeric',
                'Costopolitica2' => 'required|numeric',
                'Mejoropcion' => 'required|string',
            ]);

            // Crear una nueva instancia del modelo y guardar los datos
            $historial = new HistorialEjercicio3();
            $historial->Cantidadcomprainicial = $request->Cantidadcomprainicial;
            $historial->Costocomprainicial = $request->Costocomprainicial;
            $historial->Costoventa = $request->Costoventa;
            $historial->Costocompraadicional = $request->Costocompraadicional;
            $historial->Costodevolucioninicial = $request->Costodevolucioninicial;
            $historial->Costodevolucionfinal = $request->Costodevolucionfinal;
            $historial->Costopolitica1 = $request->Costopolitica1;
            $historial->Costopolitica2 = $request->Costopolitica2;
            $historial->Mejoropcion = $request->Mejoropcion;

            // Guardar en la base de datos
            $historial->save();

            // Retornar una respuesta exitosa
            return response()->json(['message' => 'Datos actualizados con éxito'], 200);
            }





}
