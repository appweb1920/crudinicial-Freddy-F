<?php

namespace App\Http\Controllers;

use App\recolectores;
use Illuminate\Http\Request;

class recolectores_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recolectores= recolectores::all();
        //TODO: Ajustar VISTA
        return view('verRecolectores')->with( 'recolectores', $recolectores);
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
    public function store(Request $request)
    {
        $nuevoRecolector = new recolectores();
        $nuevoRecolector->nombre = $request->nombre;
        $nuevoRecolector->diasRecoleccion = $request->diasRecoleccion;
        $nuevoRecolector->save();
        return redirect('inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recolector = recolectores::find($id);
        return view('detallesRecolector')->with('recolector', $recolector);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recolector = recolectores::find($id);
        return view("editaRecolector")->with("recolector",$recolector);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $recolector = recolectores::find($request->id);
        $recolector->nombre = $request->nombre;
        $recolector->diasRecoleccion = $request->diasRecoleccion;
        $recolector->save();

        return redirect('recolectores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recolectores  $recolectores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recolector = recolectores::find($id);
        $recolector->delete();
        
        return back();
    }
}
