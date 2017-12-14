<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RadioAudio;
use App\Categoria;
use App\Aovivo;
use App\Contato;
use XmlParser;

// use Path\To\DOMDocument;
use DOMDocument;
use Carbon\Carbon;
use DateTime;

use Illuminate\Support\Collection;
// use App\CustomCollection;


class StreamingController extends Controller
{
    public function indexStreaming(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();
        // $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();

        $seo = [
            'nome'=>'Streaming',
            'descricao'=>'Streaming Tv Terceiro Anjo',
            'imagem'=>'img/Streaming.png',
            'url'=> route('streaming')
        ];

        // TESTE 1
        // $xml = simplexml_load_file('http://tanjo.publicvm.com:7521/video/list');
        // $time = $xml->Item['ScheduledAt']; //pega a data do primeiro
        // dd($xml); //Pega todos 
        // dd($xml->Item[0]); //Pega o video escolhido  
        // dd($xml->Item['Name']); //Pega o nome do primeiro 

        // TESTE 2
        $now = new DateTime(); //data atual
        $xml = simplexml_load_file('http://tanjo.publicvm.com:7521/video/list');
        $xml = collect($xml);
        $currentVideos = $xml->where('ScheduledAt', '<=', $now);
        dd($currentVideos); //Pega os dados do ultimo

        // TESTE 3
        // $xmlString = 'http://tanjo.publicvm.com:7521/video/list';
        // $now = new DateTime(); //data atual
        // $xml = simplexml_load_file($xmlString);
        // foreach ($xml->children() as $item) {
        //     if($item['ScheduledAt'] <= $now){
        //         echo $item['Name']; //Pega todos os nomes
        //     }
        // }



        // dd($item['Name']->where('ScheduledAt', '<=', $now)); 
        // dd($item); 

        return view('site.streaming',compact('contatos', 'categorias', 'palestrantes', 'seo', 'str', 'xml'));
    }

    public function indexRadio(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $contatos = Contato::where('publicar','=','sim')->first();
        // $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();

        $audios = RadioAudio::where('publicar','=','sim')->orderBy('id', 'DESC')->paginate(12);

        $seo = [
            'nome'=>'Rádio',
            'descricao'=>'Rádio Terceiro Anjo',
            'imagem'=>'img/Streaming.png',
            'url'=> route('radio')
        ];

        return view('site.radio',compact('audios', 'contatos', 'categorias', 'palestrantes', 'seo', 'str'));
    }

    public function indexAovivo(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $aovivo = Aovivo::where('publicar','=','sim')->first();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Ao Vivo Pt-Br',
            'descricao'=>'Ao Vivo Pt-Br',
            'imagem'=>'img/Streaming.png',
            'url'=> route('aovivo')
        ];

        return view('site.aovivo',compact('categorias', 'contatos', 'aovivo', 'seo', 'str'));
    }

    public function indexAovivoes(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $aovivo = Aovivo::where('publicar','=','sim')->first();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Ao Vivo Espanhol',
            'descricao'=>'Ao Vivo Espanhol',
            'imagem'=>'img/Streaming.png',
            'url'=> route('aovivo')
        ];

        return view('site.aovivoes',compact('categorias', 'contatos', 'aovivo', 'seo', 'str'));
    }
    public function indexAovivoen(Request $request)
    {
        $str = $request->get('str', "");

		$categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $aovivo = Aovivo::where('publicar','=','sim')->first();
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Ao Vivo Inglês',
            'descricao'=>'AAo Vivo Inglês',
            'imagem'=>'img/Streaming.png',
            'url'=> route('aovivo')
        ];

        return view('site.aovivoen',compact('categorias', 'contatos', 'aovivo', 'seo', 'str'));
    }

    public function download($audio)
    {
        return response()->download($audio);
    }
    
}
