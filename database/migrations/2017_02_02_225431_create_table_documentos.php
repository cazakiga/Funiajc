<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDocumentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cedula');
            $table->string('hoja_vida');
            $table->string('rut');
            $table->string('certificado_estudios');
            $table->string('certificado_exp_laboral');
            $table->string('ante_judiciales');
            $table->string('ante_responsabilidad');
            $table->string('ante_disiplinarios');
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
       Schema::dropIfExists('documentos');
    }
}
