<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliografiasTabla extends Migration
{

    public function up()
    {
        Schema::create('bibliografias', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('idElemento');
            $table->text('referencia');
            //$table->foreign('idElemento')->references('id')->on('ciudades')->onDelete('cascade');
            //$table->foreign('idElemento')->references('id')->on('esculturas')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bibliografias');
    }
}
