<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpermeabilizacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impermeabilizacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');


            $table->string('local_infiltracao')->nullable();
            $table->string('foto_infiltracao')->nullable();
            $table->string('obs_infiltracao')->nullable();

            $table->string('local_deslocamento')->nullable();
            $table->string('foto_deslocamento')->nullable();
            $table->string('obs_deslocamento')->nullable();

            $table->string('local_sistema')->nullable();
            $table->string('foto_sistema')->nullable();
            $table->string('obs_sistema')->nullable();

            $table->string('local_ressecamento')->nullable();
            $table->string('foto_ressecamento')->nullable();
            $table->string('obs_ressecamento')->nullable();

            $table->string('local_falta_junta')->nullable();
            $table->string('foto_falta_junta')->nullable();
            $table->string('obs_falta_junta')->nullable();

            $table->string('local_falta_caimento')->nullable();
            $table->string('foto_falta_caimento')->nullable();
            $table->string('obs_falta_caimento')->nullable();

            $table->string('local_falta_imper')->nullable();
            $table->string('foto_falta_imper')->nullable();
            $table->string('obs_falta_imper')->nullable();

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
        Schema::dropIfExists('impermeabilizacaos');
    }
}
