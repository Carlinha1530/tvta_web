<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Palestrante;
use App\User;
use App\Sobrenos;
use App\Contato;

class SobrenosController extends Controller
{
    public function nossa_historia(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $users = User::where('publicar','=','sim')->orderBy('name')->paginate(8);
        $sobrenos = Sobrenos::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Nossa História',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.nossa_historia')
        ];

        return view('site.nossa_historia',compact('contatos','sobrenos','users', 'categorias', 'palestrantes', 'seo', 'str'));
    }
}
