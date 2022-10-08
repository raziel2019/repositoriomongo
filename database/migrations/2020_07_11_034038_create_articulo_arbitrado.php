<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloArbitrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_arbitrado', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('autor');
            $table->string('titulo');
            $table->string('estado');
            $table->string('pais');
            $table->string('nombre');
            $table->string('editorial');
            $table->string('volumen');
            $table->string('issn');
            $table->string('proposito');
            $table->string('miembros');
            $table->string('lgacs');
            $table->string('cv');
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
        Schema::dropIfExists('articulo_arbitrado');
    }
}
