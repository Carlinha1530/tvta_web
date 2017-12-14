<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;  

class Video extends Model
{
    use Searchable;
    
    protected $fillable = [
        'id_usuario',
        'id_palestrante',
        'id_serie',
        'nome',
        'slug',
        'descricao',
        'resumo',
        'imagem',
        'link_video',
        'link_original',
        'doacao',
        'publicar',
        'idioma',
        'ordem_data',
        'updated_at',
        'created_at',
    ];

    public function serie()
    {
        return $this->belongsToMany(Serie::class);
    }
    
    public function palestrante()
    {
        return $this->belongsTo('App\Palestrante','id_palestrante');
    }

    public function subcategoria()
    {
        return $this->belongsToMany(Subcategoria::class);
    }

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
 
    public function adicionaCategoria($categorias)
    {
        if(is_string($categorias)){
            return $this->categoria()->save(
                Categoria::where('nome','=',$categorias)->firstOrFail()
            );
        }
        return $this->categoria()->save(
            Categoria::where('nome','=',$categorias->nome)->firstOrFail()
        );
    }

    public function removeCategoria($categorias)
    {
        if(is_string($categorias)){
            return $this->categoria()->detach(
                Categoria::where('nome','=',$categorias)->firstOrFail()
            );
        }
        return $this->categoria()->detach(
            Categoria::where('nome','=',$categorias->nome)->firstOrFail()
        );
    }

    public function adicionaSubCategoria($subcategorias)
    {
        if(is_string($subcategorias)){
            return $this->subcategoria()->save(
                Subcategoria::where('nome','=',$subcategorias)->firstOrFail()
            );
        }
        return $this->subcategoria()->save(
            Subcategoria::where('nome','=',$subcategorias->nome)->firstOrFail()
        );
    }

    public function removeSubCategoria($subcategorias)
    {
        if(is_string($subcategorias)){
            return $this->subcategoria()->detach(
                Subcategoria::where('nome','=',$subcategorias)->firstOrFail()
            );
        }
        return $this->subcategoria()->detach(
            Subcategoria::where('nome','=',$subcategorias->nome)->firstOrFail()
        );
    }



}
