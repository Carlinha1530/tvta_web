@extends('layouts.site')

@section('pagina_titulo', 'Produção')

@section('content')
    <div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h3 class="header_1 text_6 color_1 bg_3">Produção</h3>
            </div>
        </div>
    </div>

    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                @foreach($palestrantes as $palestrante)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box_1">
                        @if(!empty($palestrante->imagem))
                            <a href="{{ Route('site.producao', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="bottom">
                                <span class="thumbnail" style="background: url('{{asset($palestrante->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; " alt="{{$palestrante->nome}}"></span>
                            </a>
                        @else
                            <a href="{{ Route('site.producao', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="bottom">
                                <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/palestrante.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; " alt="{{$palestrante->nome}}"></span>
                            </a>
                        @endif

                        <div class="caption">
                            <h5 class="text_4 color_3">
                                <a href="{{ Route('site.producao', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="right">
                                {{ str_limit($palestrante->nome, 15) }}</a>

                                {{-- @if(!empty($palestrante->profissao))
                                    <small class="text_8 color_4"> 
                                        ({{ str_limit($palestrante->profissao, 12) }})
                                    </small>
                                @endif --}}

                            </h5><br>
                            <p class="text_9 color_4">
                                @if(!empty($palestrante->resumo))
                                    {{ str_limit($palestrante->resumo, 35)  }} 
                                @else
                                    {{ str_limit($palestrante->nome, 35)  }} 
                                @endif
                                {{-- <a href="{{ Route('site.producao', [$palestrante->id]) }}"><strong style="font-weight: bold;color: #4080ff;">Ver mais</strong></a> --}}
                            </p>
                        </div>
                        <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.producao', $palestrante->slug) }}">Ver mais </a><br><br><br>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div align="center">
        <!-- Paginação -->
        {!! $palestrantes->links() !!}
    </div>
@endsection
