<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Slide extends Model
{
	// use Searchable;
    
    protected $fillable = [
		'id_usuario',
		'nome',
		'descricao',
		'imagem',
		'ordem',
		'publicar',
		'link',
	];
}
