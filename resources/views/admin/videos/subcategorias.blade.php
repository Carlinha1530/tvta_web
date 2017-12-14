@extends('layouts.app')

@section('content')

    <h3 class="center">SubCategorias para o vídeo '{{$videos->nome}}'</h3>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a href="{{ route('admin.videos')}}" class="breadcrumb">Lista de Vídeos</a>
                    <a class="breadcrumb">Adicionar Subcategoria</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <form class="col s12" action="{{route('admin.videos.subcategorias.salvar',$videos->id)}}" method="post" class="form_label">
            {{ csrf_field() }}
            @include('admin.videos._form_subcategoria')
        </form>
    </div>

    <table id="example" class="striped highlight" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SubCategorias</th>
                <th>Publicado?</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos->subcategoria as $cat)
                <tr>
                    <td>{{ $cat->nome }}</td>
                    <td>{{ $cat->publicar }}</td>
                    <td>
                        <a href="javascript: if(confirm('Remover essa SubCategoria?')){ window.location.href = '{{ route('admin.videos.subcategorias.remover',[$videos->id,$cat->id]) }}' }"><i class="material-icons actions">delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
