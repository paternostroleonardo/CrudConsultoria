<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * se crea tabla a relacionar llamada cargos con campo rol, es decir nombre del cargo
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rol')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargos');
    }
}
