<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/simulations', function () {
    $filePath = storage_path('app/public/simulacion-historial.json');

    if (File::exists($filePath)) {
        $content = File::get($filePath);
        $simulations = json_decode($content, true);

        return response()->json($simulations);
    } else {
        return response()->json([], 404); //Retorna una respuesta vacía o error 404 si no existe el archivo
    }
});

