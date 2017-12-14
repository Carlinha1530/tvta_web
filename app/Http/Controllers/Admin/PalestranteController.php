<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PalestranteRequest; 
use App\Http\Controllers\Controller;
use App\Palestrante;
use App\Categoria;
use App\Video;
use Auth;


class PalestranteController extends Controller
{
    public function index()
    {
        // $palestrantes = Palestrante::orderBy('nome', 'ASC')->get();
        $palestrantes = Palestrante::all();
    	return view('admin.palestrantes.index', compact('palestrantes')); //passa a variavel $palestrante como parametro
    }

    public function adicionar()
    {
    	return view('admin.palestrantes.adicionar', compact('palestrantes'));
    } 

    public function salvar(PalestranteRequest $request)
    {
    	
    	$palestrantes = Palestrante::create($request->all());

    	$file = $request->file('_imagem');
    	if($file){
    		// $rand = rand(11111,99999);
    		$diretorio = "img/palestrantes/{$palestrantes->id}/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "img_".$palestrantes->id.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$palestrantes->imagem = $diretorio.'/'.$nomeArquivo; //
    	}

        $palestrantes->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.palestrantes.adicionar'); 
    }

    public function editar($id)
    {
        $palestrantes = Palestrante::find($id);
        if(!$palestrantes){
            // return redirect()->route('admin.palestrantes.adicionar')->with('success','Não existe esse Palestrante cadastrado!! Deseja Cadastrar uma nov Palestrante');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.palestrantes.adicionar'); 
        }
        return view('admin.palestrantes.editar', compact('palestrantes', 'categorias'));
    }

    public function atualizar(PalestranteRequest $request, $id)
    {
        $palestrantes = Palestrante::find($id);
        
        $file = $request->file('_imagem');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/palestrantes/".$request->id;
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$palestrantes->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $request->merge(['imagem' => $diretorio.'/'.$nomeArquivo]);
        }
                
        $palestrantes ->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.palestrantes');             
    }

    public function deletar($id)
    {
        // $palestrantes = Palestrante::find($id); //busca o cliente 
        // $palestrantes->delete(); //deleta
        // \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        // return redirect()->route('admin.palestrantes');  

        if(Video::where('id_palestrante','=',$id)->count()){
            $msg = "Essa ação não é possível! Esse palestrante está relacionado aos vídeos: ";
            $videos = Video::where('id_palestrante','=',$id)->get();

            foreach ($videos as $video) {
                $msg .= $video->nome.", ";
            }

            \Session::flash('mensagem',['msg'=>$msg,'class'=>'red white-text']);
            return redirect()->route('admin.palestrantes');
        }

        Palestrante::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.palestrantes');     
    }


}


// public function deletar($id)
// {
//     if(Imovel::where('cidade_id','=',$id)->count()){
        
//         $msg = "Não é possível deletar essa cidade! Esses imóveis (";
//         $imoveis = Imovel::where('cidade_id','=',$id)->get();

//         foreach ($imoveis as $imovel) {
//             $msg .= "id:".$imovel->id." ";
//         }
//         $msg .= ") estão relacionados.";

//         \Session::flash('mensagem',['msg'=>$msg,'class'=>'red white-text']);
//         return redirect()->route('admin.cidades');
//     }

//     Cidade::find($id)->delete();
//     \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
//     return redirect()->route('admin.cidades');

// }