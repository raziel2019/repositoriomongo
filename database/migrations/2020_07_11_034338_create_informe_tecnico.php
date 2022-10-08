<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformeTecnico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_tecnico', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('autor');
            $table->string('nombre');
            $table->string('alcance');
            $table->string('institucion');
            $table->string('estado');
            $table->integer('paginas');
            $table->date('date');
            $table->string('pais');
            $table->string('proposito');
            $table->string('miembros');
            $table->string('lgacs');
            $table->string('curriculum_de_cuerpo_academico');
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
        Schema::dropIfExists('informe_tecnico');
    }
}
