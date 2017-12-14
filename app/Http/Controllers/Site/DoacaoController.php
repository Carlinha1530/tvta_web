<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Palestrante;
use App\Contato;

class DoacaoController extends Controller
{
    public function doar(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Quero Doar',
            'descricao'=>'Obrigado por considerar fazer uma doação!',
            'imagem'=>config('seo.imagem'),
            'url'=> route('quero_doar')
        ];

        return view('site.quero_doar',compact('categorias', 'contatos', 'palestrantes', 'seo', 'str'));
    }

    public function participar(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Quero Participar',
            'descricao'=>'Você pode apoiar este ministério de várias formas!',
            'imagem'=>config('seo.imagem'),
            'url'=> route('quero_participar')
        ];

        return view('site.quero_participar',compact('categorias', 'contatos', 'palestrantes', 'seo', 'str'));
    }

    public function divulgar(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Quero Divulgar',
            'descricao'=>'Divulgue a TV Terceiro Anjo no Seu Site e Redes Sociais.',
            'imagem'=>config('seo.imagem'),
            'url'=> route('quero_divulgar')
        ];

        return view('site.quero_divulgar',compact('categorias', 'contatos', 'palestrantes', 'seo', 'str'));
    }

    // Download Logos
    public function logo1()
    {
        return response()->download(public_path('/img/logos/logo1.png'));
    }

    public function logo2()
    {
        return response()->download(public_path('/img/logos/logo2.png'));
    }

    public function logo3()
    {
        return response()->download(public_path('/img/logos/logo3.png'));
    }

    public function logo4()
    {
        return response()->download(public_path('/img/logos/logo4.png'));
    }

    public function logo5()
    {
        return response()->download(public_path('/img/logos/logo5.png'));
    }


}
