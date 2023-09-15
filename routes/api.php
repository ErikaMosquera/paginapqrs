<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ServicioController;
use App\Http\Controllers\Api\V1\AutenticaController;
use App\Http\Controllers\Api\V1\SolicitudController;
use App\Http\Controllers\Api\V1\ClienteController;



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

Route::apiResource("v1/servicios", App\Http\Controllers\Api\V1\ServicioController::class);
//Ruta de validación de creación de usuarios
Route::apiResource('/v1/autenticacion', AutenticaController::class);
//ruta de validacion de creación de solicitudes
Route::apiResource('/v1/clientes', ClienteController::class);