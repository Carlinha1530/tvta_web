<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PaginaRequest; 
use App\Http\Controllers\Controller;
use App\Pagina;

class PaginaController extends Controller
{
    public function index()
    {
    	// $paginas = Pagina::paginate(10);
        $paginas = Pagina::all();
    	return view('admin.paginas.contatos.index',compact('paginas'));
    }

    public function adicionar()
    {
        return view('admin.paginas.contatos.adicionar', compact('paginas'));
    } 

    public function salvar(PaginaRequest $request)
    // public function salvar(Request $request)
    {
        // nome// descricao// texto// imagem// mapa// email// tipo
        $dados = $request->all();

        $paginas = new Pagina();
        $paginas->nome = trim($dados['nome']);
        $paginas->descricao = trim($dados['descricao']);
        $paginas->texto = trim($dados['texto']);
        $paginas->tipo = trim($dados['tipo']);
        // $paginas->publicar= $dados['publicar'];

        // if(isset($dados['email'])){
            $paginas->email = trim($dados['email']);
        // }
        // if(isset($dados['mapa']) && trim($dados['mapa']) != ''){
            $paginas->mapa = trim($dados['mapa']);
        // }else{
            // $paginas->mapa = null;
        // }

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/paginas/".str_slug($dados['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $paginas->imagem = $diretorio.'/'.$nomeArquivo;
        }
        $paginas->save();

        // return redirect()->route('admin.paginas.contatos')->with('success','Pagina Adicionado com Sucesso!!');    
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.contatos.adicionar');          
    }

    public function editar($id)
    {
        $paginas = Pagina::find($id);
        if(!$paginas){
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
           return view('admin.paginas.contatos.adicionar',compact('paginas')); 
        }
        return view('admin.paginas.contatos.editar',compact('paginas'));    
    }

    public function atualizar(Request $request, $id)
    {
    	$dados = $request->all();
        $pagina = Pagina::find($id);
        $pagina->nome = trim($dados['nome']);
        $pagina->descricao = trim($dados['descricao']);
        $pagina->texto = trim($dados['texto']);
        // $pagina->publicar= $dados['publicar'];
        
        if(isset($dados['email'])){
            $pagina->email = trim($dados['email']);
        }
        if(isset($dados['mapa']) && trim($dados['mapa']) != ''){
            $pagina->mapa = trim($dados['mapa']);
        }else{
            $pagina->mapa = null;
        }

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/paginas/".str_slug($dados['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $pagina->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $pagina->update();

        // return redirect()->route('admin.paginas.contatos')->with('success','Registro atualizado com sucesso!');
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.contatos');    
    }

    public function deletar($id)
    {
        $paginas = Pagina::find($id); //busca o cliente 
        $paginas->delete(); //deleta

        // return redirect()->route('admin.paginas.contatos')->with('success','Pagina Deletado com Sucesso!!'); 
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.contatos');               
    }


}
