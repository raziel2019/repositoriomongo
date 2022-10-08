<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloRevista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_revista', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('autor');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('estado');
            $table->string('pais');
            $table->string('nombre');
            $table->string('editorial');
            $table->integer('pagina');
            $table->integer('pagina2');
            $table->string('volumen');
            $table->string('indice');
            $table->string('issn');
            $table->string('direccion');
            $table->string('proposito');
            $table->string('mienbros');
            $table->string('lgacs');
            $table->string('curriculum_de_cuerpo_academico');
            $table->date('date');
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
        Schema::dropIfExists('articulo_revista');
    }
}
