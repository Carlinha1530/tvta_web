@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Nova Sub-Categoria</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{route('admin.subcategorias')}}" class="breadcrumb">Sub-Categorias</a>
                        <a class="breadcrumb">Nova Sub-Categoria</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.subcategorias.salvar') }}" method="post" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                {{-- <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}"> --}}
                @include('admin.subcategorias._form')
                <button class="btn btn-success">Adicionar</button>
                <a href="{{ Route('admin.subcategorias') }}" class="btn btn-default">Cancelar</a>
            </form>                    
        </div>
    </div>
@endsection
