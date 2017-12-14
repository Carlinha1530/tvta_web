<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('categorias')->insert(array(
	        array('id_usuario'=>'1','nome'=>'Boletim', 'descricao'=>'Boletim', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Documentário', 'descricao'=>'Documentário', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Educação', 'descricao'=>'Educação', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Entrevista', 'descricao'=>'Entrevista', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Estudo Biblíco', 'descricao'=>'Estudo Biblíco', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Música', 'descricao'=>'Música', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Reflexão', 'descricao'=>'Reflexão', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Eventos', 'descricao'=>'Eventos', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Receitas', 'descricao'=>'Receitas', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Saúde', 'descricao'=>'Saúde', 'imagem'=>'Boletim'),
	        array('id_usuario'=>'1','nome'=>'Reportagem', 'descricao'=>'Reportagem', 'imagem'=>'Boletim'),
	    ));
		echo "Categorias criadas com sucesso!";
        // factory(\App\Categoria::class, 10)->create();
         
        // factory(\App\Categoria::class, 10)->create()->each(function($u){
        // 	$u->subcategoria()->save(factory(\App\Subcategoria::class)->make());
        // });
    }
}
