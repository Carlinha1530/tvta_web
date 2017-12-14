<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Galeria extends Model
{
    use Searchable;
    
    protected $fillable = [
        'id_usuario',
        'nome',
        'slug',
        'descricao',
        'resumo',
        'publicar',
        'img',
    ];

    public function ImgGaleria()
    {
        return $this->hasMany('App\Imggaleria','id_galeria');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

}


