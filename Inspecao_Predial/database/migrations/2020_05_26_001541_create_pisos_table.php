<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pisos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id')->nullable();

            $table->string('estado_piso')->nullable();

            $table->string('local_fissura')->nullable();
            $table->string('foto_fissura')->nullable();
            $table->string('obs_fissura')->nullable();

            $table->string('local_deficiencia_juntas')->nullable();
            $table->string('foto_deficiencia_juntas')->nullable();
            $table->string('obs_deficiencia_juntas')->nullable();

            $table->string('local_destacamento')->nullable();
            $table->string('foto_destacamento')->nullable();
            $table->string('obs_destacamento')->nullable();

            $table->string('local_caimento')->nullable();
            $table->string('foto_caimento')->nullable();
            $table->string('obs_caimento')->nullable();

            $table->string('local_escadas_sem_protecao')->nullable();
            $table->string('foto_escadas_sem_protecao')->nullable();
            $table->string('obs_escadas_sem_protecao')->nullable();

            $table->string('local_manchas')->nullable();
            $table->string('foto_manchas')->nullable();
            $table->string('obs_manchas')->nullable();

            $table->string('local_abatimento')->nullable();
            $table->string('foto_abatimento')->nullable();
            $table->string('obs_abatimanto')->nullable();

            $table->string('local_som')->nullable();
            $table->string('foto_som')->nullable();
            $table->string('obs_som')->nullable();

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
        Schema::dropIfExists('pisos');
    }
}
