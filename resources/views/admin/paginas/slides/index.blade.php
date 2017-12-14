@extends('layouts.app')

@section('content')
    <h3 class="center">Imagens Slide Home Site</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ Route('admin.principal') }}" class="breadcrumb">Início</a>
                    <a href="{{ Route('admin.paginas') }}" class="breadcrumb">Páginas</a>
                    <a class="breadcrumb">Imagens Slide</a>
                </div>
            </div>
           
            <div class="nav-content">
                <a href="{{ Route('admin.paginas.slides.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                    <th>Imagem</th>
                    <th>Ordem</th>
                    <th>Publicado?</th>
                    <th>Link</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($slides as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td title="{{ $registro->descricao }}">{{ str_limit($registro->descricao, 50) }}</td>
                        <td><img width="100" src="{{asset($registro->imagem)}}"></td>
                        <td>{{ $registro->ordem }}</td>
                        <td>{{ $registro->publicar }}</td>
                        <td>{{ $registro->link }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($registro->updated_at)) }}</td>
                        <td>
                            <a href="{{route('admin.paginas.slides.editar', $registro->id)}}"><i class="material-icons actions">mode_edit</i></a>
                            <a href="javascript:(confirm('Deseja remover essa Imagem?') ? window.location.href='{{route('admin.paginas.slides.deletar',$registro->id)}}' : false)"><i class="material-icons actions">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div align="center">
        <!-- Paginação -->
            {!! $registros->links() !!}
        </div> --}}
@endsection
