<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Categoria;
use App\Palestrante;
use App\Subcategoria;
use App\Contato;

class VideoController extends Controller
{
    public function videos_all(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();

        $videos = Video::where('publicar','=','sim')->orderBy('ordem_data', 'DESC')->paginate(20);
        // $videos = Video::where('publicar','=','sim')->orderBy('updated_at', 'DESC')->paginate(20);
        $subcategorias = Subcategoria::where('publicar','=','sim')->orderBy('nome')->get();
        $contatos = Contato::where('publicar','=','sim')->first();
        

        $seo = [
            'nome'=>'Vídeos',
            'descricao'=>'Todos os Vídeos',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.videos_all')
        ];

        return view('site.videos_all', compact('videos', 'contatos', 'palestrantes', 'categorias', 'subcategorias', 'seo', 'str'));
    }

    public function video(Request $request, $slug)
    {
        $str = $request->get('str', "");
        
        $videos = Video::whereSlug($request->slug)->firstOrFail(); 
        // $nome = str_replace("_", " ", $nome); 
        // $nome = ucwords(strtolower($nome));
        // $videos = Video::where('nome','=',$nome)->get();

        // $videos = Video::find($id);
        
        // verifica se p link é youtube ou vimeo
        // $linkV = trim($videos->link_video);
        // preg_match_all("@\/\/(.*?).com@", $linkV, $output_array);
        // $videoType = $output_array[1][0];
        
        // if ($videoType=="vimeo") {
        //     $linkV = trim($videos->link_video);
        //     preg_match_all("@vimeo.com\/(.*?)$@", $linkV, $output_array);
        //     $videoId = $output_array[1][0];
        //     $url = "https://player.vimeo.com/video/".$videoId."?feature=oembed&amp;autoplay=1";

        // }if ($videoType=="www.youtube") {
        //     $linkV = trim($videos->link_video);
        //     preg_match_all("/v\=(.*?)$/", $linkV, $output_array);
        //     $videoId = $output_array[1][0];
        //     $url = "https://www.youtube.com/embed/".$videoId."?feature=oembed&amp;autoplay=1";
        // }
        // dd($url);

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();
        
        $subcategorias = Subcategoria::orderBy('nome')->get();

        $seo = [
            'nome'=>$videos->nome,
            'descricao'=>str_limit($videos->resumo, 130),
            'imagem'=>asset($videos->imagem),
            'url'=> route('site.video',[$videos->id, $videos->slug])
        ];

        // return view('site.categoria', compact());
        return view('site.video', [
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
