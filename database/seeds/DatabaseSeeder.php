<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosSeeds::class);
        $this->call(PaginasSeeds::class);
        $this->call(CategoriasSeeds::class);
        $this->call(SubCategoriasSeeds::class);
        $this->call(VideosSeeds::class);
        $this->call(PalestrantesSeeds::class);
        $this->call(ArtigosSeeds::class);
        $this->call(GaleriasSeeds::class);
        $this->call(SeriesSeeds::class);
    }
}
