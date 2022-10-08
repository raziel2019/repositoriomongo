<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticuloAsesoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_articulo__asesoria', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->string('alcance');
            $table->string('empresa');
            $table->string('pais');
            $table->string('estado');
            $table->string('investigadores');
            $table->string('curriculum_de_cuerpo_academico');
            $table->string('miembros');
            $table->string('lgacs');
            $table->date('fecha');
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
        Schema::dropIfExists('_articulo__asesoria');
    }
}
