@extends('layouts.app')

@section('content')

    <h3 class="center">Vídeos para a Serie: {{$series->nome}}</h3>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a href="{{ route('admin.series')}}" class="breadcrumb">Lista de Séries</a>
                    <a class="breadcrumb">Adicionar Vídeos</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <form class="col s12" action="{{route('admin.series.videos.salvar',$series->id)}}" method="post" class="form_label">
            {{ csrf_field() }}
            @include('admin.series._form_video')
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
            @foreach($series->video as $vid)
                <tr>
                    <td>{{ $vid->nome }}</td>
                    <td>
                        @foreach($vid->categoria as $cat)
                            @if($vid->categoria->count() > 1)
                                {{ $cat->nome }}/ 
                            @else
                                {{ $cat->nome }} 
                            @endif
                        @endforeach
                    </td>
                    <td style="width: 100px">
                        @foreach($vid->subcategoria as $cat)
                            @if($vid->subcategoria-> count() > 1)
                                {{ $cat->nome }}/
                            @else
                                {{ $cat->nome }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $vid->palestrante->nome }}</td>
                    <td>{{ str_limit($vid->resumo, 50) }}</td>
                    <td>{{ $vid->link_video }}</td>
                    <td><img width="100" src="{{asset($vid->imagem)}}"></td>
                    <td>
                        <a href="javascript: if(confirm('Remover essa Vídeo?')){ window.location.href = '{{ route('admin.series.videos.remover',[$series->id,$vid->id]) }}' }"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
