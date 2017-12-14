<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Categoria extends Model
{
    use Searchable;

	protected $fillable = [
        'id_usuario',
        'nome',
		'slug',
        'descricao',
        'publicar',
        'imagem',
	];


    public function video()
    {
        return $this->belongsToMany(Video::class);
    }

    public function subcategoria()
    {
        return $this->hasMany('App\Subcategoria','id_categoria');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

    /*public function index()
    {
    	$categorias = Categoria::all(); //Lista Todas as Categorias do banco
    }*/
}
