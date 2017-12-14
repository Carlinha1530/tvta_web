<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\AudioRequest; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Audio;
use Auth;

class AudioController extends Controller
{
    public function index()
    {
        $audios = Audio::all();
    	return view('admin.audios.index', compact('audios')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
    	return view('admin.audios.adicionar', compact('audios'));
    } 

    public function salvar(AudioRequest $request)
    {
    	
    	$audios = Audio::create($request->all());

    	$file = $request->file('_audio');
    	if($file){
    		// $rand = rand(11111,99999);
    		$diretorio = "mp3/audios/{$audios->id}";
    		// $ext = $file->getClientOriginalExtension();
            // $nomeArquivo = "audio_".$audios->id.".".$ext;
            $nomeArquivo = $file->getClientOriginalName();
    		$file->move($diretorio,$nomeArquivo);
    		$audios->audio = $diretorio.'/'.$nomeArquivo; //
    	}
        
        $audios->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.audios.adicionar');           
    }

    public function editar($id)
    {
        $audios = Audio::find($id);
        if(!$audios){
            // return redirect()->route('admin.audios.adicionar')->with('success','Não existe esse Audio cadastrado!! Deseja Cadastrar uma nov Palestrante');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.audios.adicionar'); 
        }
        return view('admin.audios.editar', compact('audios', 'categorias'));
    }

    public function atualizar(AudioRequest $request, $id)
    {
        $audios = Audio::find($id);

    	$file = $request->file('_audio');
    	if($file){
    		// $rand = rand(11111,99999);
    		$diretorio = "mp3/audios/".$request->id;
    		// $ext = $file->getClientOriginalExtension();
    		// $nomeArquivo = "audio_".$audios->id.".".$ext;
            $nomeArquivo = $file->getClientOriginalName();
    		$file->move($diretorio,$nomeArquivo);
            $request->merge(['audio' => $diretorio.'/'.$nomeArquivo]);
    	}
        
        $audios ->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.audios');             
    }

    public function deletar($id)
    {
        $audios = Audio::find($id); //busca o cliente 
        $audios->delete(); //deleta

        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.audios');             
    }


}
