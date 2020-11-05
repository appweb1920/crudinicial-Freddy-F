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
// Route::get('/inicio/Admin/{id}', 'Auth\LoginController@paginaInicio');
// Route::get('/inicio/Lector/{id}', 'Auth\LoginController@paginaInicio');
// Route::get('/inicio/{id}', 'Auth\LoginController@paginaInicio');
// Route::get('/inicio', 'Auth\LoginController@paginaInicio');

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

Route::get('/detallesRecolector/{id}', 'detalleRecolector_Controller@show');
Route::get('/detallesRecolector/borrarPuntoRecolector/{idRecolector}/{idPunto}', 'detalleRecolector_Controller@destroy');
Route::get('/detallesRecolector/asignarPuntoRecolector/{idRecolector}/{idPunto}', 'detalleRecolector_Controller@store');


/* TODO:  TAREA:

Modificar CRUD Anterior:
[X] Agregar autenticacion con Roles
	-[X] Mostrar controles según rol
		-[X] Tipo 1 -Admin: Puede crear cosas
		-[X] Tipo 2 Lector: El lector puede ver la lista
		-[X] null solo se podrá registrar.
	-¿[X]? Restringir accesos según roles. -> FIXME: Usar Middleware
*/

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



//Pruebas con layout
// Route::get('/testLayout', function () { return view('testLayout'); });