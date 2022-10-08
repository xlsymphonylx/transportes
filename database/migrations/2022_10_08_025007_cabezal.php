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
