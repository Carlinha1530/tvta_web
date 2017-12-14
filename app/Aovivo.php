<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Aovivo extends Model
{
	use Searchable;
	
    protected $fillable = [
		'id_usuario',
		'titulo',
		'descricao',
		'link_video',
		'link_videoen',
		'link_videoes',
		'publicar',
	];


    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
    
}
