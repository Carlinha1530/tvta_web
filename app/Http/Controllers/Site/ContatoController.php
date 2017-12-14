<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Palestrante;
use App\User;
use App\Contato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        // $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        
        $contatos = Contato::where('publicar','=','sim')->first();

        $seo = [
            'nome'=>'Contatos',
            'imagem'=>config('seo.imagem'),
            'url'=> route('site.contatos')
        ];

        return view('site.contatos',compact('contatos', 'categorias', 'palestrantes', 'seo', 'str'));
    }

    public function enviarContato(Request $request)
    {
    	$contatos = Contato::where('publicar','=','sim')->first();
        $email =  config('mail.from.address');
        // dd($email);
        \Mail::send('emails.contato', ['request'=>$request], function($m) use ($request,$email){
            $m->from($request['email'], $request['nome']);
            $m->replyTo($request['email'], $request['nome']);
            $m->subject("Contato pelo Site");
            $m->to($email, 'Contato TV Terceiro Anjo');
        });

    	return redirect()->route('site.contatos')->with('success','Contato enviado com sucesso!!');
    }
}
