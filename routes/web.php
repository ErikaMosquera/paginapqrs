<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ServicioController;

/*
|--------------------------------------------------------------------------
|Rutas Wer
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/', 'welcome')->name('inicio');

//Esta línea define una ruta personalizada para mostrar un formulario de registro. 
//Utiliza el método GET para acceder a la URL /registrarse.
//Cuando un usuario accede a esta URL, la solicitud será manejada por el método index del controlador 

Route::post('/servicios', [ServicioController::class, 'store'])->name('servicios.store');
Route::get('/registrarse', [RegistroController::class, 'index'])->name('registrarse.index');
Route::resource('/servicios', ServicioController::class); // Crea 7 rutas para el CRUD de Servicios
Route::resource('/clientes', ClienteController::class); // Crea 7 rutas para el CRUD de Clientes

//Configurar la ruta y el controlador para el registro:


Route::get('/registros', [RegistroController::class, 'index'])->name('registros.index');
Route::get('/registros/create', [RegistroController::class, 'create'])->name('registros.create');
Route::post('/registros', [RegistroController::class, 'store'])->name('registro.store');
Route::get('/registros/{registro}/edit', [RegistroController::class, 'edit'])->name('registros.edit');

//En web.php, crea una nueva ruta para mostrar la lista de usuarios registrados:
Route::get('/usuarios', [RegistroController::class, 'mostrarUsuarios'])->name('usuarios.index');
Route::post('/registros', [RegistroController::class, 'store'])->name('registros.store');
Route::delete('/registros/{registro}', [RegistroController::class, 'destroy'])->name('registros.destroy');
Route::put('/registros/{registro}', [RegistroController::class, 'update'])->name('registros.update');


Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

Route::post('servicio, servicioController@store');
Route::get('servicio, servicioController@index');
