<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SobrenosRequest; 
use App\Http\Controllers\Controller;
use App\Sobrenos;

class SobrenosController extends Controller
{
    public function index()
    {
        $sobrenos = Sobrenos::all();
    	return view('admin.paginas.sobrenos.index',compact('sobrenos'));
    }

    public function adicionar()
    {
        return view('admin.paginas.sobrenos.adicionar');
    } 

    public function salvar(SobrenosRequest $request)
    {
        $sobrenos = Sobrenos::create($request->all());

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.sobrenos.adicionar');          
    }

    public function editar($id)
    {
        $sobrenos = Sobrenos::find($id);
        if(!$sobrenos){
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
           return view('admin.paginas.sobrenos.adicionar',compact('sobrenos')); 
        }
        return view('admin.paginas.sobrenos.editar',compact('sobrenos'));    
    }

    public function atualizar(SobrenosRequest $request, $id)
    {
        $sobrenos = Sobrenos::find($id);
        
        $sobrenos->update($request->all());

        // return redirect()->route('admin.paginas.sobrenos')->with('success','Registro atualizado com sucesso!');
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.sobrenos');    
    }

    public function deletar($id)
    {
        $sobrenos = Sobrenos::find($id); //busca o cliente 
        $sobrenos->delete(); //deleta

        // return redirect()->route('admin.paginas.sobrenos')->with('success','Pagina Deletado com Sucesso!!'); 
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.sobrenos');               
    }
}
