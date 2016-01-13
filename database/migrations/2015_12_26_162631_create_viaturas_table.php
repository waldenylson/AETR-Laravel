<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaturas', function (Blueprint $table)
        {
            $table->increments('id');

            $table->string('marca',      50);
            $table->string('modelo',     50);
            $table->string('reg_fab',    50);
            $table->string('placa',      50);
            $table->string('alocacao',   50);
            $table->string('reservada',  50);

            $table->boolean('disponivel');

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
        Schema::drop('viaturas');
    }
}
