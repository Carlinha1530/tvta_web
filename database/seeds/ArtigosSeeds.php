<?php

use Illuminate\Database\Seeder;
use App\Artigo;

class ArtigosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Artigo::class, 5)->create();
        echo "Artigos criados com sucesso!";
    }
}
