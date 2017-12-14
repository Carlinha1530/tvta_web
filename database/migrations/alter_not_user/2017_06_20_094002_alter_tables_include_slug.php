<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablesIncludeSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('palestrantes', function (Blueprint $table) {
            $table->string('slug');
        });

        Schema::table('artigos', function (Blueprint $table) {
            $table->string('slug');
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->string('slug');
        });

        Schema::table('series', function (Blueprint $table) {
            $table->string('slug');
        });

        Schema::table('subcategorias', function (Blueprint $table) {
            $table->string('slug');
        });

        Schema::table('galerias', function (Blueprint $table) {
            $table->string('slug');
        });
        

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
