<?php

namespace App\Http\Controllers;

use App\puntosDeReciclaje;
use Illuminate\Http\Request;


class puntosDeReciclaje_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntosReciclaje= puntosDeReciclaje::all();
        return view('verPuntosRecoleccion')->with( 'puntosReciclaje', $puntosReciclaje);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoPunto = new puntosDeReciclaje();
        $nuevoPunto->tipoDeBasura = $request->tipoDeBasura;
        $nuevoPunto->direccion = $request->direccion;
        $nuevoPunto->horaApertura = $request->horaApertura;
        $nuevoPunto->horaCierre = $request->horaCierre;
        $nuevoPunto->save();

        return redirect('inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\puntosDeReciclaje  $puntosDeReciclaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puntoReciclaje = puntosDeReciclaje::find($id);
        //TODO: Crear RUTA Y VISTA siguientes
        return view('detallesPuntoReciclaje')->with('puntoReciclaje', $puntoReciclaje);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\puntosDeReciclaje  $puntosDeReciclaje
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puntoReciclaje = puntosDeReciclaje::find($id);
        return view("editaPuntoReciclaje")->with("puntoReciclaje",$puntoReciclaje);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\puntosDeReciclaje  $puntosDeReciclaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $puntoReciclaje = puntosDeReciclaje::find($request->id);
        $puntoReciclaje->tipoDeBasura = $request->tipoDeBasura;
        $puntoReciclaje->direccion = $request->direccion;
        $puntoReciclaje->horaApertura = $request->horaApertura;
        $puntoReciclaje->horaCierre = $request->horaCierre;
        $puntoReciclaje->save();

        return redirect('puntosRecoleccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\puntosDeReciclaje  $puntosDeReciclaje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $puntoReciclaje = puntosDeReciclaje::find($id);
        $puntoReciclaje->delete();

        return back();
    }
}
