<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsquadriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esquadrias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('inspecao_id')->nullable();

            $table->string('estado_esquadria')->nullable();

            $table->string('local_deficiencia_pintura')->nullable();
            $table->string('foto_deficiencia_pintura')->nullable();
            $table->string('obs_deficiencia_pintura')->nullable();

            $table->string('local_pragas')->nullable();
            $table->string('foto_pragas')->nullable();
            $table->string('obs_pragas')->nullable();

            $table->string('local_perda_mobilidade')->nullable();
            $table->string('foto_perda_mobilidade')->nullable();
            $table->string('obs_perda_mobilidade')->nullable();

            $table->string('local_folga')->nullable();
            $table->string('foto_folga')->nullable();
            $table->string('obs_folga')->nullable();

            $table->string('local_rompimento')->nullable();
            $table->string('foto_rompimento')->nullable();
            $table->string('obs_rompimento')->nullable();

            $table->string('local_componentes')->nullable();
            $table->string('foto_componentes')->nullable();
            $table->string('obs_componentes')->nullable();

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
        Schema::dropIfExists('esquadrias');
    }
}
