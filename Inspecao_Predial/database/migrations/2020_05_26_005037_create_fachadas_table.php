<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFachadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fachadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');

            $table->string('estado_fachada')->nullable();

            $table->string('local_fissura')->nullable();
            $table->string('foto_fissura')->nullable();
            $table->string('obs_fissura')->nullable();

            $table->string('local_destacamento')->nullable();
            $table->string('foto_destacamento')->nullable();
            $table->string('obs_destacamento')->nullable();

            $table->string('local_descascamento')->nullable();
            $table->string('foto_descascamento')->nullable();
            $table->string('obs_descascamento')->nullable();

            $table->string('local_eflorecencia')->nullable();
            $table->string('foto_eflorecencia')->nullable();
            $table->string('obs_eflorecencia')->nullable();

            $table->string('local_falta_deficiencia')->nullable();
            $table->string('foto_falta_deficiencia')->nullable();
            $table->string('obs_falta_deficiencia')->nullable();

            $table->string('local_falta_pintura')->nullable();
            $table->string('foto_falta_pintura')->nullable();
            $table->string('obs_falta_pintura')->nullable();

            $table->string('local_desgaste')->nullable();
            $table->string('foto_desgaste')->nullable();
            $table->string('obs_desgaste')->nullable();

            $table->string('local_praga')->nullable();
            $table->string('foto_praga')->nullable();
            $table->string('obs_praga')->nullable();

            $table->string('local_vidros')->nullable();
            $table->string('foto_vidros')->nullable();
            $table->string('obs_vidros')->nullable();

            $table->string('local_rompimento')->nullable();
            $table->string('foto_rompimento')->nullable();
            $table->string('obs_rompimento')->nullable();

            $table->string('local_caixa')->nullable();
            $table->string('foto_caixa')->nullable();
            $table->string('obs_caixa')->nullable();

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
        Schema::dropIfExists('fachadas');
    }
}
