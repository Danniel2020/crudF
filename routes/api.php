<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ConexionRegistro;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/get-metodo/{id}/{nombre}',[InicioController::class, 'Inicio2']);

Route::get('/get-Datos',[InicioController::class, 'getDatos']);


Route::post('/post-Datos',[InicioController::class, 'guardarDatos']);

Route::get('/get-FiltroDato/{nombre}',[InicioController::class, 'filtroDato']);

Route::get('/get-FiltroDato2/{nombre}/{id}',[InicioController::class, 'filtroDato2']);

Route::get('/get-inner',[InicioController::class, 'inner2']);



//Rutas de la tabla registro

Route::get('/Datosdos',[ConexionRegistro::class, 'registro']);
Route::get('/get-inner',[ConexionRegistro::class, 'innerRegistro']);


