<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Imggaleria extends Model
{
	// use Searchable;
	
	protected $fillable = [
		'nome',
		'descricao',
		'img_large'
	];

    public function Galeria()
    {
    	return $this->belongsTo('App\Galeria','id_galeria');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }


}
