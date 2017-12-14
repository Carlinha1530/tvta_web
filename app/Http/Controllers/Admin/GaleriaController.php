<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\GaleriaRequest; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Galeria;
use Auth;

class GaleriaController extends Controller
{
    public function index()
    {
        // $galerias = Galeria::orderBy('id', 'DESC')->paginate(10);
        $galerias = Galeria::all();
        return view('admin.galerias.index', compact('galerias')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
        return view('admin.galerias.adicionar', compact('galerias'));
    } 

    public function salvar(GaleriaRequest $request)
    {
        
        $galerias = Galeria::create($request->all());

        $file = $request->file('_img');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/galerias/galeria/{$galerias->id}";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$galerias->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $galerias->img = $diretorio.'/'.$nomeArquivo; //
        }

        $galerias->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.galerias.adicionar');            
    }

    public function editar($id)
    {
        $galerias = Galeria::find($id);
        if(!$galerias){
            // return redirect()->route('admin.galerias.adicionar')->with('success','Não existe essa Galeria cadastrado!! Deseja Cadastrar uma nova Galeria');
             \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.galerias.adicionar'); 
        }
        return view('admin.galerias.editar', compact('galerias'));
    }

    public function atualizar(GaleriaRequest $request, $id)
    {
        $galerias = Galeria::find($id);

        $file = $request->file('_img');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/galerias/galeria/".$request->id;
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$galerias->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $request->merge(['img' => $diretorio.'/'.$nomeArquivo]);
            // $galerias->img = $diretorio.'/'.$nomeArquivo;
        }
        
        $galerias ->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.galerias');            
    }

    public function deletar($id)
    {
        $galerias = Galeria::find($id); //busca o cliente 
        $galerias->delete(); //deleta
        // return redirect()->route('admin.galerias')->with('success','Galeria Deletado com Sucesso!!');  
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.galerias');           
    }

}
