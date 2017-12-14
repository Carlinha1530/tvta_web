<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Categoria;
use App\Subcategoria;
use App\Artigo;
use App\Palestrante;
use App\Serie;
use App\Galeria;
use App\User;
use App\Audio;
use App\Contato;
use Carbon\Carbon;


class BuscaController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('pt');
        setLocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    }
    public function index(Request $request)
    {
        // $artigos = Artigo::where('publicar','=','sim')->orderBy('id', 'DESC')->paginate(10);
        $str = $request->get('str', "");
        if ($str) {
            $videos = Video::search($str)->orderBy('nome')->get();
            $cats = Categoria::search($str)->orderBy('nome')->get();
            $sub = Subcategoria::search($str)->orderBy('nome')->get();
            $art = Artigo::search($str)->orderBy('nome')->get();
            $pales = Palestrante::search($str)->orderBy('nome')->get();
            $ser = Serie::search($str)->orderBy('nome')->get();
            $gal = Galeria::search($str)->orderBy('nome')->get();
            $use = User::search($str)->orderBy('nome')->get();
            $aud = Audio::search($str)->orderBy('nome')->get();
        } 

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Busca',
            'descricao'=>config('seo.descricao'),
            'imagem'=>config('seo.imagem'),
            'url'=>Route('site.busca')
        ];

    	return view('site.busca', [
            'contatos' => $contatos, 
            'categorias' => $categorias, 
            'palestrantes' => $palestrantes, 
            'videos' => $videos, 
            'cats' => $cats, 
            'sub' => $sub, 
            'art' => $art, 
            'pales' => $pales, 
            'ser' => $ser, 
            'gal' => $gal, 
            'use' => $use, 
            'aud' => $aud, 
            'str' => $str,
            'seo' => $seo 
            
        ]);
    }
}
