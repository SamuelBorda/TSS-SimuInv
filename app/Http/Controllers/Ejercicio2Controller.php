<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


class Ejercicio2Controller extends Controller
{
    public function index(){

        return view('ejercicio2.ejercicio2');
    }
    public function historial(){
        $filePath = storage_path('app/public/simulacion-historial.json');

        //Verificar si el archivo existe
        if (File::exists($filePath)) {
            //Leer el contenido del archivo JSON
            $content = File::get($filePath);

            //Decodificar el contenido JSON
            $simulations = json_decode($content, true);

            //Retornar la vista 'historial' con los datos de simulaciones
            return view('ejercicio2.historial', ['simulations' => $simulations]);
        } else {
            //Si el archivo no existe retornar una vista 'historial' con datos vacíos
            return view('ejercicio2.historial', ['simulations' => []]);
        }
    }
    public function simular(){

        return view('ejercicio2.simular');
    }
    public function ayuda(){

        return view('ejercicio2.ayuda');
    }
    public function guardarSimulacion(Request $request) {
        $request->validate([
            'simulationTime' => 'required|integer|min:1',
            'componentCost' => 'required|integer|min:1',
            'disconnectionCost' => 'required|integer|min:1'
        ]);

        $simulationTime = $request->input('simulationTime');
        $componentCost = $request->input('componentCost');
        $disconnectionCost = $request->input('disconnectionCost');

        $policy1 = $this->simularPolitca($simulationTime, $componentCost, $disconnectionCost, 1);
        $policy2 = $this->simularPolitca($simulationTime, $componentCost, $disconnectionCost, 2);

        $mejorOpcion = $policy1['costoTotal'] < $policy2['costoTotal'] ? 'Política 1' : 'Política 2'; //ELEGIR LA POLITICA SEGUN EL COSTO

        $newSimulation = [
            'tiempo_simulacion' => $simulationTime,
            'costo_componente' => $componentCost,
            'costo_desconexion' => $disconnectionCost,
            'costo_politica1' => $policy1['costoTotal'],
            'costo_politica2' => $policy2['costoTotal'],
            'mejor_opcion' => $mejorOpcion
        ];

        $filePath = storage_path('app/public/simulacion-historial.json');

        if (File::exists($filePath)) {
            $content = File::get($filePath);
            $simulations = json_decode($content, true);
        } else {
            $simulations = [];
        }

        $simulations[] = $newSimulation;
        File::put($filePath, json_encode($simulations, JSON_PRETTY_PRINT));

        return response()->json([
            'policy1Data' => $policy1,
            'policy2Data' => $policy2
        ]);
    }

    private function simularPolitca($simulationTime, $componentCost, $disconnectionCost, $policy) {
        $costoTotal = 0;
        $numReemplazos = 0;
        $componentLives = [];
        $tiempoTotalSimu = 0;

        if ($policy === 1) {
            for ($i = 0; $i < 4; $i++) {
                $componentLives[] = 600 + 100 * $this->normalRandom();
            }
            while ($simulationTime > 0) {
                $minLife = min($componentLives);
                if ($minLife > $simulationTime) {
                    $tiempoTotalSimu += $simulationTime;
                    break;
                }

                $simulationTime -= $minLife;
                $tiempoTotalSimu += $minLife;
                $costoTotal += $componentCost + $disconnectionCost;
                $numReemplazos++;
                $index = array_search($minLife, $componentLives);
                $componentLives[$index] = 600 + 100 * $this->normalRandom();
            }
        } else {
            while ($simulationTime > 0) {
                $minLife = 600 + 100 * $this->normalRandom();
                if ($minLife > $simulationTime) {
                    $tiempoTotalSimu += $simulationTime;
                    break;
                }

                $simulationTime -= $minLife;
                $tiempoTotalSimu += $minLife;
                $costoTotal += 4 * $componentCost + 2 * $disconnectionCost;
                $numReemplazos++;
            }
        }

        return ['costoTotal' => $costoTotal, 'numReemplazos' => $numReemplazos, 'tiempoTotalSimu' => $tiempoTotalSimu];
    }

    private function normalRandom() {
        $u = 0;
        $v = 0;
        while ($u === 0) $u = mt_rand() / mt_getrandmax();
        while ($v === 0) $v = mt_rand() / mt_getrandmax();
        return sqrt(-2.0 * log($u)) * cos(2.0 * M_PI * $v);
    }
}