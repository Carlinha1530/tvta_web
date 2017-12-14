<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Contato;

class EstudosBiblicosController extends Controller
{
    public function infografico(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Infográficos',
            'imagem'=>config('seo.imagem'),
            'descricao'=>'Estudo Bíblico utilizando Infográficos',
            'url'=> route('site.infografico')
        ];

        return view('site.infografico',compact('categorias', 'contatos', 'palestrantes', 'seo', 'str'));
    }

    public function serie_biblica(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Série de Estudos',
            'imagem'=>config('seo.imagem'),
            'descricao'=>'Série de Estudos Bíblicos Ilustrado',
            'url'=> route('site.serie_biblica')
        ];

        return view('site.serie_biblica',compact('categorias', 'contatos', 'palestrantes', 'seo', 'str'));
    }

    public function info(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Infográfico',
            'imagem'=>config('seo.imagem'),
            'descricao'=>'Estudo Bíblico utilizando Infográficos',
            'url'=> route('site.info')
        ];

        return view('site.info',compact('categorias', 'contatos', 'palestrantes', 'seo', 'str'));
    }

  //   public function info_2300(Request $request)
  //   {
  //       $str = $request->get('str', "");

		// $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();

  //       $seo = [
  //           'nome'=>'Infográfico',
  //           'descricao'=>'Estudo Bíblico utilizando Infográficos',
  //           'url'=> route('site.infograficos.info_2300')
  //       ];

  //       return view('site.infograficos.info_2300',compact('categorias', 'palestrantes', 'seo', 'str'));
  //   }


}
