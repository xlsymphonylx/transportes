<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->string('carga');
            $table->string('numero_contenedor');
            $table->unsignedBigInteger('cabezal_id');
            $table->foreign('cabezal_id')->references('id')->on('cabezal');
            $table->unsignedBigInteger('procedencia_id');
            $table->foreign('procedencia_id')->references('id')->on('ubicacion');
            $table->unsignedBigInteger('bodega_destino_id');
            $table->foreign('bodega_destino_id')->references('id')->on('bodega');
            $table->unsignedBigInteger('destino_id');
            $table->foreign('destino_id')->references('id')->on('ubicacion');
            $table->unsignedBigInteger('tipo_accion_id');
            $table->foreign('tipo_accion_id')->references('id')->on('tipo_accion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accion');
    }
}
