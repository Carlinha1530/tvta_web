<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Palestrante;
use App\Categoria;
use App\Galeria;
use App\Contato;


class GaleriaController extends Controller
{
    public function indexGalerias(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $galerias = Galeria::where('publicar','=','sim')->orderBy('id', 'DESC')->paginate(10);

        $seo = [
            'nome'=>'Galerias',
            'imagem'=>config('seo.imagem'),
            'url'=> route('galerias_all')
        ];

        return view('site.galerias_all', compact('categorias', 'contatos', 'palestrantes', 'galerias', 'seo', 'str'));
    }

    public function indexGaleria(Request $request, $slug)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();
        
        $galeria = Galeria::whereSlug($request->slug)->firstOrFail(); 
        // $nome = str_replace("_", " ", $nome); 
        // $nome = ucwords(strtolower($nome));
        // $galeria = Galeria::where('nome','=',$nome)->get();
        
        // $galeria = Galeria::find($id);
        $img_galerias = $galeria->ImgGaleria()->where('publicar','=','sim')->orderBy('ordem')->get();
        // $direcaoImagem = ['center-align','left-align','right-align'];
        // dd($img_galerias);
        
        $seo = [
            'nome'=>$galeria->nome,
            'descricao'=>str_limit($galeria->descricao, 130),
            'imagem'=>asset($galeria->img),
            'url'=> route('galeria',[$galeria->id,$galeria->slug])
        ];

        return view('site.galeria', compact('categorias', 'contatos', 'palestrantes', 'galeria', 'img_galerias', 'seo', 'str'));
    }
}
// $nome = str_replace("_", " ", $nome); 
// $nome = ucwords(strtolower($nome));
// $artigos = Artigo::where('nome','=',$nome)->get();

// $seo = [
//     'nome'=>$artigos->nome,
//     'descricao'=>str_limit($artigos->conteudo, 130),
//     'imagem'=>asset($artigos->imagem),
//     'url'=> route('site.artigo',[str_slug($artigos->nome,'_')])
// ];