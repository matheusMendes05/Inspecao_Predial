<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalacaoGasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalacao_gases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');

            $table->string('local_vazamentos')->nullable();
            $table->string('foto_vazamentos')->nullable();
            $table->string('obs_vazamentos')->nullable();

            $table->string('local_deterioracao')->nullable();
            $table->string('foto_deterioracao')->nullable();
            $table->string('obs_deterioracao')->nullable();

            $table->string('local_nConformidadeP')->nullable();
            $table->string('foto_nConformidadeP')->nullable();
            $table->string('obs_nConformidadeP')->nullable();

            $table->string('local_nConformidadeD')->nullable();
            $table->string('foto_nConformidadeD')->nullable();
            $table->string('obs_nConformidadeD')->nullable();

            $table->string('local_fAbertura')->nullable();
            $table->string('foto_fAbertura')->nullable();
            $table->string('obs_fAbertura')->nullable();

            $table->string('local_abertura')->nullable();
            $table->string('foto_abertura')->nullable();
            $table->string('obs_abertura')->nullable();

            $table->string('local_faltaS')->nullable();
            $table->string('foto_faltaS')->nullable();
            $table->string('obs_faltaS')->nullable();

            $table->string('local_outro')->nullable();
            $table->string('foto_outro')->nullable();
            $table->string('obs_outro')->nullable();

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
        Schema::dropIfExists('instalacao_gases');
    }
}
