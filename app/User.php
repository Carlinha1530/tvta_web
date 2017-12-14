<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;  

class User extends Authenticatable
{
    use Searchable;
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profissao', 'descricao', 'imagem', 'publicar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function video()
    {
        return $this->hasMany('App\Video','id_usuario');
    }

    public function subcategoria()
    {
        return $this->hasMany('App\Subcategoria','id_usuario');
    }

    public function serie()
    {
        return $this->hasMany('App\Serie','id_usuario');
    }

    public function palestrante()
    {
        return $this->hasMany('App\Palestrante','id_usuario');
    }

    public function imggaleria()
    {
        return $this->hasMany('App\Imggaleria','id_usuario');
    }

    public function galeria()
    {
        return $this->hasMany('App\Galeria','id_usuario');
    }

    public function categoria()
    {
        return $this->hasMany('App\Categoria','id_usuario');
    }

    public function livro()
    {
        return $this->hasMany('App\Livro','id_usuario');
    }

    public function artigo()
    {
        return $this->hasMany('App\Artigo','id_usuario');
    }

    public function audio()
    {
        return $this->hasMany('App\Audio','id_usuario');
    }

    public function Radioaudio()
    {
        return $this->hasMany('App\RadioAudio','id_usuario');
    }

    public function contato()
    {
        return $this->hasMany('App\Contato','id_usuario');
    }

    public function sobrenos()
    {
        return $this->hasMany('App\Sobrenos','id_usuario');
    }

    public function aovivo()
    {
        return $this->hasMany('App\Aovivo','id_usuario');
    }

    public function midia()
    {
        return $this->hasMany('App\Midia','id_usuario');
    }

}
