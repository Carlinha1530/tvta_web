@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="center">Novo Usuário</h3>
        <div class="row">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a href="{{route('admin.usuarios')}}" class="breadcrumb">Lista de Usuários</a>
                        <a class="breadcrumb">Novo Usuário</a>
                    </div>
                </div>
            </nav>
        </div><br>
        <div class="panel-body">
            <form action="{{ route('admin.usuarios.salvar') }}" method="post" enctype="multipart/form-data" class="form_label">
                {{ csrf_field() }} <!-- criando o token para validação de dados -->
                @include('admin.usuarios._form')
                <button class="btn btn-success">Adicionar</button>
            </form>                    
        </div>
    </div>
@endsection
