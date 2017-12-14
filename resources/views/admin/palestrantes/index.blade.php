@extends('layouts.app')

@section('content')

        <h3 class="center">Lista de Palestrantes</h3>
        <div class="row">
            <nav class="nav-extended">
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Lista de Palestrantes</a>
                    </div>
                </div>
               
                <div class="nav-content">
                    <a href="{{ Route('admin.palestrantes.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                    <th>Ocupação</th>
                    <th>Resumo</th>
                    <th>Imagem</th>
                    <th>Por</th>
                    <th>Tipo</th>
                    <th>Publicado?</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($palestrantes as $palestrante)
                    <tr>
                        <td>{{ $palestrante->id }}</td>
                        <td>{{ $palestrante->nome }}</td>
                        <td>{{ $palestrante->profissao }}</td>
                        <td title="{{ $palestrante->resumo }}">{{ str_limit($palestrante->resumo, 30) }}</td>
                        <td><img width="100" src="{{asset($palestrante->imagem)}}"></td>
                        <td>{{ $palestrante->user->name }}</td>
                        <td>{{ $palestrante->tipo }}</td>
                        <td>{{ $palestrante->publicar }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($palestrante->updated_at)) }}</td>
                        <td>
                            <a href="{{route('admin.palestrantes.editar', $palestrante->id)}}"><i class="material-icons actions">mode_edit</i></a>
                            <a href="javascript:(confirm('Deseja remover esse Palestrante?') ? window.location.href='{{route('admin.palestrantes.deletar',$palestrante->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div align="center">
            <!-- Paginação -->
            {!! $palestrantes->links() !!}
        </div> --}}
    </div>
@endsection
