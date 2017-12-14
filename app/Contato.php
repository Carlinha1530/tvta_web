<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Contato extends Model
{
    use Searchable;

	protected $fillable = [
		'id_usuario',
        'mapa',
		'endereco',
		'cidade',
		'fone1',
		'fone2',
		'celular',
		'email',
		'publicar',
	];

	public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
}
