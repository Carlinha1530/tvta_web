<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Subcategoria extends Model
{
    use Searchable;
    
    protected $fillable = [
        'id_usuario',
        'id_categoria',
        'publicar',
        'nome',
        'slug',
	];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria','id_categoria');
    }

    public function video()
    {
        return $this->belongsToMany(Video::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }


}
