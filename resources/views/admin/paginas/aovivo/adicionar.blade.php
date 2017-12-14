@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Novo Ao Vivo</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{ Route('admin.paginas') }}" class="breadcrumb">Páginas</a>
                        <a href="{{route('admin.paginas.aovivo')}}" class="breadcrumb">Lista de Ao Vivo</a>
                        <a class="breadcrumb">Nova Ao Vivo</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.paginas.aovivo.salvar') }}" method="post" enctype="multipart/form-data" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                {{-- <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">   --}}
                @include('admin.paginas.aovivo._form')
                <button class="btn btn-success">Adicionar</button>
                <a href="{{ Route('admin.paginas.aovivo') }}" class="btn btn-default">Cancelar</a>
            </form>                    
        </div>
    </div>
@endsection
