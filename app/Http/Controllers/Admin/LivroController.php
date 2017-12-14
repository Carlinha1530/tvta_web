<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LivroRequest; 
use App\Livro;
use Auth;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
    	return view('admin.livros.index', compact('livros')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
    	return view('admin.livros.adicionar', compact('livros'));
    } 

    public function salvar(LivroRequest $request)
    {
    	
    	$livros = Livro::create($request->all());

        $file = $request->file('_imagem');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/livros/{$livros->id}";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$livros->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $livros->imagem = $diretorio.'/'.$nomeArquivo; //
        }

    	$file = $request->file('_file_pdf');
    	if($file){
    		// $rand = rand(11111,99999);
    		$diretorio = "file/livros/{$livros->id}";
    		// $ext = $file->getClientOriginalExtension();
            $nomeArquivo = $file->getClientOriginalName();
            // $nomeArquivo = $file->getClientOriginalName().".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$livros->file_pdf = $diretorio.'/'.$nomeArquivo; //
    	}

        $file = $request->file('_file_epub');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "file/livros/{$livros->id}";
            // $ext = $file->getClientOriginalExtension();
            $nomeArquivo = $file->getClientOriginalName();
            // $nomeArquivo = $file->getClientOriginalName().".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $livros->file_epub = $diretorio.'/'.$nomeArquivo; //
        }
        
        $livros->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.livros.adicionar');           
    }

    public function editar($id)
    {
        $livros = Livro::find($id);
        if(!$livros){
            // return redirect()->route('admin.livros.adicionar')->with('success','Não existe esse Audio cadastrado!! Deseja Cadastrar uma nov Palestrante');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.livros.adicionar'); 
        }
        return view('admin.livros.editar', compact('livros', 'categorias'));
    }

    public function atualizar(LivroRequest $request, $id)
    {
        $livros = Livro::find($id);

        $file = $request->file('_imagem');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/livros/{$livros->id}";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$livros->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $livros->imagem = $diretorio.'/'.$nomeArquivo; //
        }

    	$file = $request->file('_file_pdf');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "file/livros/{$livros->id}";
            // $ext = $file->getClientOriginalExtension();
            $nomeArquivo = $file->getClientOriginalName();
            // $nomeArquivo = $file->getClientOriginalName().".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $livros->file_pdf = $diretorio.'/'.$nomeArquivo; //
        }

        $file = $request->file('_file_epub');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "file/livros/{$livros->id}";
            // $ext = $file->getClientOriginalExtension();
            $nomeArquivo = $file->getClientOriginalName();
            // $nomeArquivo = $file->getClientOriginalName().".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $livros->file_epub = $diretorio.'/'.$nomeArquivo; //
        }
        
        $livros ->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.livros');             
    }

    public function deletar($id)
    {
        $livros = Livro::find($id); //busca o cliente 
        $livros->delete(); //deleta

        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.livros');             
    }

}
