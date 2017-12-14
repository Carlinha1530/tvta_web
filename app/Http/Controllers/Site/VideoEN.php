<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Categoria;
use App\Palestrante;
use App\Subcategoria;
use App\Contato;

class VideoEN extends Controller
{
    public function videos_en(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();

        // $videos = Video::where('publicar','=','sim')->orderBy('ordem_data', 'DESC')->paginate(20);
        $videos = Video::where('publicar','=','sim')->where('idioma','=','ingles')->orderBy('ordem_data', 'DESC')->paginate(20);
        $subcategorias = Subcategoria::where('publicar','=','sim')->orderBy('nome')->get();
        $contatos = Contato::where('publicar','=','sim')->first();
        

        $seo = [
            'nome'=>'Vídeos Inglês',
            'descricao'=>'Todos os Vídeos em Inglês',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.videos_en')
        ];

        return view('site.videos_en', compact('videos', 'contatos', 'palestrantes', 'categorias', 'subcategorias', 'seo', 'str'));
    }

    public function video_en(Request $request, $slug)
    {
        $str = $request->get('str', "");
        
        $videos = Video::whereSlug($request->slug)->firstOrFail(); 

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();
        
        $subcategorias = Subcategoria::orderBy('nome')->get();

        $seo = [
            'nome'=>$videos->nome,
            'descricao'=>$videos->resumo,
            'imagem'=>asset($videos->imagem),
            'url'=> route('site.video_en',[$videos->id, $videos->slug])
        ];

        // return view('site.categoria', compact());
        return view('site.video_en', [
            'videos' => $videos,
            'contatos' => $contatos,
            'palestrantes' => $palestrantes,
            'categorias' => $categorias,
            'subcategorias' => $subcategorias,
            'seo' => $seo,
            'str' => $str,
            // 'url' => $url?$url:'',
        ]);
    }
}
