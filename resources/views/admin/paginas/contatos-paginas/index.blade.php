@extends('layouts.app')

@section('content')

    <h3 class="center">Lista de Páginas</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a href="{{ Route('admin.paginas') }}" class="breadcrumb">Páginas</a>
                    <a class="breadcrumb">Lista de Páginas</a>
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
                <th>Nome</th>
                <th>Descrição</th>
                <th>Texto</th>
                <th>Mapa</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Imagem</th>
                {{-- <th>Publicado?</th> --}}
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($paginas as $pagina)
            <tr>
                <td>{{ $pagina->id }}</td>
                <td>{{ $pagina->nome }}</td>
                <td>{{ str_limit($pagina->descricao, 30) }}</td>
                <td>{{ str_limit($pagina->texto, 30)  }}</td>
                <td>{{ str_limit($pagina->mapa, 30) }}</td>
                <td>{{ $pagina->email }}</td>
                <td>{{ $pagina->tipo }}</td>
                <td><img width="100" src="{{asset($pagina->imagem)}}"></td>
                {{-- <td>{{ $pagina->publicar }}</td> --}}
                <td>{{ date('d/m/Y H:i:s', strtotime($pagina->updated_at)) }}</td>
                <td>
                    <a href="{{ route('admin.paginas.contatos.editar',$pagina->id) }}"><i class="material-icons actions">mode_edit</i></a>
                    <a href="javascript:(confirm('Deseja remover esse Registro?') ? window.location.href='{{route('admin.paginas.contatos.deletar',$pagina->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{-- <div align="center">
        <!-- Paginação -->
        {!! $paginas->links() !!}
    </div> --}}
    
@endsection