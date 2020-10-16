<?php

namespace App\Http\Controllers;

use App\detalleRecolector;
use Illuminate\Http\Request;
use App\recolectores;


class detalleRecolector_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($idRecolector, $idPunto)
    {
        $nuevoRecolector = new detalleRecolector();
        $nuevoRecolector->idRecolector = $idRecolector;
        $nuevoRecolector->idPuntoReciclaje = $idPunto;
        $nuevoRecolector->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalleRecolector  $detalleRecolector
     * @return \Illuminate\Http\Response
     */
    public function show($idRecolector)
    {
        $recolector = recolectores::find($idRecolector);
        // dd($recolector);
        $puntosAgregados = $recolector->getPuntosRecoleccion();
        $puntosNoAgregados = $recolector->getNoPuntosRecoleccion();
        // dd($puntosAgregados);
        // dd($puntosNoAgregados);
        return view("verDetallesRecolector")
            ->with("recolector", $recolector)
            ->with("puntosAgregados", $puntosAgregados)
            ->with("puntosNoAgregados", $puntosNoAgregados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalleRecolector  $detalleRecolector
     * @return \Illuminate\Http\Response
     */
    public function edit(detalleRecolector $detalleRecolector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalleRecolector  $detalleRecolector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalleRecolector $detalleRecolector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalleRecolector  $detalleRecolector
     * @return \Illuminate\Http\Response
     */
    public function destroy($idRecolector, $idPunto)
    {
        $detalleRecolector = detalleRecolector::where([
            ["idRecolector","=",$idRecolector],
            ["idPuntoReciclaje", "=", $idPunto]
            ]);
        $detalleRecolector->delete();
        return back();
    }
}
