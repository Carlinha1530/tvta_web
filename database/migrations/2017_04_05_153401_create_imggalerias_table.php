<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImggaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imggalerias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_galeria')->unsigned();
            $table->foreign('id_galeria')->references('id')->on('galerias');
            $table->string('nome')->nullable();
            $table->text('descricao')->nullable();
            $table->text('resumo')->nullable();
            $table->string('img_large');
            $table->string('ordem')->nullable();
            $table->enum('publicar',['sim','nao'])->default('nao');
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
        Schema::dropIfExists('imggalerias');
    }
}
