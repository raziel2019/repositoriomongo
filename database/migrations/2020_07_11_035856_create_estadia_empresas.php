<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadiaEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadia_empresas', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->string('programa');
            $table->integer('grado');
            $table->string('institucion');
            $table->string('puntos');
            $table->string('resultados');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('alumnos');
            $table->integer('numero_horas');
            $table->string('estado_direcion_individualizada');
            $table->string('curriculum_de_cuerpo_academico');
            $table->string('miembros');
            $table->string('lgacs');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('estadia_empresas');
    }
}
