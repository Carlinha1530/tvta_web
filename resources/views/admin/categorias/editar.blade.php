@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Editar Categorias</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{route('admin.categorias')}}" class="breadcrumb">Lista de Categorias</a>
                        <a class="breadcrumb">Editar Categoria</a>
                    </div>
                </div>
            </nav>
        </div>

        <form action="{{ route('admin.categorias.atualizar', $categorias->id) }}" method="post" enctype="multipart/form-data" class="form_label">
            {{ csrf_field() }} <!-- criando o token para validação de dados -->
            <input type="hidden" name="_method" value="put">
             @include('admin.categorias._form')
            <button class="btn btn-success">Atualizar</button>
            <a href="{{ Route('admin.categorias') }}" class="btn btn-default">Cancelar</a>
        </form>                    
    </div>
@endsection
