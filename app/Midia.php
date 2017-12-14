<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Midia extends Model
{
    use Searchable;
	
    protected $fillable = [
		'id_usuario',
		'nome',
		'file',
	];


    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
}
