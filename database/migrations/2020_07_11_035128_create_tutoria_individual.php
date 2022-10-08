<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoriaIndividual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutoria_individual', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('nivel');
            $table->string('programa');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->string('tipo_titulaje');
            $table->string('estado_titulaje');
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
        Schema::dropIfExists('tutoria_individual');
    }
}
