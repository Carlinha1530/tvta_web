@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Editar Palestrante</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{route('admin.palestrantes')}}" class="breadcrumb">Lista de Palestrantes</a>
                        <a class="breadcrumb">Editar Palestrante</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.palestrantes.atualizar', $palestrantes->id) }}" method="post" enctype="multipart/form-data" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                <input type="hidden" name="_method" value="put">
                @include('admin.palestrantes._form')
                <button class="btn btn-success">Atualizar</button>
                <a href="{{ Route('admin.palestrantes') }}" class="btn btn-default">Cancelar</a>
            </form>                    
        </div>
    </div>
@endsection
