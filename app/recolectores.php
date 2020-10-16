<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\detalleRecolector;
use Illuminate\Support\Facades\DB;

class recolectores extends Model
{
    protected $table = "recolectores";
    protected $fillable = ["nombre", "diasRecoleccion"];

    public function getPuntosRecoleccion()
    {
        // $detallesRecolector = detalleRecolector::where('idRecolector', $this->id)->get();
        // $puntosRecoleccion = puntosDeReciclaje::where('idPuntoReciclaje', )

        //p.tipoDeBasura, p.direccion, p.horaApertura, p.horaCierre
        $puntosRecoleccion = DB::select(
            'SELECT * 
             FROM detallesRecolector d, recolectores r, puntosDeReciclaje p
             WHERE d.idPuntoReciclaje = p.id AND d.idRecolector = r.id 
             AND r.id = ?', [$this->id]);
        
        // dd($puntosRecoleccion);
        return $puntosRecoleccion;
    }

    public function getNoPuntosRecoleccion()
    {
        // $detallesRecolector = detalleRecolector::where('idRecolector', $this->id)->get();
        // $puntosRecoleccion = puntosDeReciclaje::where('idPuntoReciclaje', )

        //p.tipoDeBasura, p.direccion, p.horaApertura, p.horaCierre
        $puntosNoRecoleccion = DB::select(
            'SELECT p.id, p.tipoDeBasura, p.direccion, p.horaApertura, p.horaCierre
             FROM puntosDeReciclaje p
             WHERE p.id NOT IN 
             (SELECT d.idPuntoReciclaje FROM detallesRecolector d, recolectores r
             WHERE r.id = ? AND d.idRecolector = r.id)',
             [$this->id]);
        return $puntosNoRecoleccion;
    }
    // dd($puntosRecoleccion);
}
