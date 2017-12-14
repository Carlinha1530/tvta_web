<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Contato;

class AppController extends Controller
{
    public function Apps(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->paginate(12);
        $contatos = Contato::where('publicar','=','sim')->first();
        
        $seo = [
            'nome'=>'Apps',
            'url'=> route('site.apps'),
            'imagem'=>config('seo.imagem')
        ];

        return view('site.apps', compact('categorias', 'contatos', 'seo', 'str'));
    } 
}
