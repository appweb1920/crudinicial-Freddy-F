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

Route::get('/registraPuntoReciclaje', function () { return view('registraPuntoReciclaje'); });
Route::post('/guardaPuntoReciclaje', 'puntosDeReciclaje_Controller@store');

Route::get('/registraRecolector', function () { return view('registraRecolector'); });
Route::post('/guardaRecolector', 'recolectores_Controller@store');

/* TODO: AGREGAR: 
- CRUD de cada uno "PUNTOS","RECOLECTORES"(Crear, R?, Update, Delete)
- PANTALLAS DE CREACION ("PUNTOS","RECOLECTORES")
- PANTALLAS DE LISTADO ("PUNTOS","RECOLECTORES")
- PANTALLAS DE EDICION ("PUNTOS","RECOLECTORES")
- En la PANTALLAS DE LISTADO ("RECOLECTOR") agregar "Detalles" se permite agregar CREAR UNA RELACION ("RECOLECTORES" -> "PUNTOS")
 */