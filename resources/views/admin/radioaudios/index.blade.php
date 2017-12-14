@extends('layouts.app')

@section('content')

        <h3 class="center">Lista de Áudios da Rádio</h3>
        <div class="row">
            <nav class="nav-extended">
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Lista de Áudios da Rádio</a>
                    </div>
                </div>
               
                <div class="nav-content">
                    <a href="{{ Route('admin.radioaudios.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                    <th>Áudio</th>
                    <th>Por</th>
                    <th>Publicado?</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($radioaudios as $audio)
                    <tr>
                        <td>{{ $audio->id }}</td>
                        <td>{{ $audio->nome }}</td>
                        <td title="{{ $audio->descricao }}">{{ str_limit($audio->descricao, 30) }}</td>
                        <td>{{ $audio->audio}}</td>
                        <td>{{ $audio->user->name }}</td>
                        <td>{{ $audio->publicar }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($audio->updated_at)) }}</td>
                        <td>
                            <a href="{{route('admin.radioaudios.editar', $audio->id)}}"><i class="material-icons actions">mode_edit</i></a>
                            <a href="javascript:(confirm('Deseja remover esse audio?') ? window.location.href='{{route('admin.radioaudios.deletar',$audio->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div align="center">
            <!-- Paginação -->
            {!! $radioaudios->links() !!}
        </div> --}}
    </div>
@endsection
