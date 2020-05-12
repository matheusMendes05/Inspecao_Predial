<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario_id');

            $table->string('nome_responsavel')->nullable();
            $table->string('data')->nullable();
            $table->string('nome_edificio')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cep')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('tipologia')->nullable();
            $table->string('outros')->nullable();
            $table->string('n_pavimentos')->nullable();
            $table->string('ano_construcao')->nullable();
            $table->string('construtora')->nullable();
            $table->string('administrador')->nullable();
            $table->string('responsavel_acompanhamento_obra')->nullable();


            $table->timestamps();

            // $table->foreign('edificio_id')->references('id')->on('buildings')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspections');
    }
}
