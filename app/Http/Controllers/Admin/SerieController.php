<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SerieRequest; 
use App\Http\Requests\SerieVideoRequest; 
use App\Http\Controllers\Controller;
use App\Serie;
use App\Video;
use App\Categoria;
use App\Subcategoria;
use App\Palestrante;
use Auth;

class SerieController extends Controller
{
	public function index()
    {
        // $series = Serie::orderBy('id', 'DESC')->paginate(10);
    	$series = Serie::all();
    	return view('admin.series.index', compact('series')); 
	}

	public function adicionar()
    {
    	$videos = Video::all();
        return view('admin.series.adicionar', compact('series', 'videos'));
    } 

    public function salvar(SerieRequest $request)
    {
        
        $series = Serie::create($request->all());

        $file = $request->file('_imagem');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/series/{$series->id}";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$series->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $series->imagem = $diretorio.'/'.$nomeArquivo; //
        }
        
        $series->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.series.adicionar');
    }

    public function editar($id)
    {
        $series = Serie::find($id);
        if(!$series){
            // return redirect()->route('admin.series.adicionar')->with('success','Não existe essa Serie cadastrado!! Deseja Cadastrar uma nova Serie?');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.series.adicionar'); 
        }
        return view('admin.series.editar', compact('series'));
    }

    public function atualizar(SerieRequest $request, $id)
    {
        $series = Serie::find($id);

        $file = $request->file('_imagem');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/series/".$request->id;
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$request->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $request->merge(['imagem' => $diretorio.'/'.$nomeArquivo]);
            // $series->imagem = $diretorio.'/'.$nomeArquivo;
        }
        
        $series ->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.series');           
    }

    public function deletar($id)
    {
        $series = Serie::find($id); //busca o cliente 
        $series->delete(); //deleta

        // return redirect()->route('admin.series')->with('success','Serie Deletado com Sucesso!!');  
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.series');     
    }

    public function videos($id)
    {
        $series = Serie::find($id);//Serie
        // $videos = Video::all();//Video
        // $videos = Video::where('publicar','=','sim')->orderBy('id', 'DESC')->take(3)->get();
        $videos = Video::where('publicar','=','sim')->orderBy('id', 'DESC')->get();
        return view('admin.series.videos',compact('series','videos'));
    }

    public function salvarVideos(SerieVideoRequest $request,$id)
    // public function salvarVideos(Request $request,$id)
    {
        $series = Serie::find($id);
        $dados = $request->all();
        $videos = Video::find($dados['video_id']);
        $series->adicionaVideo($videos);
        return redirect()->back();
    }

    public function removerVideos($id,$video_id)
    {        
        $series = Serie::find($id);        
        $videos = Video::find($video_id);
        $series->removeVideo($videos);
        return redirect()->back();
    }


}
