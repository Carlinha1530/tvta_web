@extends('layouts.app')

@section('content')

        <h3 class="center">Lista de Livros</h3>
        <div class="row">
            <nav class="nav-extended">
                <div class="nav-wrapper blue darken-4">
                    <div class="col s12">
                        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                        <a class="breadcrumb">Lista de Livros</a>
                    </div>
                </div>
               
                <div class="nav-content">
                    <a href="{{ Route('admin.livros.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                    <th>Livro PDF</th>
                    <th>Livro ePub</th>
                    <th>Imagem</th>
                    <th>Por</th>
                    <th>Publicado?</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td>{{ $livro->id }}</td>
                        <td>{{ $livro->nome }}</td>
                        <td title="{{ $livro->descricao }}">{{ str_limit($livro->descricao, 30) }}</td>
                        <td>{{ $livro->file_pdf}}</td>
                        <td>{{ $livro->file_epub}}</td>
                        <td><img width="100" src="{{asset($livro->imagem)}}"></td>
                        <td>{{ $livro->user->name }}</td>
                        <td>{{ $livro->publicar }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($livro->updated_at)) }}</td>
                        <td>
                            <a href="{{route('admin.livros.editar', $livro->id)}}"><i class="material-icons actions">mode_edit</i></a>
                            <a href="javascript:(confirm('Deseja remover esse livro?') ? window.location.href='{{route('admin.livros.deletar',$livro->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div align="center">
            <!-- Paginação -->
            {!! $livros->links() !!}
        </div> --}}
    </div>
@endsection
