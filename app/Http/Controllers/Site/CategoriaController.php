<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Palestrante;
use App\Subcategoria;
use App\Contato;

class CategoriaController extends Controller
{
    public function categorias_all(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->paginate(12);
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();
        
        $seo = [
            'nome'=>'Categorias',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.categorias_all')
        ];

        return view('site.categorias_all', compact('categorias', 'contatos', 'palestrantes', 'seo', 'str'));
    } 

    public function categoria(Request $request, $slug)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $cats = Categoria::whereSlug($request->slug)->firstOrFail(); 
        // $nome = str_replace("_", " ", $nome); 
        // $nome = ucwords(strtolower($nome));
        // $cats = Categoria::where('nome','=',$nome)->get();
        // dd($cat);

        // $cats = Categoria::find($id);
        $videos = $cats->video()->where('publicar','=','sim')->orderBy('id', 'DESC')->paginate(12);
        $subcategorias = $cats->subcategoria()->orderBy('id')->get();

        $seo = [
            'nome'=>$cats->nome,
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.categoria',[$cats->id,$cats->slug])
        ];

        return view('site.categoria', compact('cats', 'categorias', 'contatos', 'palestrantes', 'videos', 'subcategorias', 'seo', 'str'));
    
    } 
}
