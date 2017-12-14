<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Livro;
use App\Categoria;
use App\Contato;

class LivroController extends Controller
{
    public function livros(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $livros = Livro::where('publicar','=','sim')->orderBy('id', 'DESC')->paginate(12);

        $seo = [
            'nome'=>'Livros',
            'descricao'=>'Livros para Download',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.livros')
        ];

        return view('site.livros',compact('contatos', 'livros', 'categorias', 'seo', 'str'));
    }

    public function download($file)
    {
        return response()->download($file);
    }
}
