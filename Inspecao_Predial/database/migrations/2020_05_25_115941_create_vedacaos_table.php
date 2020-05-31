<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVedacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vedacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');

            $table->string('local_fissura_trinca')->nullable();
            $table->string('foto_fissura_trinca')->nullable();
            $table->string('obs_fissura_trinca')->nullable();

            $table->string('local_eflorescencia')->nullable();
            $table->string('foto_eflorescencia')->nullable();
            $table->string('obs_eflorescencia')->nullable();

            $table->string('local_infiltracao')->nullable();
            $table->string('foto_infiltracao')->nullable();
            $table->string('obs_infiltracao')->nullable();

            $table->string('local_irregularidades_geometricas')->nullable();
            $table->string('foto_irregularidades_geometricas')->nullable();
            $table->string('obs_irregularidades_geometricas')->nullable();

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
        Schema::dropIfExists('vedacaos');
    }
}
