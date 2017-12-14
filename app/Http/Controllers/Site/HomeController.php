<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Categoria;
use App\Artigo;
use App\Palestrante;
use App\Pagina;
use App\Audio;
use App\Galeria;
use App\Serie;
use App\Slide;
use App\Contato;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('pt');
        setLocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    }
    
    public function home(Request $request)
    {   
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        
        $pagina = Pagina::where('tipo','=','contato')->first();
        $videos = Video::where('publicar','=','sim')->where('idioma','=','portugues')->orderBy('ordem_data', 'DESC')->take(8)->get();
        // $videos = Video::where('publicar','=','sim')->orderBy('updated_at', 'DESC')->take(4)->get();
        $artigos = Artigo::where('publicar','=','sim')->orderBy('id', 'DESC')->take(3)->get();
        $slides = Slide::where('publicar','=','sim')->orderBy('ordem')->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        //Recentes
        $vi = Video::where('publicar','=','sim')->orderBy('id', 'DESC')->take(2)->get(); //video
        $ar = Artigo::where('publicar','=','sim')->orderBy('id', 'DESC')->take(2)->get(); //artigo
        $au = Audio::where('publicar','=','sim')->orderBy('id', 'DESC')->take(2)->get(); //audio
        $ga = Galeria::where('publicar','=','sim')->orderBy('id', 'DESC')->take(2)->get(); //galeria
        $se = Serie::where('publicar','=','sim')->orderBy('id', 'DESC')->take(2)->get(); //galeria
        $pa = Palestrante::where('publicar','=','sim')->orderBy('id', 'DESC')->take(2)->get(); //palestrante
        // dd($v);

        $seo = [
            'nome'=>config('seo.nome'),
            'descricao'=>config('seo.descricao'),
            'imagem'=>config('seo.imagem'),
            'url'=>config('seo.url')
        ];
        
        return view('site.home', [
            'videos' => $videos,
            'categorias' => $categorias, 
            'palestrantes' => $palestrantes, 
            'artigos' => $artigos, 
            'slides' => $slides, 
            'pagina' => $pagina, 
            'contatos' => $contatos, 
            'str' => $str, 
            'vi' => $vi, 
            'ar' => $ar, 
            'au' => $au, 
            'ga' => $ga, 
            'se' => $se, 
            'pa' => $pa, 
            'seo' => $seo
        ]);
    }

    public function download($file)
    {
        return response()->download($file);
    }


}
