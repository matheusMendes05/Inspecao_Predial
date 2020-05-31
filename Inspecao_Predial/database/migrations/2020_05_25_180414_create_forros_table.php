<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('inspecao_id');

            $table->string('tipo_revestimento')->nullable();

            $table->string('local_deformacao_excessiva')->nullable();
            $table->string('foto_deformacao_excessiva')->nullable();
            $table->string('obs_deformacao_excessiva')->nullable();

            $table->string('local_fissura')->nullable();
            $table->string('foto_fissura')->nullable();
            $table->string('obs_fissura')->nullable();

            $table->string('local_desencaixe')->nullable();
            $table->string('foto_desencaixe')->nullable();
            $table->string('obs_desencaixe')->nullable();

            $table->string('local_ultilizacao')->nullable();
            $table->string('foto_ultilizacao')->nullable();
            $table->string('obs_ultilizacao')->nullable();

            $table->string('local_deficiencia')->nullable();
            $table->string('foto_deficiencia')->nullable();
            $table->string('obs_deficiencia')->nullable();

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
        Schema::dropIfExists('forros');
    }
}
