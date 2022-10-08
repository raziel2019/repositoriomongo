<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuerpoAcademico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuerpo_academico', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->string('clave');
            $table->string('grado');
            $table->text('cultiva_cuerpo_academico');
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
        Schema::dropIfExists('cuerpo_academico');
    }
}
