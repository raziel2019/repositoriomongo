<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloDifusion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_articulo__difusion', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('autor');
            $table->string('titulo');
            $table->string('estado');
            $table->string('pais');
            $table->string('nombre');
            $table->string('editorial');
            $table->Integer('volumen');
            $table->string('issn');
            $table->date('date');
            $table->string('proposito');
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
        Schema::dropIfExists('_articulo__difusion');
    }
}
