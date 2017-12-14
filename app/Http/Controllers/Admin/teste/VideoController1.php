<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest; 
use App\Http\Requests\VideoCategoriaRequest; 
use App\Http\Requests\VideoSubCategoriaRequest; 
use App\Http\Controllers\Controller;
use App\Video;
use App\Categoria;
use App\Subcategoria;
use App\Palestrante;
use Auth;

class VideoController extends Controller
{
    public function index()
    {
        // $videos = Video::orderBy('id', 'DESC')->paginate(10);
        $videos = Video::all();
        return view('admin.videos.index', compact('videos', 'categorias')); 
    }

    public function adicionar()
    {
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::orderBy('nome')->get();
        $palestrantes = Palestrante::orderBy('nome')->get();
        // $palestrantes = Palestrante::where('publicar','=','sim')->get();
        // $palestrantes = Palestrante::orderBy('nome', 'asc')->get();
        // $palestrantes = Palestrante::all();

        return view('admin.videos.adicionar', compact('categorias','subcategorias','palestrantes','videos'));
    } 

    public function salvar(VideoRequest $request)
    {

        $videos = Video::create($request->all());

        $linkV = trim($videos->link_video);
        preg_match_all("@\/\/(.*?).com@", $linkV, $output_array);
        $videoType = $output_array[1][0];
        // dd($videoType);
        
        if ($videoType=="www.youtube") {
            $linkV = trim($videos->link_video);
            preg_match_all("/v\=(.*?)$/", $linkV, $output_array);
            $videoId = $output_array[1][0];
            $url = "https://www.youtube.com/embed/".$videoId."?feature=oembed&amp;autoplay=1";

            $videos->link_video = $url;
            $videos->tipo= 'youtube';

        }elseif ($videoType=="vimeo") {
            $linkV = trim($videos->link_video);
            preg_match_all("@vimeo.com\/(.*?)$@", $linkV, $output_array);
            $videoId = $output_array[1][0];
            $url = "https://player.vimeo.com/video/".$videoId."?feature=oembed&amp;autoplay=1";

            $videos->link_video = $url;
            $videos->tipo= 'vimeo';
        }


        $file = $request->file('_imagem');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/videos/{$videos->id}";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$videos->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $videos->imagem = $diretorio.'/'.$nomeArquivo; //
        }
        
        // dd($videos);
        $videos->save();

        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.videos.adicionar'); 
    }

    public function editar($id)
    {
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        $palestrantes = Palestrante::orderBy('nome')->get();
        // $palestrantes = Palestrante::where('publicar','=','sim')->get();
        // $palestrantes = Palestrante::orderBy('nome', 'asc')->get();
        // $palestrantes = Palestrante::all();

        $videos = Video::find($id);
        if(!$videos){

            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.videos.adicionar'); 
            // return redirect()->route('admin.videos.adicionar')->with('success','Não existe esse Vídeo cadastrado!! Deseja Cadastrar uma nov Vídeo');
        }
        return view('admin.videos.editar', compact('videos', 'categorias', 'subcategorias', 'palestrantes'));
    }

    public function atualizar(Video $request, $id)
    {
        $videos = Video::find($id);
        $dados = $request->all();
         // dd($dados);
        $videos->id_usuario = Auth::user()->id;
        $videos->nome = trim($dados['nome']);
        $videos->slug = str_slug($videos->nome);
        $videos->descricao = trim($dados['descricao']);
        $videos->doacao = $dados['doacao'];
        $videos->id_palestrante= $dados['id_palestrante'];
        $videos->resumo = trim($dados['resumo']);
        $videos->publicar= $dados['publicar'];

        // $videos = Video::find($id);

        $linkV = trim($videos->link_video);
        preg_match_all("@\/\/(.*?).com@", $linkV, $output_array);
        $videoType = $output_array[1][0];
        
        if ($videoType=="www.youtube") {
            $linkV = trim($videos->link_video);
            preg_match_all("/v\=(.*?)$/", $linkV, $output_array);
            $videoId = $output_array[1][0];
            $url = "https://www.youtube.com/embed/".$videoId."?feature=oembed&amp;autoplay=1";

            $videos->link_video = $url;
            $videos->tipo= 'youtube';
            
        }elseif ($videoType=="vimeo") {
            $linkV = trim($videos->link_video);
            preg_match_all("@vimeo.com\/(.*?)$@", $linkV, $output_array);
            $videoId = $output_array[1][0];
            $url = "https://player.vimeo.com/video/".$videoId."?feature=oembed&amp;autoplay=1";

            $videos->link_video = $url;
            $videos->tipo= 'vimeo';
        }

       

        $file = $request->file('_imagem');
        if($file){
            // $rand = rand(11111,99999);
            $diretorio = "img/videos/".$request->id;
            $ext = $file->guessClientExtension();
            $nomeArquivo = "img_".$videos->id.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $request->merge(['imagem' => $diretorio.'/'.$nomeArquivo]);
            // $videos->imagem = $diretorio.'/'.$nomeArquivo;
        }
        
        // dd($request->all());
        $videos->update();
        // $videos->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.videos'); 
    }

    public function deletar($id)
    {
        $videos = Video::find($id); //busca 
        $videos->delete(); //deleta

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.videos'); 
        // return redirect()->route('admin.videos')->with('success','Vídeo Deletado com Sucesso!!');            
    }

    public function categorias($id)
    {
        $videos = Video::find($id);
        // $categorias = Categoria::all();
        $categorias = Categoria::where('publicar','=','sim')->get();
        return view('admin.videos.categorias',compact('videos','categorias'));
    }

    public function salvarCategorias(VideoCategoriaRequest $request,$id)
    // public function salvarCategorias(Request $request,$id)
    {
        $videos = Video::find($id);
        $dados = $request->all();
        $categorias = Categoria::find($dados['categoria_id']);
        $videos->adicionaCategoria($categorias);
        return redirect()->back();
    }

    public function removerCategorias($id,$categoria_id)
    {        
        $videos = Video::find($id);        
        $categorias = Categoria::find($categoria_id);
        $videos->removeCategoria($categorias);
        return redirect()->back();
    }

    public function subCategorias($id)
    {
        $videos = Video::find($id);
        // $subcategorias = Subcategoria::all();
        $subcategorias = Subcategoria::where('publicar','=','sim')->get();
        return view('admin.videos.subcategorias',compact('videos','subcategorias'));
    }

    public function salvarSubCategorias(VideoSubCategoriaRequest $request,$id)
    // public function salvarSubCategorias(Request $request,$id)
    {
        $videos = Video::find($id);
        $dados = $request->all();
        $subcategorias = Subcategoria::find($dados['subcategoria_id']);
        $videos->adicionaSubCategoria($subcategorias);
        return redirect()->back();
    }

    public function removerSubCategorias($id, $subcategoria_id)
    {        
        $videos = Video::find($id);        
        $subcategorias = Subcategoria::find($subcategoria_id);
        $videos->removeSubCategoria($subcategorias);
        return redirect()->back();
    }
    
}


    // public function ManyToMany()
    // {
    //     $Categoria = Categoria::where('nome', 'Daphney Mraz')->first();
    //     echo "<b>Categoria: {$Categoria->nome} </b><br>";

    //     $videos = $Categoria->video;
    //     echo "<b>Videos: </b>";
    //     foreach ($videos as $video) {
    //          echo "<b> {$video->nome}, </b>";
    //     }
    // }

    // public function ManyToManyInverse()
    // {
    //     $videos = Video::where('nome', 'Teste1')->first();
    //     echo "<b>Video: {$videos->nome} </b><br>";

    //     $categorias = $videos->categoria;
    //     echo "<b>Categorias: </b>";
    //     foreach ($categorias as $categoria) {
    //          echo "<b> {$categoria->nome}, </b>";
    //     }
    // }

    // public function ManyToManyInsert()
    // {
    //     $dataform = [1,3];

    //     $videos = Video::find(1);
    //     echo "<b>Video: {$videos->nome} </b><br>";

    //     //$videos->categoria()->attach($dataform);cadastra os msms cadastros ao ser atualizado a pagina
    //     //$videos->categoria()->detach(1);//deleta os cadastro q vc passar
    //     $videos->categoria()->sync($dataform);//sincroniza

    //     $categorias = $videos->categoria;
    //     echo "<b>Categorias: </b>";
    //     foreach ($categorias as $categoria) {
    //          echo "<b> {$categoria->nome}, </b>";
    //     }
    // }

