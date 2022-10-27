<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cabezal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabezal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa');
            $table->string('marca');
            $table->unsignedBigInteger('transportista_id');
            $table->foreign('transportista_id')->references('id')->on('transportista');
            $table->unsignedBigInteger('piloto_id');
            $table->foreign('piloto_id')->references('id')->on('piloto');
        });
    }
    /* Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('cabezal');
    }
}
