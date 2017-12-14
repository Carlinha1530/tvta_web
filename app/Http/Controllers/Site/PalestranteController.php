<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Palestrante;
use App\Categoria;
use App\Contato;

class PalestranteController extends Controller
{
    public function palestrantes_all(Request $request)
    {
        $str = $request->get('str', "");
        
        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        // $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->paginate(12);
        $palestrantes = Palestrante::where('publicar','=','sim')->where('tipo','=','palestrante')->orderBy('nome')->paginate(12);
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Palestrantes',
            'descricao'=>'Palestrantes',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.palestrantes_all')
        ];

        return view('site.palestrantes_all', compact('contatos', 'palestrantes', 'categorias', 'seo', 'str'));
    }

    public function palestrante(Request $request, $slug)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $palestrante = Palestrante::whereSlug($request->slug)->firstOrFail(); 
        // $nome = str_replace("_", " ", $nome); 
        // $nome = ucwords(strtolower($nome));
        // $palestrante = Palestrante::where('nome','=',$nome)->get();

        // $palestrante = Palestrante::find($id);
        $videos = $palestrante->video()->where('publicar','=','sim')->orderBy('id')->paginate(12);
    
        $seo = [
            'nome'=>$palestrante->nome,
            'descricao'=>str_limit($palestrante->descricao, 130),
            'imagem'=>asset($palestrante->imagem),
            'url'=> route('site.video',[$palestrante->id, $palestrante->slug])
        ];  

    	return view('site.palestrante', compact('contatos', 'palestrante', 'videos', 'categorias', 'palestrantes', 'seo', 'str'));
    }

    public function programas_all(Request $request)
    {
        $str = $request->get('str', "");
        
        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        // $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->paginate(12);
        $palestrantes = Palestrante::where('publicar','=','sim')->where('tipo','=','programa')->orderBy('nome')->paginate(12);
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Programas',
            'descricao'=>'Programas',
            'imagem' => config('seo.imagem'),
            'url'=> route('site.programas_all')
        ];

        return view('site.programas_all', compact('contatos', 'palestrantes', 'categorias', 'seo', 'str'));
    }

    public function programa(Request $request, $slug)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $palestrante = Palestrante::whereSlug($request->slug)->firstOrFail(); 
        // $nome = str_replace("_", " ", $nome); 
        // $nome = ucwords(strtolower($nome));
        // $palestrante = Palestrante::where('nome','=',$nome)->get();

        // $palestrante = Palestrante::find($id);
        $videos = $palestrante->video()->where('publicar','=','sim')->orderBy('id')->paginate(12);
    
        $seo = [
            'nome'=>$palestrante->nome,
            'descricao'=>str_limit($palestrante->descricao, 130),
            'imagem'=>asset($palestrante->imagem),
            'url'=> route('site.programa',[$palestrante->id, $palestrante->slug])
        ];  

        return view('site.programa', compact('contatos', 'palestrante', 'videos', 'categorias', 'palestrantes', 'seo', 'str'));
    }

    public function producoes_all(Request $request)
    {
        $str = $request->get('str', "");
        
        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        // $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->paginate(12);
        $palestrantes = Palestrante::where('publicar','=','sim')->where('tipo','=','producao')->orderBy('nome')->paginate(12);
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Produções',
            'descricao'=>'Produções',
            'imagem' => config('seo.imagem'),
            'url'=> route('site.producoes_all')
        ];

        return view('site.producoes_all', compact('contatos', 'palestrantes', 'categorias', 'seo', 'str'));
    }

    public function producao(Request $request, $slug)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $palestrante = Palestrante::whereSlug($request->slug)->firstOrFail(); 
        // $nome = str_replace("_", " ", $nome); 
        // $nome = ucwords(strtolower($nome));
        // $palestrante = Palestrante::where('nome','=',$nome)->get();

        // $palestrante = Palestrante::find($id);
        $videos = $palestrante->video()->where('publicar','=','sim')->orderBy('id')->paginate(12);
    
        $seo = [
            'nome'=>$palestrante->nome,
            'descricao'=>str_limit($palestrante->descricao, 130),
            'imagem'=>asset($palestrante->imagem),
            'url'=> route('site.producao',[$palestrante->id, $palestrante->slug])
        ];  

        return view('site.producao', compact('contatos', 'palestrante', 'videos', 'categorias', 'palestrantes', 'seo', 'str'));
    }


}		


