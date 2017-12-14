<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->string('nome');
            $table->string('slug');
            $table->string('imagem')->nullable();
            $table->text('descricao');
            $table->text('resumo')->nullable();
            $table->enum('publicar',['sim','nao'])->default('nao');
            $table->timestamps();
        });

        Schema::create('serie_video', function (Blueprint $table) {
            $table->integer('serie_id')->unsigned();
            $table->integer('video_id')->unsigned();

            $table->foreign('serie_id')->references('id')->on('series')->onDelete('cascade');
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');

            $table->primary(['serie_id','video_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
        Schema::dropIfExists('serie_video');
    }
}
