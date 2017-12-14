<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SlideRequest; 
use App\Http\Controllers\Controller;
use App\Slide;

class SlideController extends Controller
{
    public function index()
    {        
        $slides = Slide::orderBy('ordem')->get();
        return view('admin.paginas.slides.index',compact('slides'));
    }

    public function adicionar()
    {
        return view('admin.paginas.slides.adicionar');
    }

    // public function salvar(SlideRequest $request)
    public function salvar(Request $request)
    {  
    	$dados = $request->all();
        if(Slide::count()){ //conta qtas imagens tem no slide
        	$slides = Slide::orderBy('ordem','desc')->first(); //tras o primeiro registro da ordem
        	$ordemAtual = $slides->ordem; //vai pegar a rdem do elemento e add nessa variavel
        }else{
        	$ordemAtual = 0;
        }        

        if($request->hasFile('imagens')){
        	$arquivos = $request->file('imagens');
        	foreach ($arquivos as $imagem) {
        		$registro = new Slide();

        		$rand = rand(11111,99999);
	    		$diretorio = "img/slides";
	    		$ext = $imagem->guessClientExtension();
	    		$nomeArquivo = "img_".$rand.".".$ext;
	    		$imagem->move($diretorio,$nomeArquivo);	 
	    		$registro->id_usuario = $dados['id_usuario'];
	    		$registro->ordem = $ordemAtual + 1;
	    		$ordemAtual++;
	    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
	    		$registro->save();
        	}
        }
        
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.slides');
    }

    public function editar($id)
    {
        $registro = Slide::find($id);  
        if(!$registro){
            // return redirect()->route('admin.paginas.series.adicionar')->with('success','Não existe essa Serie cadastrado!! Deseja Cadastrar uma nova Serie?');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.paginas.slides.adicionar'); 
        }
        return view('admin.paginas.slides.editar',compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Slide::find($id);
        $dados = $request->all();

        $registro->nome = $dados['nome'];
        $registro->descricao = $dados['descricao'];
        $registro->ordem = $dados['ordem'];
        $registro->link = $dados['link'];
        $registro->publicar = $dados['publicar'];

        $imovel = $registro->imovel;

        $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/slides";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.'/'.$nomeArquivo;
    	}
        $registro ->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.slides');
    }

    public function deletar($id)
    {
        $slide = Slide::find($id);        
        $slide->delete();

        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.paginas.slides');
    }

}
