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
        Schema::create('requisicoes', function (Blueprint $table)
        {
            $table->increments('id');

            $table->integer('viatura_id')->unsigned();
            $table->integer('equipe_servico_id')->unsigned();
            $table->integer('natureza_missao_id')->unsigned();
            $table->string('requisitante');
            $table->string('setor');
            $table->string('ramal');
            $table->string('apresentar_se');
            $table->date('data_inicio');
            $table->time('hora_inicio');
            $table->string('destino');
            $table->text('observacoes');
            $table->integer('odometro_saida');
            $table->integer('odometro_chegada')->nullable();
            $table->date('data_chegada')->nullable();
            $table->time('hora_chegada')->nullable();
            $table->string('motorista_externo_sv')->nullable();
            $table->boolean('finalizada')->nullable()->default(false);

            $table->foreign('viatura_id')->references('id')->on('viaturas');
            $table->foreign('equipe_servico_id')->references('id')->on('equipe_servico');
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
