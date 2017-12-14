<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Serie extends Model
{
    use Searchable;
    
    protected $fillable = [
        'id_usuario',
        'nome',
        'slug',
        'imagem',
        'descricao',
        'resumo',
        'publicar',
	];

    public function video()
    {
        return $this->belongsToMany(Video::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

    public function adicionaVideo($videos)
    {
        if(is_string($videos)){
            return $this->video()->save(
                Video::where('nome','=',$videos)->firstOrFail()
            );
        }
        return $this->video()->save(
            Video::where('nome','=',$videos->nome)->firstOrFail()
        );
    }

    public function removeVideo($videos)
    {
        if(is_string($videos)){
            return $this->video()->detach(
                Video::where('nome','=',$videos)->firstOrFail()
            );
        }
        return $this->video()->detach(
            Video::where('nome','=',$videos->nome)->firstOrFail()
        );
    }



}
