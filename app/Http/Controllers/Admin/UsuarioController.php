<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest; 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
    	$dados = $request->all();

    	if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){
    		// return redirect()->route('admin.principal')->with('success','Login realizado com sucesso! Seja Bem vindo');
            \Session::flash('mensagem',['msg'=>'Login realizado com sucesso!','class'=>'green white-text']);
            return redirect()->route('admin.principal'); 
    	}
    	// return redirect()->route('admin.login')->with('error','Erro! Confira seus dados.');
        \Session::flash('mensagem',['msg'=>'Erro! Confira seus dados.','class'=>'red white-text']);
        return redirect()->route('admin.login');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function index()
    {
        //$usuarios = User::orderBy('name')->paginate(10);
        // $usuarios = User::paginate(10);
        $usuarios = User::all();
        return view('admin.usuarios.index',compact('usuarios'));
    }

    public function adicionar()
    {
        return view('admin.usuarios.adicionar');
    }

    public function salvar(UserRequest $request)
    // public function salvar(Request $request)
    {
        $dados = $request->all();

        $usuario = new User();
        $usuario->name = trim($dados['name']);
        $usuario->email = trim($dados['email']);
        $usuario->password = bcrypt($dados['password']);
        $usuario->profissao = trim($dados['profissao']);
        $usuario->descricao = trim($dados['descricao']);
        $usuario->resumo = trim($dados['resumo']);
        $usuario->publicar= $dados['publicar'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/usuario/".str_slug($dados['name'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $usuario->imagem = $diretorio.'/'.$nomeArquivo; //
        }
        $usuario->save();
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.usuarios'); 
        // return redirect()->route('admin.usuarios')->with('success','Registro criado com sucesso!');
    }
    
    public function editar($id)
    {
        $usuario = User::find($id);
        if(!$usuario){
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return view('admin.usuarios.adicionar', compact('usuario'));
        }
       return view('admin.usuarios.editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        $usuario = User::find($id);

        $usuario->name = trim($dados['name']);
        $usuario->email = trim($dados['email']);

        // if(isset($dados['password']) && strlen($dados['password']) > 5 ){
        //     $dados['password'] = bcrypt($dados['password']);
        // }else{
        //     unset($dados['password']);
        // }

        $usuario->profissao = trim($dados['profissao']);
        $usuario->descricao = trim($dados['descricao']);
        $usuario->resumo = trim($dados['resumo']);
        $usuario->publicar= $dados['publicar'];

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/usuario/".str_slug($dados['name'],'_');
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $usuario->imagem = $diretorio.'/'.$nomeArquivo;
        }

        $usuario->update();
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.usuarios'); 
        // return redirect()->route('admin.usuarios')->with('success','Registro atualizado com sucesso!');
    }

    public function deletar($id)
    {
        User::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.usuarios'); 
        // return redirect()->route('admin.usuarios')->with('success','Registro deletado com sucesso!');
    }

}
