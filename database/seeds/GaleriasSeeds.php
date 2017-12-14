<?php

use Illuminate\Database\Seeder;

class GaleriasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Galeria::class, 5)->create();
        echo "Galerias criadas com sucesso!";
        // factory(\App\Galeria::class, 10)->create()->each(function($u){
        // 	$u->ImgGaleria()->save(factory(\App\Imggaleria::class)->make());
        // });

    }
}
