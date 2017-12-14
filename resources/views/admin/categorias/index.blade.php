@extends('layouts.app')

@section('content')
        
    <h3 class="center">Lista de Categorias</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Lista de Categorias</a>
                </div>
                {{-- <a href="{{ Route('admin.categorias.adicionar') }}" class="btn-floating btn-large waves-effect add black"><i class="material-icons">add</i></a> --}}
            </div>
            <div class="nav-content">
              <a href="{{ Route('admin.categorias.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
                <i class="material-icons">add</i>
              </a>
            </div>
        </nav>
    </div>

    {{-- @include('layouts._admin._search') --}}

    <table id="example" class="striped highlight" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Por</th>
            <th>Publicado?</th>
            <th>Data</th>
            <th>Ação</th>
            </tr>
        </thead>
        <tbody> 
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td>{{ $categoria->descricao }}</td>
                    <td><img width="100" src="{{asset($categoria->imagem)}}"></td>
                    <td>{{ $categoria->user->name }}</td>
                    <td>{{ $categoria->publicar }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($categoria->updated_at)) }}</td>
                    <td>
                        <a href="{{route('admin.categorias.editar', $categoria->id)}}"><i class="material-icons actions">mode_edit</i></a>
                        <a href="javascript:(confirm('Deseja remover essa Categoria?') ? window.location.href='{{route('admin.categorias.deletar',$categoria->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
    
    {{-- <div  align="center">
        {!! $categorias->links() !!}
    </div> --}}
    
@endsection
