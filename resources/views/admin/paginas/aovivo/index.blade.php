@extends('layouts.app')

@section('content')

    <h3 class="center">Ao Vivo</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a href="{{ Route('admin.paginas') }}" class="breadcrumb">Páginas</a>
                    <a class="breadcrumb">Ao Vivo</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.paginas.aovivo.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </nav>
    </div>

    <table id="example" class="striped highlight" cellspacing="0" width="100%">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Titulo</th>
                <th>Descricao</th>
                <th>Link_vídeo BR</th>
                <th>Link_vídeo EN</th>
                <th>Link_vídeo ES</th>
                <th>Por</th>
                <th>Publicar?</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aovivo as $av)
            <tr>
                <td>{{ $av->id }}</td>
                <td title="{{ $av->titulo }}">{{ str_limit($av->titulo, 30) }}</td>
                <td title="{{ $av->descricao }}">{{ str_limit($av->descricao, 30) }}</td>
                <td title="{{ $av->link_video }}">{{ str_limit($av->link_video, 30) }}</td>
                <td title="{{ $av->link_videoen }}">{{ str_limit($av->link_videoen, 30) }}</td>
                <td title="{{ $av->link_videoes }}">{{ str_limit($av->link_videoes, 30) }}</td>
                <td>{{ $av->user->name }}</td>
                <td>{{ $av->publicar }}</td>
                <td>{{ date('d/m/Y H:i:s', strtotime($av->updated_at)) }}</td>
                <td>
                    <a href="{{ route('admin.paginas.aovivo.editar',$av->id) }}"><i class="material-icons actions">mode_edit</i></a>
                    <a href="javascript:(confirm('Deseja remover esse Registro?') ? window.location.href='{{route('admin.paginas.aovivo.deletar',$av->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
@endsection