<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Palestrante;
use App\User;
use App\Pagina;

class PaginaController extends Controller
{
    public function nossa_historia(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();

        $users = User::where('publicar','=','sim')->orderBy('id')->paginate(8);
        // $pagina = Pagina::where('tipo','=','nossa_historia')->first();

        $seo = [
            'nome'=>config('seo.nome'),
            'url'=> route('site.nossa_historia'),
            // 'descricao'=>config('seo.descricao'),
            'imagem'=>config('seo.imagem')
        ];

        return view('site.nossa_historia',compact('pagina','users', 'categorias', 'palestrantes', 'seo', 'str'));
    }

    public function contato(Request $request)
    {
        $str = $request->get('str', "");

        $categorias = Categoria::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        $palestrantes = Palestrante::where('publicar','=','sim')->orderBy('nome')->take(15)->get();
        
        // $pagina = Pagina::where('tipo','=','contato')->first();

        $seo = [
            'nome'=>config('seo.nome'),
            'url'=> route('site.contatos'),
            // 'descricao'=>config('seo.descricao'),
            'imagem'=>config('seo.imagem')
        ];

        return view('site.contatos',compact('pagina', 'categorias', 'palestrantes', 'seo', 'str'));
    }

    public function enviarContato(Request $request)
    {
    	$pagina = Pagina::where('tipo','=','contato')->first();
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
