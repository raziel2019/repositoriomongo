<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('autor');
            $table->string('titulo');
            $table->string('estado');
            $table->string('editorial');
            $table->string('edicion');
            $table->string('tiraje');
            $table->string('isbn');
            $table->string('proposito');
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
        Schema::dropIfExists('libro');
    }
}
