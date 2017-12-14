<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ArtigoRequest; 
use App\Http\Controllers\Controller;
use App\Artigo;
use DB;

class ArtigoController extends Controller
{
    public function index()
    {
        // $artigos = Artigo::orderBy('id', 'DESC')->paginate(10);
        $artigos = Artigo::all();
    	return view('admin.artigos.index', compact('artigos')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
    	$artigos = Artigo::all();
    	return view('admin.artigos.adicionar', compact('artigos'));
    } 

    public function salvar(ArtigoRequest $request)
    {
        // $this->validate($request, [
        //     'nome' => 'required|max:255|min:5',
        //     'conteudo' => 'required',
        //     // 'imagem' => 'required|mimes:jpeg,bmp,png',
        // ]);

        $artigos = Artigo::create($request->all());

    	$file = $request->file('_imagem');
    	if($file){
    		// $rand = rand(11111,99999);
    		$diretorio = "img/artigos/{$artigos->id}";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "img_".$artigos->id.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$artigos->imagem = $diretorio.'/'.$nomeArquivo; //
    	}

        $file = $request->file('_file');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "file/artigos/{$artigos->id}";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "file_".$artigos->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $artigos->file = $diretorio.'/'.$nomeArquivo; //
        }
        
        $artigos->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.artigos.adicionar');           
    }

    public function editar($id)
    {
        $artigos = Artigo::find($id);
        if(!$artigos){
            // return redirect()->route('admin.artigos.adicionar')->with('success','Não existe esse Artigo cadastrado!! Deseja Cadastrar uma nov Artigo');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.artigos.adicionar'); 
        }
        return view('admin.artigos.editar', compact('artigos'));
    }

    public function atualizar(ArtigoRequest $request, $id)
    {
        $artigos = Artigo::find($id);

    	$file = $request->file('_imagem');
    	if($file){
    		// $rand = rand(11111,99999);
    		$diretorio = "img/artigos/".$request->id;
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "img_".$request->id.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
            $request->merge(['imagem' => $diretorio.'/'.$nomeArquivo]);
    		// $artigos->imagem = $diretorio.'/'.$nomeArquivo; //
    	}

        $file = $request->file('_file');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "file/artigos/".$request->id;
            $ext = $file->guessClientExtension();
            $nomeArquivo = "file_".$request->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $request->merge(['file' => $diretorio.'/'.$nomeArquivo]);
            // $artigos->file = $diretorio.'/'.$nomeArquivo; //
        }

        $artigos->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.artigos');            
    }

    public function deletar($id)
    {
        $artigos = Artigo::find($id); //busca o cliente 
        $artigos->delete(); //deleta
        // return redirect()->route('admin.artigos')->with('success','Artigo Deletado com Sucesso!!');
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.artigos');             
    }
    
    public function download($file)
    {
        return response()->download($file);
    }
}
