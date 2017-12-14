@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Adicionar Imagens</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{ Route('admin.galerias') }}" class="breadcrumb">Lista de Galerias</a>
                        <a href="{{ Route('admin.img_galerias' ,$galerias->id) }}" class="breadcrumb">Galeria {{$galerias->nome}}</a>
                        <a class="breadcrumb">Adicionar Imagens</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.img_galerias.salvar' ,$galerias->id) }}" method="post" enctype="multipart/form-data" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                @include('admin.img_galerias._form')
                <button class="btn btn-success">Adicionar</button>
                <a href="{{ Route('admin.img_galerias' ,$galerias->id) }}" class="btn btn-default">Cancelar</a>
            </form>                    
        </div>
    </div>
@endsection
