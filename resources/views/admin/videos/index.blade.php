@extends('layouts.app')

@section('content')
    
    <h3 class="center">Lista de Vídeos</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Lista de Vídeos</a>
                </div>
            </div>
            
            <div class="nav-content">
                <a href="{{ Route('admin.videos.adicionar') }}" class="btn-floating btn-large halfway-fab waves-effect grey darken-4">
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
                <th>Categorias</th>
                <th>Sub-Categorias</th>
                <th>Palestrante</th>
                <th>Série</th>
                <th>Resumo</th>
                <th>Url</th>
                <th>Doação</th>
                <th>Imagem</th>
                <th>Por</th>
                <th>Idioma</th>
                <th>Publicado?</th>
                <th>Data</th>
                <th>Ação</th>
            </tr>
        </thead>

        <tbody>
            @foreach($videos as $video)
                <tr>
                    <td>{{ $video->id }}</td>
                    <td title="{{ $video->nome }}">{{ str_limit($video->nome, 30) }}</td>
                    <td>
                        @foreach($video->categoria as $cat)
                            @if($video->categoria->count() > 1)
                                {{ $cat->nome }}/ <br>
                            @else
                                {{ $cat->nome }} 
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach($video->subcategoria as $sub)
                            @if($video->subcategoria-> count() > 1)
                                {{ $sub->nome }}/ <br>
                            @else
                                {{ $sub->nome }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $video->palestrante->nome }}</td>
                    <td>
                        @foreach($video->serie as $ser)
                            {{ $ser->nome }} 
                        @endforeach
                    </td>
                    <td title="{{ $video->resumo }}">{{ str_limit($video->resumo, 10) }}</td>
                    <td title="{{ $video->link_video }}">{{ str_limit($video->link_video, 20) }}</td>
                    <td>{{ $video->doacao}}</td>
                    <td><img width="100" src="{{asset($video->imagem)}}"></td>
                    <td>{{ $video->user->name }}</td>
                    <td></td>
                    <td>{{ $video->idioma }}</td>
                    <td>{{ $video->publicar }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($video->ordem_data)) }}</td>
                    <td>
                        <a href="{{route('admin.videos.editar', $video->id)}}" title="Editar Vídeo">    
                            <i class="material-icons actions">mode_edit</i>
                        </a>
                        <a href="javascript:(confirm('Deseja remover esse vídeo?') ? window.location.href='{{route('admin.videos.deletar',$video->id)}}' : false)">
                            <i class="material-icons actions">delete</i>
                        </a><br>
                        <a style="color: #222;" href="{{route('admin.videos.categorias', $video->id)}}" title="Definir Categorias">
                            <i class="material-icons">view_module</i>
                        </a>
                        <a style="color: #222;" href="{{route('admin.videos.subcategorias', $video->id)}}" title="Definir Subcategorias">
                            <i class="material-icons">view_list</i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <div align="center">
        <!-- Paginação -->
        {!! $videos->links() !!}
    </div> --}}
@endsection
