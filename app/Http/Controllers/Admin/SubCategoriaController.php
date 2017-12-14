<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SubcategoriaRequest; 
use App\Http\Controllers\Controller;
use App\Subcategoria;
use App\Categoria;
use Auth;

class SubCategoriaController extends Controller
{
    public function index()
    {
        // $subcategorias = Subcategoria::orderBy('id', 'DESC')->paginate(10);//aki define a qtd de cliente por pagina
        $subcategorias = SubCategoria::all();
    	return view('admin.subcategorias.index', compact('subcategorias'));
    }

    public function adicionar()
    {
        // $categorias = Categoria::all();
        $categorias = Categoria::where('publicar','=','sim')->get();
        return view('admin.subcategorias.adicionar', compact('categorias','subcategorias'));
    } 

    public function salvar(SubcategoriaRequest $request)
    {
        $subcategorias = Subcategoria::create($request->all());
       
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.subcategorias.adicionar'); 
    }

    public function editar($id)
    {
        // $categorias = Categoria::all();
        $categorias = Categoria::where('publicar','=','sim')->get();

        $subcategorias = Subcategoria::find($id);
        if(!$categorias){
            // return redirect()->route('admin.subcategorias.adicionar')->with('success','Não existe essa Sub-Categoria cadastrado!! Deseja Cadastrar uma nova Categoria');
            \Session::flash('mensagem',['msg'=>'Esse registro não existe, deseja criar um novo registro?','class'=>'red white-text']);
            return redirect()->route('admin.subcategorias.adicionar'); 
        }

        return view('admin.subcategorias.editar', compact('subcategorias', 'categorias'));
    }

    public function atualizar(SubcategoriaRequest $request, $id)
    {
        $subcategorias = Subcategoria::find($id);
        
        $subcategorias->update($request->all());
        // Subcategoria::find($id)->update($request->all());

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.subcategorias'); 
    }

    public function deletar($id)
    {
        $subcategorias = Subcategoria::find($id);
        $subcategorias->delete();
        // return redirect()->route('admin.subcategorias')->with('success','Sub-Categoria Removido com Sucesso!!');    
        \Session::flash('mensagem',['msg'=>'Registro removido com sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.subcategorias');         
    }
}
