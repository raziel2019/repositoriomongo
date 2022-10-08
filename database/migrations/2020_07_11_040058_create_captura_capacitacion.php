<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapturaCapacitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('captura_capacitacion', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('duracion');
            $table->date('fecha_dessarrollo');
            $table->file('archivo');
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
        Schema::dropIfExists('captura_capacitacion');
    }
}
