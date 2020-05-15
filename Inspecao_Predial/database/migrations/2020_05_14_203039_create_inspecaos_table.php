<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspecaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('edificio_id');
            $table->string('responsavel_acompanhamento_obra')->nullable();
            $table->timestamps();

            $table->foreign('edificio_id')->references('id')->on('edificios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspecaos');
    }
}
