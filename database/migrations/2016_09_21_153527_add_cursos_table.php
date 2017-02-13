<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('precio');
            $table->string('descripcion');
            $table->integer('programas_id')->unsigned();

            $table->foreign('programas_id')->references('id')->on('programas');

            $table->timestamps();
        });

        Schema::create('estudiante_curso',function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estudiante_id')->unsigned();
            $table->integer('curso_id')->unsigned();

            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('curso_id')->references('id')->on('cursos');

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
        Schema::dropIfExists('estudiante_curso');
        Schema::dropIfExists('cursos');

    }
}
