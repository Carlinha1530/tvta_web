<?php

use Illuminate\Database\Seeder;
use App\SubCategoria;

class SubCategoriasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('subcategorias')->insert(array(
	        array('id_usuario'=>'1','nome'=>'Boletim Profético','id_categoria'=>'1'),
	        array('id_usuario'=>'1','nome'=>'Notícias Mundiais IASD','id_categoria'=>'1'),

	        array('id_usuario'=>'1','nome'=>'Natureza','id_categoria'=>'2'),
	        array('id_usuario'=>'1','nome'=>'Criacionismo x Evolucionismo','id_categoria'=>'2'),

	        array('id_usuario'=>'1','nome'=>'HomeSchooling','id_categoria'=>'3'),
	        array('id_usuario'=>'1','nome'=>'Palestras sobre Educação','id_categoria'=>'3'),

	        array('id_usuario'=>'1','nome'=>'Santuário','id_categoria'=>'5'),
	        array('id_usuario'=>'1','nome'=>'Profecias','id_categoria'=>'5'),

	        array('id_usuario'=>'1','nome'=>'Momentos de Paz','id_categoria'=>'6'),
	        array('id_usuario'=>'1','nome'=>'Fountainview','id_categoria'=>'6'),
	        array('id_usuario'=>'1','nome'=>'Palestra sobre Música','id_categoria'=>'6'),

	        array('id_usuario'=>'1','nome'=>'Bebidas','id_categoria'=>'9'),
	        array('id_usuario'=>'1','nome'=>'Assados','id_categoria'=>'9'),
	        array('id_usuario'=>'1','nome'=>'Saladas','id_categoria'=>'9'),
	        
	        array('id_usuario'=>'1','nome'=>'Tratamentos','id_categoria'=>'10'),
	        array('id_usuario'=>'1','nome'=>'Entrevistas sobre Saúde','id_categoria'=>'10'),
	        array('id_usuario'=>'1','nome'=>'Palestras sobre Saúde','id_categoria'=>'10'),
	    ));
		echo "Subcategorias criadas com sucesso!";
        // factory(\App\Subcategoria::class, 10)->create();
    }
}
