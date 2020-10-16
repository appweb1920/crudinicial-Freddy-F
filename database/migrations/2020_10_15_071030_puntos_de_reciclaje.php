<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PuntosDeReciclaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("puntosDeReciclaje", function (Blueprint $table){
            //ID de la tabla
            $table->id();   //=$table->bigIncrements('id').
            $table->string('tipoDeBasura');
            $table->string('direccion');
            // NOTA: DUDA, Como influye la precision? 
            //time(key, precision)
            $table->time('horaApertura', 0);
            $table->time('horaCierre', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntosDeReciclaje');
    }
}
