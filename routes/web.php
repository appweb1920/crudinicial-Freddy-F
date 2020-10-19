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


/*FIXME: PARCHES TEMPORALES (para "editarPunto"): (VER DETALLES EN LA PARTE DETALLADA MÁS ABAJO) */
// Route::get('/editarPunto/inicio', function () { return redirect('inicio'); });
// Route::get('/editarPunto/recolectores', function () { return redirect('recolectores'); });
// Route::get('/editarPunto/puntosRecoleccion', function () { return redirect('puntosRecoleccion'); });
// Route::get('/editarPunto/registraRecolector', function () { return redirect('registraRecolector'); });
// Route::get('/editarPunto/registraPuntoReciclaje', function () { return redirect('registraPuntoReciclaje'); });
/*FIXME: PARCHES TEMPORALES (para "editarPunto"): (VER DETALLES EN LA PARTE DETALLADA MÁS ABAJO) */
// Route::get('/editarRecolector/inicio', function () { return redirect('inicio'); });
// Route::get('/editarRecolector/recolectores', function () { return redirect('recolectores'); });
// Route::get('/editarRecolector/puntosRecoleccion', function () { return redirect('puntosRecoleccion'); });
// Route::get('/editarRecolector/registraRecolector', function () { return redirect('registraRecolector'); });
// Route::get('/editarRecolector/registraPuntoReciclaje', function () { return redirect('registraPuntoReciclaje'); });

Route::get('/editarPunto/{id}', 'puntosDeReciclaje_Controller@edit');
Route::get('/editarRecolector/{id}', 'recolectores_Controller@edit');

Route::post('/editarPunto/editarPunto', 'puntosDeReciclaje_Controller@update');
Route::post('/editarRecolector/editarRecolector', 'recolectores_Controller@update');

/* FIXME: ¿COMO SE PUEDE HACER UN REDIRECCIONAMIENTO CORRECTO HACIA UN ELEMENTO DE LA BARRA?*/
/*NOTA: "PARCHES": Evita un mal direccionamiento desde detallesRecolector hacia cualquier 
                    punto en la barra de navegacion.    
        Ejemplo: redireccion de DetallesRecolector a Recolectores (hacia atras), sin generar 
        una vista sobre la direccion actual
  NOTA: #2 Este conjunto de rutas deben estar ANTES DE LAS DE ABAJO , de lo contrario no funcionan.
        FIXME: ¿Como influye el orden de declaracion de rutas en el enrutamiento?
*/
// Route::get('/detallesRecolector/inicio', function () { return redirect('inicio'); });
// Route::get('/detallesRecolector/recolectores', function () { return redirect('recolectores'); });
// Route::get('/detallesRecolector/puntosRecoleccion', function () { return redirect('puntosRecoleccion'); });
// Route::get('/detallesRecolector/registraRecolector', function () { return redirect('registraRecolector'); });
// Route::get('/detallesRecolector/registraPuntoReciclaje', function () { return redirect('registraPuntoReciclaje'); });

Route::get('/detallesRecolector/{id}', 'detalleRecolector_Controller@show');
Route::get('/detallesRecolector/borrarPuntoRecolector/{idRecolector}/{idPunto}', 'detalleRecolector_Controller@destroy');
Route::get('/detallesRecolector/asignarPuntoRecolector/{idRecolector}/{idPunto}', 'detalleRecolector_Controller@store');




/* TODO: AGREGAR: 
-[x] CRUD de cada uno "PUNTOS","RECOLECTORES"(Crear, R?, Update, Delete)
-[x] PANTALLAS DE CREACION ("PUNTOS","RECOLECTORES")
-[x] PANTALLAS DE LISTADO ("PUNTOS","RECOLECTORES")
-[x] PANTALLAS DE EDICION ("PUNTOS","RECOLECTORES")
-[x] En la PANTALLAS DE LISTADO ("RECOLECTOR") agregar "Detalles" se permite agregar CREAR UNA RELACION ("RECOLECTORES" -> "PUNTOS")
 */