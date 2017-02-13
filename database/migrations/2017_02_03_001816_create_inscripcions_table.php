<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->string('nombre_completo');
            $table->string('lugar_expedicion');
            $table->string('numero_documento');
            $table->string('fecha_nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('correo');            
            $table->integer('curso_id')->unsigned();
            $table->integer('estudiante_id')->unsigned();
            // llaves foraneas
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
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
        Schema::dropIfExists('inscripcions');
    }
}
