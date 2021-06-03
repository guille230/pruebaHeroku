<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->tinyInteger('type');
            $table->text('address');
            $table->integer('cp');
            $table->integer('age');
            $table->string('location');
            $table->string('country');
            $table->foreignId('iconousado');
            $table->foreignId('bannerusado');
            $table->text('bio');
            $table->string('games');
            $table->text('preferences');
            $table->foreign('iconousado')->references('id')->on('iconos');
            $table->foreign('bannerusado')->references('id')->on('banners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
