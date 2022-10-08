<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoInvestigacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_proyecto__investigacion', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('titulo');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('curriculum_de_cuerpo_academico');
            $table->string('investigadores');
            $table->string('alumnos');
            $table->string('actividades');
            $table->string('miembros');
            $table->string('lgacs');
            $table->date('fecha');
            $table->date('fecha_termino');
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
        Schema::dropIfExists('_proyecto__investigacion');
    }
}
