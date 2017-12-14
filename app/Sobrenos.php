<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Sobrenos extends Model
{
    use Searchable;

	protected $fillable = [
		'id_usuario',
        'link_video',
		'descricao_sobrenos',
		'descricao_oportunidades',
		'publicar',
	];

	public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
}
