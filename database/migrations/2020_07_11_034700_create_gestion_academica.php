<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionAcademica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_academica', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('tipo');
            $table->string('nombre');
            $table->string('programa');
            $table->string('grado');
            $table->string('empresa');
            $table->string('puntos');
            $table->string('resultados');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('alumnos');
            $table->integer('horas');
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
        Schema::dropIfExists('gestion_academica');
    }
}
