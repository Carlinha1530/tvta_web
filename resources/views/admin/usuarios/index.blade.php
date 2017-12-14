@extends('layouts.app')

@section('content')
    
    <h3 class="center">Lista de Usuários</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Lista de Usuários</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.usuarios.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
                    <i class="material-icons">add</i>
                </a>
            </div>
        </nav>
    </div>

    <table id="example" class="striped highlight" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
				<th>Nome</th>
                <th>E-mail</th>
                <th>Profissão</th>
                <th>Resumo</th>
                <th>Imagem</th>
                <th>Publicado?</th>
                <th>Data</th>
				<th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
					<td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->profissao }}</td>
                    <td title="{{ $usuario->resumo }}">{{ str_limit($usuario->resumo, 30) }}</td>
                    <td><img width="100" src="{{asset($usuario->imagem)}}"></td>
					<td>{{ $usuario->publicar }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($usuario->updated_at)) }}</td>
                    <td>
                        <a href="{{ route('admin.usuarios.editar',$usuario->id) }}"><i class="material-icons actions">mode_edit</i></a>
                        <a href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.usuarios.deletar',$usuario->id) }}' }"><i class="material-icons actions">delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div align="center">
        <!-- Paginação -->
        {!! $usuarios->links() !!}
    </div> --}}
@endsection