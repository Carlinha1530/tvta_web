@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Nova Página</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{ Route('admin.paginas') }}" class="breadcrumb">Páginas</a>
                        <a href="{{route('admin.paginas.contatos')}}" class="breadcrumb">Lista de Páginas</a>
                        <a class="breadcrumb">Nova Página</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.paginas.contatos.salvar') }}" method="post" enctype="multipart/form-data" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                {{-- <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">   --}}
                @include('admin.paginas.contatos._form')
                <button class="btn btn-success">Adicionar</button>
                <a href="{{ Route('admin.paginas.contatos') }}" class="btn btn-default">Cancelar</a>
            </form>                    
        </div>
    </div>
@endsection
