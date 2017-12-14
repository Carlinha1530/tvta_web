<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Artigo;
use App\Palestrante;
use Carbon\Carbon;
use App\Contato;


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
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Artigos',
            'url'=> route('site.artigos'),
            'imagem'=>config('seo.imagem')
        ];

        return view('site.artigos', compact('artigos', 'contatos', 'categorias', 'palestrantes', 'seo', 'str'));
    }
 
    public function artigo(Request $request, $slug)   // url: http://localhost:8000/artigo/arjun_cruickshank
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $artigos = Artigo::whereSlug($request->slug)->firstOrFail(); 
        // $nome = str_replace("_", " ", $nome); 
        // $nome = ucwords(strtolower($nome));
        // $artigos = Artigo::where('nome','=',$nome)->get();

        $seo = [
            'nome'=>$artigos->nome,
            'descricao'=>str_limit($artigos->conteudo, 130),
            // 'descricao'=>str_limit($artigos->resumo, 130),
            'imagem'=>asset($artigos->imagem),
            'url'=> route('site.artigo',[$artigos->id, $artigos->slug])
        ];

        return view('site.artigo', compact('artigos', 'contatos', 'categorias', 'palestrantes', 'seo', 'str'));
    }


    public function download($file)
    {
        return response()->download($file);

        // response()->stream($file);
        // return response()->file($file);

        // $artigos = Artigo::All();
        // $file= public_path($artigos->file);

        // $headers = array(
        //           'Content-Type: application/pdf',
        //         );

        // return Response::file($file, $artigos->file, $headers);

    }
}
