<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RadioAudio;
use App\Categoria;
use App\Aovivo;
use App\Contato;
use XmlParser;
use DOMDocument;
use Carbon\Carbon;
use DateTime;
use DateInterval;

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


        // A lógica ficaria assim : faz a chamada do xml, pega todos os registros, 
        // faz a verificação jogando na lista somente os que tem data inicial + duração maior que a data / hora atual, 
        // fitra essa lista deixando somente os 6 próximos, exibe o primeiro como vídeo ativo no momento e os 
        // outros ficarão na lista da direita como "a seguir"


    // Teste 1.1
        $xml = simplexml_load_file('http://tanjo.publicvm.com:7521/video/list');
        $items = [];
        foreach ($xml->Item as $item) {
            $data = new DateTime($item['ScheduledAt']);
            list($hours, $minutes, $seconds) = explode(":", $item['Duration']);
            $seconds = (float)$seconds;
            $seconds = ceil($seconds);
            $intervalo = new DateInterval("PT" . $hours . "H" . $minutes . "M" . $seconds . "S");
            $data->add($intervalo);
            // dd($data);        

            $items[] = (object)[
                'name' => (string)$item['Name'],
                "schedule_at"=>$data->format('Y-m-d H:i:s'),
                'duration' => (string)$item['Duration'],
            ];

        }
        $collection = collect($items);
        $now = Carbon::now();        
        $collection2 = ($collection->filter(function ($item) use ($now) {
            return $item->schedule_at > $now;
        }));
        // }))->take(6);


    // Teste 1
        // $now1 = Carbon::now();
        // foreach ($xml as $item) {
        //     $data = new DateTime($item['ScheduledAt']);

        //     list($hours, $minutes, $seconds) = explode(":", $item['Duration']);
        //     $seconds = (float) $seconds;
        //     $seconds = ceil($seconds);

        //     $intervalo = new DateInterval("PT" . $hours . "H" . $minutes . "M" . $seconds . "S");
        //     $data->add($intervalo);
            
        //     if ($data >= $now1){
        //         echo $item['Name']." / "; 
        //         echo $item['ScheduledAt']. " / ";
        //         echo $item['Duration']."</br>";
        //         // dd($data);
        //     }
        // }

        return view('site.streaming',compact('contatos', 'categorias', 'palestrantes', 'seo', 'str', 'xml', 'now', 'collection2'));
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
