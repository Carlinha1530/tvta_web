@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Novo Artigo</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{route('admin.artigos')}}" class="breadcrumb">Lista de Artigos</a>
                        <a class="breadcrumb">Novo Artigo</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.artigos.salvar') }}" id="formValidate" method="post" enctype="multipart/form-data" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                @include('admin.artigos._form')
                <button class="btn btn-success">Adicionar</button>
                <a href="{{ Route('admin.artigos') }}" class="btn btn-default">Cancelar</a>
            </form>                    
        </div>
    </div>
@endsection
