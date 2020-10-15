<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recolectores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recolectores', function (Blueprint $table){
            //ID de la tabla
            $table->id();   //=$table->bigIncrements('id').
            $table->string('nombre');
            $table->string('diasRecoleccion');
            // NOTA: Quizas pueda ser mejor especificar
            // los dias en una tabla por cada dia sea una
            // relacion a la tabla
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recolectores');
    }
}
