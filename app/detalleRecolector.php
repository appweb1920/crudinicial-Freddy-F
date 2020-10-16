<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleRecolector extends Model
{
    protected $table = "detallesRecolector";
    protected $fillable = ["idRecolector","idPuntoReciclaje"];
}
