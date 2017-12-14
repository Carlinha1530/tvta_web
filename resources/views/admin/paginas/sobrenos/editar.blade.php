@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Editar Sobre-Nós</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{ Route('admin.paginas') }}" class="breadcrumb">Páginas</a>
                        <a href="{{route('admin.paginas.sobrenos')}}" class="breadcrumb">Lista de Sobre-Nós</a>
                        <a class="breadcrumb">Editar Sobre-Nós</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.paginas.sobrenos.atualizar',$sobrenos->id) }}" method="post" enctype="multipart/form-data" class="form_label">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                @include('admin.paginas.sobrenos._form')
                <button class="btn btn-success">Atualizar</button>
                <a href="{{ Route('admin.paginas.sobrenos') }}" class="btn btn-default">Cancelar</a>
            </form>              
        </div>
    </div>
@endsection
