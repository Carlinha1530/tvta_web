<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ContatoRequest; 
use App\Http\Controllers\Controller;
// use App\Http\Requests;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
    	return view('admin.paginas.contatos.index',compact('contatos'));
    }

    public function adicionar()
    {
        return view('admin.paginas.contatos.adicionar');
    } 

    public function salvar(ContatoRequest $request)
    {
        $contatos = Contato::create($request->all());

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.contatos.adicionar');          
    }

    public function editar($id)
    {
        $contatos = Contato::find($id);
        if(!$contatos){
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
           return view('admin.paginas.contatos.adicionar',compact('contatos')); 
        }
        return view('admin.paginas.contatos.editar',compact('contatos'));    
    }

    public function atualizar(ContatoRequest $request, $id)
    {
        $contatos = Contato::find($id);
        
        $contatos->update($request->all());

        // return redirect()->route('admin.paginas.contatos')->with('success','Registro atualizado com sucesso!');
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.contatos');    
    }

    public function deletar($id)
    {
        $contatos = Contato::find($id); //busca o cliente 
        $contatos->delete(); //deleta

        // return redirect()->route('admin.paginas.contatos')->with('success','Pagina Deletado com Sucesso!!'); 
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.contatos');               
    }
}
