<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MidiaRequest; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Midia;
use Auth;

class MidiaController extends Controller
{
    public function index()
    {
        $midias = Midia::all();
        return view('admin.midias.index', compact('midias')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
        return view('admin.midias.adicionar', compact('midias'));
    } 

    public function salvar(MidiaRequest $request)
    {
        $midias = Midia::create($request->all());
        
        $file = $request->file('_file');
        if($file){
            $diretorio = "file/midias/{$midias->id}";
            $ext = $file->getClientOriginalExtension();
            $nomeArquivo = "file_".$midias->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $midias->file = $diretorio.'/'.$nomeArquivo; //
        }

		$midias->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.midias.adicionar');            
    }

    public function editar($id)
    {
        $midias = Midia::find($id);
        if(!$midias){
             \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.midias.adicionar'); 
        }
        return view('admin.midias.editar', compact('midias'));
    }

    public function atualizar(MidiaRequest $request, $id)
    {
        $midias = Midia::find($id);

        $file = $request->file('_file');
        if($file){
            $diretorio = "file/midias/{$midias->id}";
            $ext = $file->getClientOriginalExtension();
            $nomeArquivo = "file_".$midias->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $midias->file = $diretorio.'/'.$nomeArquivo; //
        }
        
        $midias ->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.midias');            
    }

    public function deletar($id)
    {
        $midias = Midia::find($id); //busca o cliente 
        $midias->delete(); //deleta
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.midias');           
    }
}
