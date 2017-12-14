@extends('layouts.app')

@section('content')

    <h3 class="center">Lista de Contatos</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a href="{{ Route('admin.paginas') }}" class="breadcrumb">Páginas</a>
                    <a class="breadcrumb">Lista de Contatos</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.paginas.sobrenos.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </nav>
    </div>

    <table id="example" class="striped highlight" cellspacing="0" width="100%">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Link_video</th>
                <th>Descricao_sobrenos</th>
                <th>Descricao_oportunidades</th>
                <th>Por</th>
                <th>Publicar?</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sobrenos as $sobre)
            <tr>
                <td>{{ $sobre->id }}</td>
                <td title="{{ $sobre->link_video }}">{{ str_limit($sobre->link_video, 30) }}</td>
                <td title="{{ $sobre->descricao_sobrenos }}">{{ str_limit($sobre->descricao_sobrenos, 30) }}</td>
                <td title="{{ $sobre->descricao }}">{{ str_limit($sobre->descricao_oportunidades, 30) }}</td>
                <td>{{ $sobre->user->descricao_oportunidades }}</td>
                <td>{{ $sobre->publicar }}</td>
                <td>{{ date('d/m/Y H:i:s', strtotime($sobre->updated_at)) }}</td>
                <td>
                    <a href="{{ route('admin.paginas.sobrenos.editar',$sobre->id) }}"><i class="material-icons actions">mode_edit</i></a>
                    <a href="javascript:(confirm('Deseja remover esse Registro?') ? window.location.href='{{route('admin.paginas.sobrenos.deletar',$sobre->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
@endsection