<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AovivoRequest; 
use App\Http\Controllers\Controller;
use App\Aovivo;

class StreamingController extends Controller
{
    public function index()
    {
        $aovivo = Aovivo::all();
    	return view('admin.paginas.aovivo.index',compact('aovivo'));
    }

    public function adicionar()
    {
        return view('admin.paginas.aovivo.adicionar');
    } 

    public function salvar(AovivoRequest $request)
    {
        $aovivo = Aovivo::create($request->all());

        // https://www.youtube.com/watch?v=e3KM6QCrr2g
        // https://www.youtube.com/embed/e3KM6QCrr2g&autoplay=1&controls=2

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.aovivo.adicionar');          
    }

    public function editar($id)
    {
        $aovivo = Aovivo::find($id);
        if(!$aovivo){
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
           return view('admin.paginas.aovivo.adicionar',compact('aovivo')); 
        }
        return view('admin.paginas.aovivo.editar',compact('aovivo'));    
    }

    public function atualizar(AovivoRequest $request, $id)
    {
        $aovivo = Aovivo::find($id);
        
        $aovivo->update($request->all());

        // return redirect()->route('admin.paginas.aovivo')->with('success','Registro atualizado com sucesso!');
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.aovivo');    
    }

    public function deletar($id)
    {
        $aovivo = Aovivo::find($id); //busca o cliente 
        $aovivo->delete(); //deleta

        // return redirect()->route('admin.paginas.aovivo')->with('success','Pagina Deletado com Sucesso!!'); 
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.aovivo');               
    }
}
