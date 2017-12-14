<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Livro extends Model
{
	use Searchable;
    
    protected $fillable = [
	    'id_usuario',
		'nome',
		'slug',
		'descricao',
		'publicar',
		'file_pdf',
		'file_epub',
		'imagem',
	];

	public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
}
