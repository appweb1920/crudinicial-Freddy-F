<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntosDeReciclaje extends Model
{
    protected $table = "puntosDeReciclaje";
    protected $fillable = ["tipoDeBasura","direccion","horaApertura","horaCierre"];
}
