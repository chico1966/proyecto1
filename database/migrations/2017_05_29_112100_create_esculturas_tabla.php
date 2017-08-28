<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsculturasTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esculturas', function (Blueprint $table) {
            $table->increments('id')->unique();
            //$table->string('tipo',2)->default('SC');
            //$table->string('elemento')->default(id.'SC');
            //$table->primary(['id','tipo']);
            $table->string('ciudad');
            $table->foreign('ciudad')->references('nombre')->on('ciudades')->onDelete('cascade');
            $table->enum('definicion', ['Friso', 'Thoacato', 'Ecuestre', 'Busto']);
            $table->string('tipoEscultura');
            $table->string('procedencia');
            $table->string('contexto');
            $table->string('hallazgoCasual');
            $table->string('localizacioActual');
            $table->string('estadoConservacion');
            $table->string('material');
            $table->string('cronologia');
            $table->string('dimensiones');
            $table->boolean('restaurada')->default(false);
            $table->string('restoPolicromia');
            $table->text('paralelos'); //campo memo
            $table->string('informacionGrafica')->default('www.huelva.es'); //url a pdf,html,... de imágenes.
            $table->rememberToken();
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
        Schema::dropIfExists('esculturas');
    }
}
