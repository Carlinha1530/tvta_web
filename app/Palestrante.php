<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Palestrante extends Model
{
    use Searchable;
	
    protected $fillable = [
        'id_usuario',
        'nome',
        'slug',
        'profissao',
        'descricao',
        'resumo',
        'publicar',
        'tipo',
        'imagem',
	];

    public function video()
    {
        return $this->hasMany('App\Video','id_palestrante');
    }

    // public function index()
    // {
    // 	$palestrante = Palestrante::all(); //Lista Todas os palestrantes do banco
    // }

    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
}
