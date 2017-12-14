<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('id_usuario')->unsigned();
            // $table->foreign('id_usuario')->references('id')->on('users');
            $table->string('nome');
            $table->string('descricao');
            $table->text('texto');
            $table->string('imagem')->nullable();
            $table->text('mapa')->nullable();
            $table->string('email')->nullable();
            $table->string('tipo');
            // $table->enum('publicar',['sim','nao'])->default('nao');
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
        Schema::dropIfExists('paginas');
    }
}
