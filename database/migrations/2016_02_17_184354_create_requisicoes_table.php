<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicoes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('viatura_id')->unsigned();
            $table->integer('motorista_id')->unsigned();
            $table->integer('natureza_missao_id')->unsigned();
            $table->string('setor');
            $table->string('ramal');
            $table->string('local_saida');
            $table->string('apresentar_se_ao');
            $table->date('data_inicio');
            $table->time('hora_inicio');
            $table->string('destino');
            $table->date('data_prevista_termino');
            $table->time('hora_prevista_termino');
            $table->text('observacoes');
            $table->string('om');
            $table->integer('odometro_saida');
            $table->integer('odometro_chegada');
            $table->date('data_chegada');
            $table->time('hora_chegada');
            $table->boolean('finalizada');

            $table->foreign('viatura_id')->references('id')->on('viaturas');
            $table->foreign('motorista_id')->references('id')->on('motoristas');
            $table->foreign('natureza_missao_id')->references('id')->on('naturezas_missao');

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
        Schema::drop('requisicoes');
    }
}
