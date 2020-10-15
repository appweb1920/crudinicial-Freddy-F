<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleRecolector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesRecolector', function (Blueprint $table){
            // NOTA: Recordar que se debe conservar la integridad reefrencial:
            //FORMA TRADICIONAL (~SQL):
            //$table->unsignedBigInteger('idFK'); //ID Foranea 
            //$table->foreign('idFK')->references('idReferenced')->on('TableReferenced'); //REFERENCIA
            
            //FORMA ABREVIADA
            //NOTA $table->foreignId(...) = $table->unsignedBigInteger(...).
            //$table->foreignId('idFK')->constrained('TableReferenced', id='id') //->otherPropieties(...);
            $table->foreignId('idRecolector')
                  ->constrained('recolectores');
                  //->onDelete('cascade'); #FIXME: Hacer que funcione en una version Fork
            $table->foreignId('idPuntoReciclaje')
                  ->constrained('puntosdereciclaje');
                  //->onDelete('cascade'); #FIXME: Hacer que funcione en una version Fork
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallesRecolector');
    }
}
