@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Editar Vídeo </h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{route('admin.videos')}}" class="breadcrumb">Lista de Vídeos</a>
                        <a class="breadcrumb">Editar Vídeo </a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.videos.atualizar', $videos->id) }}" method="post" enctype="multipart/form-data" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                <input type="hidden" name="_method" value="put"><!--input para mudar o methodo para put-->
                @include('admin.videos._form')
                <button class="btn btn-success">Atualizar</button>
                <a href="{{ Route('admin.videos') }}" class="btn btn-default">Cancelar</a>
            </form>                    
        </div>
    </div>
@endsection
