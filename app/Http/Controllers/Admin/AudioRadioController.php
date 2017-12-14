<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RadioAudioRequest; 
use App\RadioAudio;
use Auth;

class AudioRadioController extends Controller
{
    public function index()
    {
        $radioaudios = RadioAudio::all();
    	return view('admin.radioaudios.index', compact('radioaudios')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
    	return view('admin.radioaudios.adicionar', compact('radioaudios'));
    } 

    public function salvar(RadioAudioRequest $request)
    {
    	
    	$radioaudios = RadioAudio::create($request->all());

    	$file = $request->file('_audio');
    	if($file){
    		// $rand = rand(11111,99999);
    		$diretorio = "mp3/radioaudios/{$radioaudios->id}";
    		// $ext = $file->getClientOriginalExtension();
            // $nomeArquivo = "audio_".$radioaudios->id.".".$ext;
            $nomeArquivo = $file->getClientOriginalName();
    		$file->move($diretorio,$nomeArquivo);
    		$radioaudios->audio = $diretorio.'/'.$nomeArquivo; //
    	}
        
        $radioaudios->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.radioaudios.adicionar');           
    }

    public function editar($id)
    {
        $radioaudios = RadioAudio::find($id);
        if(!$radioaudios){
            // return redirect()->route('admin.radioaudios.adicionar')->with('success','Não existe esse Audio cadastrado!! Deseja Cadastrar uma nov Palestrante');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.radioaudios.adicionar'); 
        }
        return view('admin.radioaudios.editar', compact('radioaudios', 'categorias'));
    }

    public function atualizar(RadioAudioRequest $request, $id)
    {
        $radioaudios = RadioAudio::find($id);

    	$file = $request->file('_audios');
    	if($file){
    		// $rand = rand(11111,99999);
    		$diretorio = "mp3/radioaudios/".$request->id;
    		// $ext = $file->getClientOriginalExtension();
    		// $nomeArquivo = "audio_".$radioaudios->id.".".$ext;
            $nomeArquivo = $file->getClientOriginalName();
    		$file->move($diretorio,$nomeArquivo);
            $request->merge(['audio' => $diretorio.'/'.$nomeArquivo]);
    	}
        
        $radioaudios ->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.radioaudios');             
    }

    public function deletar($id)
    {
        $radioaudios = RadioAudio::find($id); //busca o cliente 
        $radioaudios->delete(); //deleta

        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.radioaudios');             
    }
}
