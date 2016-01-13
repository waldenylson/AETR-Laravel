<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespachantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachantes', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('usu_login', 30);

            ///$table->foreign('usu_login')->references('usu_login')->on('sistema.usuario')->onDelete('cascade');

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
        Schema::drop('despachantes');
    }
}
