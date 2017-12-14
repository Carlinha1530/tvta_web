<?php

use Illuminate\Database\Seeder;

class SeriesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Serie::class, 5)->create();
        echo "Series criadas com sucesso!";
        // factory(\App\Serie::class, 10)->create()->each(function($u){
        //     $u->video()->save(factory(\App\Video::class)->make());
        // });
    }
}
