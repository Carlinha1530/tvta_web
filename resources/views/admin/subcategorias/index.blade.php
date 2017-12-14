@extends('layouts.app')

@section('content')

    <h3 class="center">Lista de Sub-Categorias</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Lista de Sub-Categorias</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.subcategorias.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </nav>
    </div>

    <table id="example" class="striped highlight" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Por</th>
                <th>Publicado?</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subcategorias as $subcategoria)
                <tr>
                    <td>{{ $subcategoria->id }}</td>
                    <td>{{ $subcategoria->nome }}</td>
                    <th>{{ $subcategoria->categoria->nome }}</th>
                    <td>{{ $subcategoria->user->name }}</td>
                    <td>{{ $subcategoria->publicar }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($subcategoria->updated_at)) }}</td>
                    <td>
                        <a href="{{route('admin.subcategorias.editar', $subcategoria->id)}}"><i class="material-icons actions">mode_edit</i></a>
                        <a href="javascript:(confirm('Deseja remover essa Sub-Categoria?') ? window.location.href='{{route('admin.subcategorias.deletar',$subcategoria->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div align="center">
        <!-- Paginação -->
        {!! $subcategorias->links() !!}
    </div> --}}
        
@endsection
