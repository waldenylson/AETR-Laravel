<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('usu_login');
            $table->string('usu_nome');
            $table->string('usu_senha');
            $table->string('usu_nomeguerra');
            $table->integer('usu_cpf');
            $table->date('usu_datanascimento');
            $table->integer('usu_rg');
            $table->string('usu_ramal');
            $table->string('esp_codigo');
            $table->string('pgr_codigo');
            $table->string('omi_codigo');
            $table->string('set_codigo');
            $table->string('usu_email');
            $table->string('usu_ativo');
            $table->string('tpu_codigo');
            $table->string('usu_sexo');
            $table->string('usu_tipo');
            $table->string('emi_codigo');
            $table->string('idpessoa');
            $table->string('idsetorom');

            $table->timestamps();
        });
    }

    /***
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
