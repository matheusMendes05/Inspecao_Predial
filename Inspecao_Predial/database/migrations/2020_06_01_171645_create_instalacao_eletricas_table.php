<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalacaoEletricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalacao_eletricas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');

            $table->string('local_LampadaQ')->nullable();
            $table->string('foto_LampadaQ')->nullable();
            $table->string('obs_LampadaQ')->nullable();

            $table->string('local_ataqueP')->nullable();
            $table->string('foto_ataqueP')->nullable();
            $table->string('obs_ataqueP')->nullable();

            $table->string('local_modificacaoE')->nullable();
            $table->string('foto_modificacaoE')->nullable();
            $table->string('obs_modificacaoE')->nullable();

            $table->string('local_superaquecimento')->nullable();
            $table->string('foto_superaquecimento')->nullable();
            $table->string('obs_superaquecimento')->nullable();

            $table->string('local_flacoes')->nullable();
            $table->string('foto_flacoes')->nullable();
            $table->string('obs_flacoes')->nullable();

            $table->string('local_curtoC')->nullable();
            $table->string('foto_curtoC')->nullable();
            $table->string('obs_curtoC')->nullable();

            $table->string('local_quadroL')->nullable();
            $table->string('foto_quadroL')->nullable();
            $table->string('obs_quadroL')->nullable();

            $table->string('local_ausenciaP')->nullable();
            $table->string('foto_ausenciaP')->nullable();
            $table->string('obs_ausenciaP')->nullable();

            $table->string('local_falhaT')->nullable();
            $table->string('foto_falhaT')->nullable();
            $table->string('obs_falhaT')->nullable();

            $table->string('local_cercaE')->nullable();
            $table->string('foto_cercaE')->nullable();
            $table->string('obs_cercaE')->nullable();

            $table->string('local_outros')->nullable();
            $table->string('foto_outros')->nullable();
            $table->string('obs_outros')->nullable();

            $table->foreign('inspecao_id')->references('id')->on('inspecaos')->onDelete('cascade');

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
        Schema::dropIfExists('instalacao_eletricas');
    }
}
