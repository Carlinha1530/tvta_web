<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Contracts\Filesystem\Factory as Filesystem;
use Storage;
use App\Http\Requests\CategoriaRequest; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use Auth;

// use Illuminate\Support\Facades\Storage;
// use Yajra\DataTables\DataTables;
// use Datatables;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        // $str = $request->get('str', "");
        // if ($str) {
        //     $categorias = Categoria::where('nome', 'like', '%'. $str .'%')->
        //     orWhere('descricao', 'like', '%'. $str .'%')->paginate(10);
        // }else{
        //     $categorias = Categoria::orderBy('id', 'DESC')->paginate(10);
        // }

        // $categorias = Categoria::orderBy('id', 'DESC')->paginate(10);
        $categorias = Categoria::get();
    	return view('admin.categorias.index', compact('categorias', 'str'));
    }

    public function adicionar()
    {
        return view('admin.categorias.adicionar');
    } 

    public function salvar(CategoriaRequest $request)
    {

        $categoria = Categoria::create($request->all());

        $file = $request->file('_imagem');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/categorias/{$categoria->id}";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$categoria->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $categoria->imagem = $diretorio.'/'.$nomeArquivo; // 
            // $request->merge(['imagem' => $diretorio.'/'.$nomeArquivo]);
        }
        
        $categoria->save();

        // salvando no S3 AWS
        // if ($request->hasFile('imagem')) {
        //     $nomeArquivo = $request->imagem->storePublicly('/categorias/'.$categorias->nome, 's3'); // método mais fácil, vai gerar um nome único aleatório automaticamente (ex. 7d09cbf4c1306fc196ac2a59722e05c8.jpg)
        //     $categorias->imagem = Storage::disk('s3')->url($nomeArquivo); // vai gerar a URL pública do arquivo (ex. http://s3-sa-east-1.amazonaws.com/.../7d09cbf4c1306fc196a...)
        // }
 
        \Session::flash('mensagem',['msg'=>'Categoria Adicionado com Sucesso!!','class'=>'green white-text']);
        return redirect()->route('admin.categorias.adicionar');
    }

    public function editar($id)
    {
        $categorias = Categoria::find($id);
        if(!$categorias){
            // return redirect()->route('admin.categorias.adicionar')->with('success','Não existe essa Categoria cadastrado!! Deseja Cadastrar uma nova Categoria');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.categorias.adicionar'); 
        }

        return view('admin.categorias.editar', compact('categorias'));
    }

    public function atualizar(CategoriaRequest $request, $id)
    {
        
        $categoria = Categoria::find($id);
       
        if ($file = $request->file('_imagem')) {
            // $rand = rand(11111,99999);
            $diretorio = "img/categorias/".$request->id;
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$categoria->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $request->merge(['imagem' => $diretorio.'/'.$nomeArquivo]);
        }

        // deleta do S3 e depois inseri com os dados novos
        // $url =  $categorias->imagem;
        // preg_match_all("@terceiroanjo.com\/(.*?)$@", $url, $output_array);
        // Storage::disk('s3')->delete($output_array[1]);
        
        // Atualizando no S3 com os dados novos
        // if ($request->hasFile('imagem')) {
        //     $nomeArquivo = $request->imagem->storePublicly('/categorias/'.$categorias->nome, 's3'); // método mais fácil, vai gerar um nome único aleatório automaticamente (ex. 7d09cbf4c1306fc196ac2a59722e05c8.jpg)
        //     $categorias->imagem = Storage::disk('s3')->url($nomeArquivo); // vai gerar a URL pública do arquivo (ex. http://s3-sa-east-1.amazonaws.com/.../7d09cbf4c1306fc196a...)
        // }

        $categoria->update($request->all());
        
        \Session::flash('mensagem',['msg'=>'Categoria atualizado com Sucesso!!','class'=>'green white-text']);
        return redirect()->route('admin.categorias');
    }

    // public function deletar($id)
    public function deletar($id)
    {
        $categorias = Categoria::find($id); //busca o cliente 
        $categorias->delete(); 

        // delete com S3
        // $url =  $categorias->imagem;
        // preg_match_all("@terceiroanjo.com\/(.*?)$@", $url, $output_array);
        // Storage::disk('s3')->delete($output_array[1]);

        \Session::flash('mensagem',['msg'=>'Categoria Deletado com Sucesso!!','class'=>'green white-text']);
        return redirect()->route('admin.categorias');
    }
     
}

