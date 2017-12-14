<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Artigo extends Model
{
	use Searchable;
	
    protected $fillable = [
		'id_usuario',
		'nome',
		'slug',
		'conteudo',
		'resumo',
		'autor',
		'publicar',
		'imagem',
		'file',
	];


    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
    
}
