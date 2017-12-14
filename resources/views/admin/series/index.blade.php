@extends('layouts.app')

@section('content')
    <h3 class="center">Lista de Séries</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Lista de Séries</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.series.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
            @foreach($series as $serie)
                <tr>
                    <td>{{ $serie->id }}</td>
                    <td>{{ $serie->nome }}</td>
                    <td title="{{ $serie->resumo }}">{{ str_limit($serie->resumo, 30) }}</td>
                    <td><img width="100" src="{{asset($serie->imagem)}}"></td>
                    <td>{{ $serie->user->name }}</td>
                    <td>{{ $serie->publicar }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($serie->updated_at)) }}</td>
                    <td>
                        <a href="{{route('admin.series.editar', $serie->id)}}" title="Editar Serie">
                            <i class="material-icons actions">mode_edit</i>
                        </a>
                        <a href="javascript:(confirm('Deseja remover essa Serie?') ? window.location.href='{{route('admin.series.deletar',$serie->id)}}' : false)" title="Remover Serie">
                            <i class="material-icons actions">delete</i>
                        </a>
                        <a href="{{route('admin.series.videos', $serie->id)}}" style="color:#222" title="Escolher Videos">
                            <i class="material-icons actions">videocam</i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div align="center">
        <!-- Paginação -->
        {!! $series->links() !!}
    </div> --}}
@endsection
