<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\ImggaleriaRequest; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Imggaleria;// use App\Galeria;
use App\Galeria;// use App\Imovel;
use File;
use Storage;

class ImgGaleriaController extends Controller
{
    public function index($id)
    {
        $galerias = Galeria::find($id);
        // $registros = $galerias->ImgGaleria()->orderBy('ordem')->paginate(10);
        $registros = $galerias->ImgGaleria()->get();
        return view('admin.img_galerias.index',compact('registros','galerias'));
    }

    public function adicionar($id)
    {
        $galerias = Galeria::find($id);        
        return view('admin.img_galerias.adicionar',compact('galerias'));
    }

    // public function salvar(ImggaleriaRequest $request,$id)
    public function salvar(Request $request,$id)
    {
        $galerias = Galeria::find($id);

        $dados = $request->all();

        if($galerias->ImgGaleria()->count()){
            $img = $galerias->ImgGaleria()->orderBy('ordem','desc')->first();
            $ordemAtual = $img->ordem;
        }else{
            $ordemAtual = 0;
        }

        if($request->hasFile('imagens_large')){
            $arquivos = $request->file('imagens_large');
            foreach ($arquivos as $imagem) {
                $registro = new Imggaleria();

                $rand = rand(11111,99999);
                $diretorio = "img/galerias/img_large/{$galerias->id}";
                $ext = $imagem->guessClientExtension();
                $nomeArquivo = "img_".$rand.".".$ext;
                $imagem->move($diretorio,$nomeArquivo);
                $registro->id_galeria = $galerias->id;
                $registro->ordem = $ordemAtual + 1;
                $ordemAtual++;
                $registro->img_large = $diretorio.'/'.$nomeArquivo;
                $registro->save();
            }
        }

        // return redirect()->route('admin.img_galerias',$galerias->id)->with('success','Registro criado com sucesso!'); 
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.img_galerias',$galerias->id); 
    }

    public function editar($id)
    {
        $registro = Imggaleria::find($id);
        $galerias = $registro->Galeria;      

        return view('admin.img_galerias.editar',compact('registro','galerias'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Imggaleria::find($id);
        $dados = $request->all();

        $registro->nome = trim($dados['nome']);
        $registro->descricao = trim($dados['descricao']);
        $registro->ordem = trim($dados['ordem']);
        $registro->publicar= $dados['publicar'];

        $galerias = $registro->Galeria;
        

        $file = $request->file('img_large');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/galerias/img_large/{$galerias->id}";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->img_large = $diretorio.'/'.$nomeArquivo;
        }

        $registro ->update();

        // return redirect()->route('admin.img_galerias',$galerias->id)->with('success','Registro atualizado com sucesso!');
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.img_galerias',$galerias->id); 

    }

    public function deletar($id)
    {
        $galeria = Imggaleria::find($id);
        $galerias = $galeria->Galeria;
        // dd($galeria->img_large);
        $galeria->delete();
        // Storage::deleteDirectory($galeria->img_large);

        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.img_galerias',$galerias->id); 
    }

}
