@extends('layouts.app')

@section('content')
     <div class="container">
        <h3 class="center">Editar Livro</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{ route('admin.livros')}}" class="breadcrumb">Lista de Livro</a>
                        <a class="breadcrumb">Editar Livro</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.livros.atualizar', $livros->id) }}" method="post" enctype="multipart/form-data" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                <input type="hidden" name="_method" value="put">
                @include('admin.livros._form')
                <button class="btn btn-success">Atualizar</button>
                <a href="{{ Route('admin.livros') }}" class="btn btn-default">Cancelar</a>
            </form>                    
        </div>
    </div>
@endsection
