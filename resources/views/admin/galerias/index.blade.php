@extends('layouts.app')

@section('content')
    
    <h3 class="center">Lista de Galerias</h3>
    <div class="row">
        <nav class="nav-extended">

            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Lista de Galerias</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.galerias.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                <th>Resumo</th>
                <th>Imagem</th>
                <th>Por</th>
                <th>Publicado?</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galerias as $galeria)
                <tr>
                    <td>{{ $galeria->id }}</td>
                    <td>{{ $galeria->nome }}</td>
                    <td>{{ $galeria->resumo }}</td>
                    <td><img width="100" src="{{asset($galeria->img)}}"></td>
                    <td>{{ $galeria->user->name }}</td>
                    <td>{{ $galeria->publicar }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($galeria->updated_at)) }}</td>
                    <td>
                        <a href="{{route('admin.galerias.editar', $galeria->id)}}"><i class="material-icons actions">mode_edit</i></a>

                        <a href="javascript:(confirm('Deseja remover essa Galeria?') ? window.location.href='{{route('admin.galerias.deletar',$galeria->id)}}' : false)"><i class="material-icons actions">delete</i></a>

                        <a href="{{route('admin.img_galerias', $galeria->id)}}" style="color:#222"><i class="material-icons actions">perm_media</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div align="center">
        <!-- Paginação -->
        {!! $galerias->links() !!}
    </div> --}}
@endsection
