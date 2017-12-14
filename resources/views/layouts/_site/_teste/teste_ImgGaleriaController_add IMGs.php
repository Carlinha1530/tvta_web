<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Imggaleria;// use App\Galeria;
use App\Galeria;// use App\Imovel;

class ImgGaleriaController extends Controller
{
    public function index($id)
    {
        $galerias = Galeria::find($id);
        $registros = $galerias->ImgGaleria()->orderBy('ordem')->get();
        return view('admin.img_galerias.index',compact('registros','galerias'));
    }

    public function adicionar($id)
    {
        
        $galerias = Galeria::find($id);        
        return view('admin.img_galerias.adicionar',compact('galerias'));
    }

    public function salvar(Request $request,$id)
    {
        
        $galerias = Galeria::find($id);

        $dados = $request->all();

        if($galerias->ImgGaleria()->count()){
            $galeria = $galerias->ImgGaleria()->orderBy('ordem','desc')->first();
            $ordemAtual = $galeria->ordem;
        }else{
            $ordemAtual = 0;
        }
        
        // if($request->hasFile('imagens_thumbs')){
        //     $arquivos = $request->file('imagens_thumbs');
        //     foreach ($arquivos as $imagem) {
        //         $registro = new Imggaleria();

        //         $rand = rand(11111,99999);
        //         $diretorio = "img/galerias/img_thumbs/".str_slug($galerias->nome,'_');
        //         $ext = $imagem->guessClientExtension();
        //         $nomeArquivo = "_img_".$rand.".".$ext;
        //         $imagem->move($diretorio,$nomeArquivo);
        //         // $registro->id_galeria = $galerias->id;
        //         // $registro->ordem = $ordemAtual + 1;
        //         // $ordemAtual++;
        //         $registro->img_thumbs = $diretorio.'/'.$nomeArquivo;
        //         // $registro->save();
                
        //     }
        // }

        if($request->hasFile('imagens_large') && ('imagens_thumbs')){
            $arquivos = $request->file('imagens_large');
            
            $registro = new Imggaleria();
            
            foreach ($arquivos as $imagem) {

                $rand = rand(11111,99999);
                $diretorio = "img/galerias/img_large/".str_slug($galerias->nome,'_');
                $ext = $imagem->guessClientExtension();
                $nomeArquivo = "_img_".$rand.".".$ext;
                $imagem->move($diretorio,$nomeArquivo);
                // $registro->id_galeria = $galerias->id;
                // $registro->ordem = $ordemAtual + 1;
                // $ordemAtual++;
                $registro->img_large = $diretorio.'/'.$nomeArquivo;
                
            }

            $arquivos = $request->file('imagens_thumbs');
            foreach ($arquivos as $imagem) {
                // $registro = new Imggaleria();

                $rand = rand(11111,99999);
                $diretorio = "img/galerias/img_thumbs/".str_slug($galerias->nome,'_');
                $ext = $imagem->guessClientExtension();
                $nomeArquivo = "_img_".$rand.".".$ext;
                $imagem->move($diretorio,$nomeArquivo);
                $registro->img_thumbs = $diretorio.'/'.$nomeArquivo;
                // $registro->save();
                
            }
            
            $registro->id_galeria = $galerias->id;
            $registro->ordem = $ordemAtual + 1;
            $ordemAtual++;
            $registro->save();
        }

        return redirect()->route('admin.img_galerias',$galerias->id)->with('success','Registro criado com sucesso!'); 
    }

    public function editar($id)
    {
        $registro = Imggaleria::find($id);
        $galerias = $registro->Galeria;      

        return view('admin.img_galerias.editar',compact('registro','galerias'));
    }

    // public function atualizar(Request $request, $id)
    // {
    //     $registro = Galeria::find($id);
    //     $dados = $request->all();

    //     $registro->titulo = $dados['titulo'];
    //     $registro->descricao = $dados['descricao'];
    //     $registro->ordem = $dados['ordem'];

    //     $imovel = $registro->imovel;
        

    //     $file = $request->file('imagem');
    //     if($file){
    //         $rand = rand(11111,99999);
    //         $diretorio = "img/imoveis/".str_slug($imovel->titulo,'_')."/";
    //         $ext = $file->guessClientExtension();
    //         $nomeArquivo = "_img_".$rand.".".$ext;
    //         $file->move($diretorio,$nomeArquivo);
    //         $registro->imagem = $diretorio.'/'.$nomeArquivo;
    //     }

        
    //     $registro ->update();

    //     \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);

    //     return redirect()->route('admin.galerias',$imovel->id);
    // }

    // public function deletar($id)
    // {
    //     $galeria = Galeria::find($id);
    //     $imovel = $galeria->imovel;

    //     $galeria->delete();

    //     \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);

    //     return redirect()->route('admin.galerias',$imovel->id);
    // }

}
