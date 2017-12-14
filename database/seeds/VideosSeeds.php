<?php

use Illuminate\Database\Seeder;

class VideosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(\App\Video::class, 10)->create();
        /*if(!Video::where('nome','=','admin')->count()){
        	$admin = Papel::create([
        			'nome'=>'admin',
        			'descricao'=>'Administrador do sistema'
        		]);
        }*/

        // factory(\App\Video::class, 10)->create()->each(function($u){
        //     $u->palestrante()->save(factory(\App\Palestrante::class)->make());
        // });
    }
}
