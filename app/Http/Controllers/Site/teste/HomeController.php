<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use App\Categoria;
use App\Subcategoria;
use App\Palestrante;
use App\Artigo;
use App\Serie;

class HomeController extends Controller
{
    // public function home(Request $request)
    public function home()
    {           
        $categorias = Categoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->get();

        // $str = $request->get('str', "");
        // if ($str) {
        //     $artigos = Artigo::where('nome', 'like', '%'. $str .'%')->
        //     orWhere('conteudo', 'like', '%'. $str .'%')->get();

        //     $videos = Video::where('nome', 'like', '%'. $str .'%')->
        //     orWhere('descricao', 'like', '%'. $str .'%')->get();
        // }else{

        $videos = Video::orderBy('id', 'DESC')->take(12)->get();
        $artigos = Artigo::orderBy('id', 'DESC')->take(3)->get();
        
        }

        return view('site.home', compact('videos', 'categorias', 'palestrantes', 'artigos'));
        // return view('site.home', compact('videos', 'categorias', 'palestrantes', 'artigos', 'str'));
    }

    public function getDownload()
    {
        $file= public_path()."/file/info.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, 'filename.pdf', $headers);
    }

}
