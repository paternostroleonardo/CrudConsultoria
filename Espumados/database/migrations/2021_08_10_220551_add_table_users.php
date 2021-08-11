<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Se crea la tabla cargos con una referencia en llave foranea al campo rol_id asociativo al id del rol
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->nullable();
            $table->string('rol')->nullable();
            $table->bigInteger('rol_id')->nullable()->unsigned();
            $table->integer('identification')->nullable();
            $table->integer('phone')->nullable();
            $table->foreign('rol_id')->references('id')->on('cargos')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
