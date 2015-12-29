<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotoristasDiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motoristas_dia', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('motorista_id');
            $table->date('data');

            $table->foreign('motorista_id')->references('id')->on('motoristas');

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
        Schema::drop('motoristas_dia');
    }
}
