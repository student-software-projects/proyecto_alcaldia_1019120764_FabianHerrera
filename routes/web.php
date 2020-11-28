<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LigaController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
///////////////////////////////////////*Index*///////////////////////////////////////////////////////////////////
Route::get('/',[LigaController::class,'index'])->name('index');

/////////////////////////////////////*Localidades*///////////////////////////////////////////////////////////////
//index
Route::get('localidadesIndex',[LigaController::class,'localidadesIndex'])->name('localidad.index');

//Listar
Route::get('localidades',[LigaController::class,'localidadesListar'])->name('localidad.listar');

//Crear
Route::get('localidades/crear',[LigaController::class,'crearlocalidad'])->name('localidad.crearlocalidad');
Route::post('localidades',[LigaController::class,'guardarlocalidad'])->name('localidad.guardar');

//editar
Route::get('Localidades/editar/{id}',[LigaController::class,'editarlocalidad'])->name('localidad.editar');
Route::put('Localidades/{id}',[LigaController::class,'actualizarlocalidad'])->name('localidad.actualizar');

//Eliminar
Route::delete('Localidades/{id}',[LigaController::class,'eliminarlocalidad'])->name('localidad.eliminar');

/////////////////////////////////////*Equipos*///////////////////////////////////////////////////////////////
/// index
Route::get('equiposIndex',[EquiposController::class,'equiposIndex'])->name('equipos.index');

//listar
Route::get('equipos',[EquiposController::class,'listarequipos'])->name('equipos.listar');

//Crear
Route::get('equipos/crear',[EquiposController::class,'crearequipos'])->name('equipos.crear');
Route::post('equipos',[EquiposController::class,'guardarequipos'])->name('equipos.guardar');

//editar
Route::get('equipos/editar/{id}',[EquiposController::class,'editarequipos'])->name('equipos.editar');
Route::put('equipos/{id}',[EquiposController::class,'actualizarequipos'])->name('equipos.actualizar');

//eliminar
Route::delete('equipos/{id}',[LigaController::class,'eliminarequipos'])->name('equipos.eliminar');

/////////////////////////////////////*Jugadores*///////////////////////////////////////////////////////////////
///index
Route::get('jugadoresIndex',[JugadoresController::class,'jugadoresIndex'])->name('jugadores.index');

//listar
Route::get('jugadores',[JugadoresController::class,'jugadoreslistar'])->name('jugadores.listar');

//Crear
Route::get('jugadores/crear',[JugadoresController::class,'crearjugador'])->name('jugadores.crear');
Route::post('jugadores',[JugadoresController::class,'guardarjugadores'])->name('jugadores.guardar');

//editar
Route::get('jugadores/editar/{id}',[JugadoresController::class,'editarjugadores'])->name('jugadores.editar');
Route::put('jugadores/{id}',[JugadoresController::class,'actualizarjugadores'])->name('jugadores.actualizar');

//Eliminar
Route::delete('jugadores/{id}',[JugadoresController::class,'eliminarjugadores'])->name('jugadores.eliminar');
