<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/inicio', function () { return view('inicio'); });
Route::get('/testBoostrap', function () { return view('boostrapTests'); });
Route::get('/testMaterial', function () { return view('materialCSSTests'); });

Route::get('/registraPuntoReciclaje', function () { return view('registraPuntoReciclaje'); });
Route::post('/guardaPuntoReciclaje', 'puntosDeReciclaje_Controller@store');

Route::get('/registraRecolector', function () { return view('registraRecolector'); });
Route::post('/guardaRecolector', 'recolectores_Controller@store');

Route::get('/puntosRecoleccion', 'puntosDeReciclaje_Controller@index');
Route::get('/recolectores', 'recolectores_Controller@index');

Route::get('/borrarPunto/{id}', 'puntosDeReciclaje_Controller@destroy');
Route::get('/borrarRecolector/{id}', 'recolectores_Controller@destroy');

Route::get('/editarPunto/{id}', 'puntosDeReciclaje_Controller@edit');
Route::get('/editarRecolector/{id}', 'recolectores_Controller@edit');

Route::post('/editarPunto/editarPunto', 'puntosDeReciclaje_Controller@update');
Route::post('/editarRecolector/editarRecolector', 'recolectores_Controller@update');

Route::get('/detallesRecolector/recolectores', 'recolectores_Controller@index');
Route::get('/detallesRecolector/{id}', 'detalleRecolector_Controller@show');
Route::get('/detallesRecolector/borrarPuntoRecolector/{idRecolector}/{idPunto}', 'detalleRecolector_Controller@destroy');
Route::get('/detallesRecolector/asignarPuntoRecolector/{idRecolector}/{idPunto}', 'detalleRecolector_Controller@store');


/* TODO: AGREGAR: 
-[x] CRUD de cada uno "PUNTOS","RECOLECTORES"(Crear, R?, Update, Delete)
-[x] PANTALLAS DE CREACION ("PUNTOS","RECOLECTORES")
-[x] PANTALLAS DE LISTADO ("PUNTOS","RECOLECTORES")
-[x] PANTALLAS DE EDICION ("PUNTOS","RECOLECTORES")
-[] En la PANTALLAS DE LISTADO ("RECOLECTOR") agregar "Detalles" se permite agregar CREAR UNA RELACION ("RECOLECTORES" -> "PUNTOS")
 */