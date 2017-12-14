<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class RadioAudio extends Model
{
    use Searchable;
    
    protected $fillable = [
	    'id_usuario',
		'nome',
		'slug',
		'descricao',
		'resumo',
		'publicar',
		'audio',
	];

	public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
}
