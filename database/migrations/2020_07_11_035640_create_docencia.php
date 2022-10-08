<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docencia', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->string('ies');
            $table->string('programa_educativo');
            $table->integer('cuatrimestre');
            $table->integer('grupo');
            $table->string('nivel');
            $table->date('fecha_inicio');
            $table->integer('alumnos');
            $table->string('duracion_semanas');
            $table->string('horas_acesorias_mes');
            $table->string('horas_acesorias_semana');
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
        Schema::dropIfExists('docencia');
    }
}
