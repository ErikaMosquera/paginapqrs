<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\AutenticaController;


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

Route::view('/', 'servicios.inicio')->name('inicio');

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

// ruta para mostrar la lista de usuarios registrados:
Route::get('/usuarios', [RegistroController::class, 'mostrarUsuarios'])->name('usuarios.index');
Route::post('/registros', [RegistroController::class, 'store'])->name('registros.store');
Route::delete('/registros/{registro}', [RegistroController::class, 'destroy'])->name('registros.destroy');
Route::put('/registros/{registro}', [RegistroController::class, 'update'])->name('registros.update');

// ruta para mostrar la lista de clientes registrados:

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

Route::post('servicio, servicioController@store');
Route::get('servicio, servicioController@index');

//Ruta de registro de usuarios
route::view('/registro', 'autenticacion.registro')->name('registro');
route::post('/registro', [AutenticaController::class, 'registro'])->name('registro.store');
//Ruta de login de usuarios
route::view('/login', 'autenticacion.login')->name('login');
route::post('/login', [AutenticaController::class, 'login'])->name('login.store');
//Ruta de logout del usuario
route::post('/logout', [AutenticaController::class, 'logout'])->name('logout');
//Ruta para editar el perfil de usuario
Route::get('/perfil', [AutenticaController::class, 'perfil'])->name('perfil');
Route::put('/perfil/{user}', [AutenticaController::class, 'perfilUpdate'])->name('perfil.update');
//Ruta para cambiar la contraseña de usuario
Route::put('/perfil/password/{user}',[AutenticaController::class,'passwordUpdate'])->name('password.update');
