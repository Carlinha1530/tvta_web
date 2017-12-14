@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Editar Sub-Categoria</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{route('admin.subcategorias')}}" class="breadcrumb">Sub-Categorias</a>
                        <a class="breadcrumb">Editar Sub-Categoria</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.subcategorias.atualizar', $subcategorias->id) }}" method="post" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                {{-- <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}"> --}}
                <input type="hidden" name="_method" value="put">
                @include('admin.subcategorias._form')
                <button class="btn btn-success">Atualizar</button>
            </form>                    
        </div>
    </div>
@endsection
