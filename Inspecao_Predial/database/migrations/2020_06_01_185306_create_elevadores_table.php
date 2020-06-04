<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');

            $table->string('local_cabinaD')->nullable();
            $table->string('foto_cabinaD')->nullable();
            $table->string('obs_cabinaD')->nullable();

            $table->string('local_quebraB')->nullable();
            $table->string('foto_quebraB')->nullable();
            $table->string('obs_quebraB')->nullable();

            $table->string('local_porta')->nullable();
            $table->string('foto_porta')->nullable();
            $table->string('obs_porta')->nullable();

            $table->string('local_falhaF')->nullable();
            $table->string('foto_falhaF')->nullable();
            $table->string('obs_falhaF')->nullable();

            $table->string('local_movimentoE')->nullable();
            $table->string('foto_movimentoE')->nullable();
            $table->string('obs_movimentoE')->nullable();

            $table->string('local_desnivel')->nullable();
            $table->string('foto_desnivel')->nullable();
            $table->string('obs_desnivel')->nullable();

            $table->string('local_pocoE')->nullable();
            $table->string('foto_pocoE')->nullable();
            $table->string('obs_pocoE')->nullable();

            $table->string('local_vazamentoO')->nullable();
            $table->string('foto_vazamentoO')->nullable();
            $table->string('obs_vazamentoO')->nullable();

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
        Schema::dropIfExists('elevadores');
    }
}
