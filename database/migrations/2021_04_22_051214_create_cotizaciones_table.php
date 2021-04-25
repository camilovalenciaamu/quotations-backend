<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{

    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
        	$table->increments('id');
            $table->string('modelo');
            $table->string('nombre_completo');
            $table->string('email');
            $table->string('numero_celular');
            $table->string('departamento');
            $table->string('ciudad');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cotizaciones');
    }
}