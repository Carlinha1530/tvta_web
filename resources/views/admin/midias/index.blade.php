@extends('layouts.app')

@section('content')

        <h3 class="center">Lista de Mídias</h3>
        <div class="row">
            <nav class="nav-extended">
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Lista de Mídias</a>
                    </div>
                </div>
               
                <div class="nav-content">
                    <a href="{{ Route('admin.midias.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                    <th>Miniatura</th>
                    <th>Url</th>
                    <th>Por</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($midias as $midia)
                    <tr>
                        <td>{{ $midia->id }}</td>
                        <td>{{ $midia->nome }}</td>
                        <td><img width="100" src="{{asset($midia->file)}}"></td>
                        <td>{{ asset($midia->file) }}</td>
                        <td>{{ $midia->user->name }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($midia->updated_at)) }}</td>
                        <td>
                            <a href="{{route('admin.midias.editar', $midia->id)}}"><i class="material-icons actions">mode_edit</i></a>
                            <a href="javascript:(confirm('Deseja remover esse Registro?') ? window.location.href='{{route('admin.midias.deletar',$midia->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
