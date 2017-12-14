<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Audio;
use App\Categoria;
use App\Contato;

class AudioController extends Controller
{
    public function audios(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();

        $audios = Audio::where('publicar','=','sim')->orderBy('id', 'DESC')->paginate(12);

        $seo = [
            'nome'=>'Audios',
            'descricao'=>'Audios para Download',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.audios')
        ];

        return view('site.audios',compact('contatos', 'categorias', 'audios', 'seo', 'str'));
    }

    public function download($audio)
    {
        return response()->download($audio);
    }
}
