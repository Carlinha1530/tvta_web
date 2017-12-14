<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Artigo;
use App\Palestrante;
use Carbon\Carbon;

class ArtigoController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('pt');
        setLocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    }

    public function artigos(Request $request)
    {
        $str = $request->get('str', "");

    	$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();

        $artigos = Artigo::where('publicar','=','sim')->orderBy('id', 'DESC')->paginate(10);

        $seo = [
            'nome'=>'Artigos',
            'url'=> route('site.artigos')
        ];

        return view('site.artigos', compact('artigos', 'categorias', 'palestrantes', 'seo', 'str'));
    }


    public function artigo(Request $request, $id) // url: http://localhost:8000/artigo/8/arjun_cruickshank OU url: http://localhost:8000/artigo/8
    {
        $str = $request->get('str', "");

    	$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();

        $artigos = Artigo::find($id); 

        $seo = [
            'nome'=>$artigos->nome,
            'descricao'=>str_limit($artigos->conteudo, 130),
            'imagem'=>asset($artigos->imagem),
            'url'=> route('site.artigo',[$artigos->id,str_slug($artigos->nome,'_')])
        ];

        return view('site.artigo', compact('artigos', 'categorias', 'palestrantes', 'seo', 'str'));
    }

    public function download($file)
    {
        return response()->download($file);
    }

}
