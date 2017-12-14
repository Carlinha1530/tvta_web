@extends('layouts.app')

@section('content')
    <h3 class="center">Imagens da Galeria {{ $galerias->nome }}</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ Route('admin.principal') }}" class="breadcrumb">Início</a>
                    <a href="{{ Route('admin.galerias') }}" class="breadcrumb">Lista de Galerias</a>
                    <a class="breadcrumb">Imagens da Galeria {{ $galerias->nome }}</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.img_galerias.adicionar',$galerias->id) }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                <th>Descrição</th>
                <th>Imagem large</th>
                <th>Ordem</th>
                <th>Publicado?</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->nome }}</td>
                    <td>{{ $registro->descricao }}</td>
                    <td><img width="100" src="{{asset($registro->img_large)}}"></td>
                    <td>{{ $registro->ordem }}</td>
                    <td>{{ $registro->publicar }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($registro->updated_at)) }}</td>
                    <td>
                        <a href="{{route('admin.img_galerias.editar', $registro->id)}}"><i class="material-icons actions">mode_edit</i></a>
                        <a href="javascript:(confirm('Deseja remover essa Imagem?') ? window.location.href='{{route('admin.img_galerias.deletar',$registro->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div align="center">
    <!-- Paginação -->
        {!! $registros->links() !!}
    </div> --}}
@endsection
