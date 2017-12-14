@extends('layouts.site')

@section('pagina_titulo', 'Séries')

@section('content')
	<div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h3 class="header_1 text_6 color_1 bg_3">Séries</h3>
            </div>
        </div>
    </div>
    
    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                @foreach($series as $serie)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box_1">
                        @if(!empty($serie->imagem))
                            <a href="{{ Route('site.serie', $serie->slug) }}" data-toggle="tooltip" title="{{ $serie->nome }}" data-placement="bottom">
                                <span class="thumbnail" style="background: url('{{asset($serie->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; "></span>
                            </a>
                        @else
                            <a href="{{ Route('site.serie', $serie->slug) }}" data-toggle="tooltip" title="{{ $serie->nome }}" data-placement="bottom">
                                <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/serie.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; "></span>
                            </a>
                        @endif
                        <div class="caption">
                            <h3 class="text_4 color_3">
                                <a href="{{ Route('site.serie',$serie->slug) }}" data-toggle="tooltip" title="{{ $serie->nome }}" data-placement="bottom">{{ str_limit($serie->nome, 15) }}</a>
                            </h3><br>

                            <p class="text_9 color_4">{{ str_limit($serie->resumo, 25)  }}<a href="{{ Route('site.serie',$serie->slug) }}"><strong style="font-weight: bold;">..Ver mais</strong></a>
                            </p><br>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div align="center">
        <!-- Paginação -->
        {!! $series->links() !!}
    </div>
@endsection
