<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('resumo')->nullable();
        });

        Schema::table('palestrantes', function (Blueprint $table) {
            $table->text('resumo')->nullable();
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->text('resumo')->nullable();
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        Schema::table('artigos', function (Blueprint $table) {
            $table->text('resumo')->nullable();
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        Schema::table('series', function (Blueprint $table) {
            $table->text('resumo')->nullable();
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        Schema::table('galerias', function (Blueprint $table) {
            $table->text('resumo')->nullable();
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        Schema::table('categorias', function (Blueprint $table) {
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        Schema::table('subcategorias', function (Blueprint $table) {
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        Schema::table('imggalerias', function (Blueprint $table) {
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        Schema::table('audio', function (Blueprint $table) {
            $table->enum('publicar',['sim','nao'])->default('nao');
        });

        // Schema::table('paginas', function (Blueprint $table) {
        //     $table->enum('publicar',['sim','nao'])->default('nao');
        // });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
