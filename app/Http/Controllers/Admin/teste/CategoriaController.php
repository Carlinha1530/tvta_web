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
        // $request->merge(['slug' => str_slug($request->nome)]); 
        // $request->merge(['id_usuario' => Auth::user()->id]); 

        // $dados = $request->all();
        // $categorias = new Categoria();
        // // $categorias->id_usuario = $dados['id_usuario'];
        // $categorias->nome = trim($dados['nome']);
        // $categorias->descricao = trim($dados['descricao']);
        // $categorias->publicar= $dados['publicar'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/categorias/".str_slug($request->merge['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $request->merge(['imagem' => $diretorio.'/'.$nomeArquivo]); //
        }
        
        // salvando no S3 AWS
        // if ($request->hasFile('imagem')) {
        //     $nomeArquivo = $request->imagem->storePublicly('/categorias/'.$categorias->nome, 's3'); // método mais fácil, vai gerar um nome único aleatório automaticamente (ex. 7d09cbf4c1306fc196ac2a59722e05c8.jpg)
        //     $categorias->imagem = Storage::disk('s3')->url($nomeArquivo); // vai gerar a URL pública do arquivo (ex. http://s3-sa-east-1.amazonaws.com/.../7d09cbf4c1306fc196a...)
        // }
 
        Categoria::create($request->all());

        \Session::flash('mensagem',['msg'=>'Categoria Adicionado com Sucesso!!','class'=>'green white-text']);
        return redirect()->route('admin.categorias.adicionar');
        // return redirect()->route('admin.categorias.adicionar')->with('success','Categoria Adicionado com Sucesso!!');            
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

    public function atualizar(Request $request, $id)
    {
        
        $categoria = Categoria::find($id);
        // $request->merge([
        //     'slug' => str_slug($request->nome),
        //     'id_usuario' => Auth::user()->id,
        //     'nome' => trim($request->nome),
        //     'descricao' => trim($request->descricao),
        //     'publicar' => trim($request->publicar),
        // ]);
        if ($file = $request->file('imagem')) {
            $rand = rand(11111,99999);
            $diretorio = "img/categorias/".str_slug($request->merge['nome'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            // $categorias->imagem = $diretorio.'/'.$nomeArquivo;
            // $categorias->imagem = $diretorio.'/'.$nomeArquivo por
            $request->merge(['imagem' => $diretorio.'/'.$nomeArquivo]);
        }
        
        $categoria->update($request->all());


        

        // $categorias = Categoria::find($id);
        // $request->merge(['slug' => str_slug($request->nome)]); 
        // $request->merge(['id_usuario' => Auth::user()->id]);

        // $dados = $request->all();
        // $categorias->nome = trim($dados['nome']);
        // $categorias->descricao = trim($dados['descricao']);
        // $categorias->publicar= $dados['publicar'];

        // $file = $request->file('imagem');
        // if($file){
        //     $rand = rand(11111,99999);
        //     $diretorio = "img/categorias/".str_slug($dados['nome'],'_');
        //     $ext = $file->guessClientExtension();
        //     $nomeArquivo = "_img_".$rand.".".$ext;
        //     $file->move($diretorio,$nomeArquivo);
        //     $categorias->imagem = $diretorio.'/'.$nomeArquivo;
        // }
        
        // deleta do S3 e depois inseri com os dados novos
        // $url =  $categorias->imagem;
        // preg_match_all("@terceiroanjo.com\/(.*?)$@", $url, $output_array);
        // Storage::disk('s3')->delete($output_array[1]);
        
        // Atualizando no S3 com os dados novos
        // if ($request->hasFile('imagem')) {
        //     $nomeArquivo = $request->imagem->storePublicly('/categorias/'.$categorias->nome, 's3'); // método mais fácil, vai gerar um nome único aleatório automaticamente (ex. 7d09cbf4c1306fc196ac2a59722e05c8.jpg)
        //     $categorias->imagem = Storage::disk('s3')->url($nomeArquivo); // vai gerar a URL pública do arquivo (ex. http://s3-sa-east-1.amazonaws.com/.../7d09cbf4c1306fc196a...)
        // }

        // Categoria::save($request->all()); 
        // $categorias->save();
        
        \Session::flash('mensagem',['msg'=>'Categoria atualizado com Sucesso!!','class'=>'green white-text']);
        return redirect()->route('admin.categorias');
        // return redirect()->route('admin.categorias')->with('success','Categoria atualizado com Sucesso!!');   
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

// if ($videoType=="vimeo") {
//     $linkV = trim($videos[0]->link_video);
//     preg_match_all("@vimeo.com\/(.*?)$@", $linkV, $output_array);
//     $videoId = $output_array[1][0];
//     $url = "https://player.vimeo.com/video/".$videoId."?feature=oembed&amp;autoplay=1";

// }

    // return redirect()->route('admin.categorias')->with('success','Categoria Deletado com Sucesso!!');            
    // $categorias = Storage::disk('s3')->delete($categorias->imagem); 
    // $categorias->imagem = Storage::disk('s3')->delete($categorias->imagem);
    // $categorias->imagem = Storage::delete();
    // dd($categorias);
    
    
