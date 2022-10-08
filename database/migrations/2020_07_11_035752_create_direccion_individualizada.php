<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionIndividualizada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion_individualizada', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('titulo');
            $table->string('grado');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->integer('alumnos');
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
        Schema::dropIfExists('direccion_individualizada');
    }
}
