@extends('layouts.site')

@section('pagina_titulo', 'Categorias')

@section('content')
    <div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h3 class="header_3 text_6 color_1 bg_3">Categorias</h3>
            </div>
        </div>
    </div>
    <div class="wrap_7">
        <div class="wrap_1">
        <div class="row">
        	@foreach($categorias as $categoria)
            <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                <div class="box_1">
                    @if(!empty($categoria->imagem))
                        <a href="{{ Route('site.categoria', $categoria->slug) }}" data-toggle="tooltip" title="{{ $categoria->nome }}" data-placement="bottom">
                            <span class="thumbnail" style="background: url('{{asset($categoria->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; " alt="{{$categoria->nome}}"></span>
                        </a>
                    @else
                        <a href="{{ Route('site.categoria', $categoria->slug) }}" data-toggle="tooltip" title="{{ $categoria->nome }}" data-placement="bottom">
                            <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/categoria.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; " alt="{{$categoria->nome}}"></span>
                        </a>
                    @endif

                    <div class="caption">
                        <h5 class="text_4 color_3">
                            <a href="{{ Route('site.categoria', $categoria->slug) }}" data-toggle="tooltip" title="{{ $categoria->nome }}" data-placement="right">{{ str_limit($categoria->nome, 15) }}</a>
                        </h5><br>
                        
                        <p class="text_9 color_4" title="{{ $categoria->descricao }}">
                            {{ str_limit($categoria->descricao, 35)  }} 
                        </p>
                    </div>
                    <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.categoria', $categoria->slug) }}">Ver mais </a><br><br><br>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    <div align="center">
        <!-- Paginação -->
        {!! $categorias->links() !!}
    </div>
@endsection
 
