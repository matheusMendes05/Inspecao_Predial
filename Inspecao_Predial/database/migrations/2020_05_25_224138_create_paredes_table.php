<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paredes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id')->nullable();

            $table->string('estado_parede')->nullable();

            $table->string('local_fissura')->nullable();
            $table->string('foto_fissura')->nullable();
            $table->string('obs_fissura')->nullable();

            $table->string('local_destacamento')->nullable();
            $table->string('foto_destacamento')->nullable();
            $table->string('obs_destacamento')->nullable();

            $table->string('local_infiltracao')->nullable();
            $table->string('foto_infiltracao')->nullable();
            $table->string('obs_infiltracao')->nullable();

            $table->string('local_eflorecencia')->nullable();
            $table->string('foto_eflorecencia')->nullable();
            $table->string('obs_eflorecencia')->nullable();

            $table->string('local_deficiencia')->nullable();
            $table->string('foto_deficiencia')->nullable();
            $table->string('obs_deficiencia')->nullable();

            $table->string('local_bolhas')->nullable();
            $table->string('foto_bolhas')->nullable();
            $table->string('obs_bolhas')->nullable();

            $table->string('local_falha')->nullable();
            $table->string('foto_falha')->nullable();
            $table->string('obs_falha')->nullable();

            $table->string('local_abertura')->nullable();
            $table->string('foto_abertura')->nullable();
            $table->string('obs_abertura')->nullable();

            $table->string('local_som')->nullable();
            $table->string('foto_som')->nullable();
            $table->string('obs_som')->nullable();

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
        Schema::dropIfExists('paredes');
    }
}
