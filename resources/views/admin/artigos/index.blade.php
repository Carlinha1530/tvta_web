@extends('layouts.app')

@section('content')
    
    <h3 class="center">Lista de Artigos</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Lista de Artigos</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.artigos.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                <th>Autor</th>
                <th>Arquivo</th>
                <th>Imagem</th>
                <th>Por</th>
                <th>Publicado?</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artigos as $artigo)
                <tr>
                    <td>{{ $artigo->id }}</td>
                    <td>{{ $artigo->nome }}</td>
                    <td title="{{ $artigo->resumo }}">{{ str_limit($artigo->resumo, 30)  }}</td>
                    <td>{{ $artigo->autor }}</td>
                    <td>{{ $artigo->file }}</td>
                    <td><img width="100" src="{{asset($artigo->imagem)}}"></td>
                    <td>{{ $artigo->user->name }}</td>
                    <td>{{ $artigo->publicar }}</td> 
                    <td>{{ date('d/m/Y H:i:s', strtotime($artigo->updated_at)) }}</td>
                    <td>
                        <a href="{{Route('admin.artigos.editar', $artigo->id)}}"><i class="material-icons actions">mode_edit</i></a>
                        <a href="javascript:(confirm('Deseja remover esse artigo?') ? window.location.href='{{Route('admin.artigos.deletar',$artigo->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                        
                        {{-- @if(isset($artigo->file))
                        <a href="artigos/download/{{$artigo->file}}" style="color:#000;"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
                        @endif --}}

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div align="center">
        <!-- Paginação -->
        {!! $artigos->links() !!}
    </div> --}}

@endsection
