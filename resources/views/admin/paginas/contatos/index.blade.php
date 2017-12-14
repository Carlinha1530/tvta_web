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
                <a href="{{ Route('admin.paginas.contatos.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </nav>
    </div>

    <table id="example" class="striped highlight" cellspacing="0" width="100%">
        <thead>
            <tr> 
                <th>Id</th>
                <th>Mapa</th>
                <th>Endereço</th>
                <th>Cidade/Estado</th>
                <th>Telefone 1</th>
                <th>Telefone 2</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Por</th>
                <th>Publicar?</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contatos as $contato)
            <tr>
                <td>{{ $contato->id }}</td>
                <td title="{{ $contato->mapa }}">{{ str_limit($contato->mapa, 30) }}</td>
                <td>{{ $contato->endereco }}</td>
                <td>{{ $contato->cidade }}</td>
                <td>{{ $contato->fone1 }}</td>
                <td>{{ $contato->fone2 }}</td>
                <td>{{ $contato->celular }}</td>
                <td>{{ $contato->email }}</td>
                <td>{{ $contato->user->name }}</td>
                <td>{{ $contato->publicar }}</td>
                <td>{{ date('d/m/Y H:i:s', strtotime($contato->updated_at)) }}</td>
                <td>
                    <a href="{{ route('admin.paginas.contatos.editar',$contato->id) }}"><i class="material-icons actions">mode_edit</i></a>
                    <a href="javascript:(confirm('Deseja remover esse Registro?') ? window.location.href='{{route('admin.paginas.contatos.deletar',$contato->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
@endsection