<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstruturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estruturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');
            $table->string('local_fissuras')->nullable();
            $table->string('foto_fissuras')->nullable();
            $table->string('obs_fissuras')->nullable();

            $table->string('local_destacamento_DD')->nullable();
            $table->string('foto_destacamento_DD')->nullable();
            $table->string('obs_destacamento_DD')->nullable();

            $table->string('local_armadura_exposta')->nullable();
            $table->string('foto_armadura_exposta')->nullable();
            $table->string('obs_armadura_exposta')->nullable();

            $table->string('local_corrosao')->nullable();
            $table->string('foto_corrosao')->nullable();
            $table->string('obs_corrosao')->nullable();

            $table->string('local_peca_estrutural_deformacao_excessiva')->nullable();
            $table->string('foto_peca_estrutural_deformacao_excessiva')->nullable();
            $table->string('obs_peca_estrutural_deformacao_excessiva')->nullable();

            $table->string('local_irregularidades_geometricas')->nullable();
            $table->string('foto_irregularidades_geometricas')->nullable();
            $table->string('obs_irregularidades_geometricas')->nullable();

            $table->string('local_eflorescencia_lixiviacaoo_infiltracao')->nullable();
            $table->string('foto_eflorescencia_lixiviacaoo_infiltracao')->nullable();
            $table->string('obs_eflorescencia_lixiviacaoo_infiltracao')->nullable();

            $table->string('local_outros')->nullable();
            $table->string('foto_outros')->nullable();
            $table->string('obs_outros')->nullable();


            // relacionar com tabela edificios
            $table->foreign('inspecao_id')->references('id')->on('inspections')->onDelete('cascade');

            // $table->foreign('inspecao_id')->references('id')->on('inspections')->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estruturas');
    }
}
