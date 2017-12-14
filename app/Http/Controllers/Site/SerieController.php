<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Serie;
use App\Palestrante;
use App\Categoria;
use App\Contato;


class SerieController extends Controller
{
    public function series(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Séries',
            'descricao'=>'Vídeos em Séries',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.series')
        ];
        
       	$series = Serie::where('publicar','=','sim')->orderBy('id', 'DESC')->paginate(20);
        return view('site.series', compact('series', 'contatos', 'palestrantes', 'categorias', 'seo', 'str'));
    }

    public function serie(Request $request, $slug)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $series = Serie::whereSlug($request->slug)->firstOrFail(); 

        // $series = Serie::find($id);
        $videos = $series->video()->orderBy('id')->get();
        $first = $series->video()->first();
        // dd($first);

        // verifica se p link é youtube ou vimeo
        // $linkV = trim($first->link_video);
        // preg_match_all("@\/\/(.*?).com@", $linkV, $output_array);
        // $videoType = $output_array[1][0];
        
        // if ($videoType=="vimeo") {
        //     $linkV = trim($first->link_video);
        //     preg_match_all("@vimeo.com\/(.*?)$@", $linkV, $output_array);
        //     $videoId = $output_array[1][0];
        //     $url = "https://player.vimeo.com/video/".$videoId."?feature=oembed&amp;autoplay=1";

        // }if ($videoType=="www.youtube") {
        //     $linkV = trim($first->link_video);
        //     preg_match_all("/v\=(.*?)$/", $linkV, $output_array);
        //     $videoId = $output_array[1][0];
        //     $url = "https://www.youtube.com/embed/".$videoId."?feature=oembed&amp;autoplay=1";
        // }
        // dd($url);
        
        $seo = [
            'nome'=>$series->nome,
            'descricao'=>str_limit($series->descricao, 130),
            'imagem'=>asset($series->imagem),
            'url'=> route('site.serie',[$series->id, $series->slug])
        ];

        // return view('site.serie', compact('categorias', 'palestrantes', 'series', 'videos', 'seo', 'str', 'first'));
        return view('site.serie', [
            'contatos' => $contatos,
            'videos' => $videos,
            'series' => $series,
            'palestrantes' => $palestrantes,
            'categorias' => $categorias,
            'first' => $first,
            'seo' => $seo,
            'str' => $str,
            // 'url' => $url?$url:'',
        ]);
    }
}
