<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosPartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_partidas', function (Blueprint $table) {
            $table->foreignId('id_usuarios');
            $table->foreignId('id_partidas');

            $table->foreign('id_usuarios')->references('id')->on('usuarios');
            $table->foreign('id_partidas')->references('id')->on('partidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_partidas');
    }
}
