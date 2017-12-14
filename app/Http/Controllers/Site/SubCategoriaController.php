<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Palestrante;
use App\Subcategoria;
use App\Contato;


class SubCategoriaController extends Controller
{
   	public function subcategoria(Request $request, $slug)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $subcats = Subcategoria::whereSlug($request->slug)->firstOrFail(); 
        // $nome = str_replace("_", " ", $nome); 
        // $nome = ucwords(strtolower($nome));
        // $subcats = Subcategoria::where('nome','=',$nome)->get();

        // $subcats = Subcategoria::find($id);
        $videos = $subcats->video()->where('publicar','=','sim')->orderBy('id')->paginate(12);
        $cats = $subcats->categoria()->orderBy('id')->get();

        $seo = [
            'nome'=>$subcats->nome,
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.subcategoria',[$subcats->id,$subcats->slug])
        ];

        return view('site.subcategoria', compact('seo', 'contatos', 'sub', 'cats', 'subcats', 'categorias', 'palestrantes', 'videos', 'str'));
    }
}
