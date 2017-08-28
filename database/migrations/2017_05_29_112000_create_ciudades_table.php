<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadesTable extends Migration
{
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
                $table->increments('id')->unique();
                //$table->string('tipo',2)->default('CD');
                //$table->string('elemento')->default(id.'CD');
                $table->string('nombre')->unique();
                //$table->primary(array('id','tipo'));
                $table->enum('conventus', ['Hispalensis', 'Cordubensis', 'Astigitanus', 'Gaditanus']);
                $table->enum('categoria', ['Municipium', 'Coloniae']);
                $table->double('extension');
                $table->string('localizacion');
                $table->string('municipio');
                $table->string('provincia');
                $table->enum('tipoYacimiento', ['Despoblado', 'Superpuesto']);
                $table->string('cronologia');
                $table->boolean('fuentesLiterarias')->default(false);
                $table->boolean('escultura')->default(false);
                $table->boolean('epigrafia')->default(false);
                $table->boolean('numismatica')->default(false);
                $table->boolean('arquitecturaPublica')->default(false);
                $table->boolean('arquitecturaPrivada')->default(false);
                $table->boolean('necropolis')->default(false);
                $table->string('coord_x');
                $table->string('coord_y');
                $table->rememberToken();
                $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
}
