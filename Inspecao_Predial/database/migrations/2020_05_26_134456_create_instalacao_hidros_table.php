<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalacaoHidrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalacao_hidros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');

            $table->string('local_vazamento')->nullable();
            $table->string('foto_vazamento')->nullable();
            $table->string('obs_vazamento')->nullable();

            $table->string('local_deterioracao')->nullable();
            $table->string('foto_deterioracao')->nullable();
            $table->string('obs_deterioracao')->nullable();

            $table->string('local_tampas')->nullable();
            $table->string('foto_tampas')->nullable();
            $table->string('obs_tampas')->nullable();

            $table->string('local_nConformidade')->nullable();
            $table->string('foto_nConformidade')->nullable();
            $table->string('obs_nConformidade')->nullable();

            $table->string('local_faltaIdent')->nullable();
            $table->string('foto_faltaIdent')->nullable();
            $table->string('obs_faltaIdent')->nullable();

            $table->string('local_tubulacoes')->nullable();
            $table->string('foto_tubulacoes')->nullable();
            $table->string('obs_tubulacoes')->nullable();

            $table->string('local_entupimento')->nullable();
            $table->string('foto_entupimento')->nullable();
            $table->string('obs_entupimento')->nullable();

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
        Schema::dropIfExists('instalacao_hidros');
    }
}
