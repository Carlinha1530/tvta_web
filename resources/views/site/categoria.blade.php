@extends('layouts.site')

@section('pagina_titulo', $cats->nome)

@section('content')
    @if($cats->publicar=='sim')
        <div class="wrap_6 wow fadeInLeft">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <h3 class="header_1 text_6 color_1 bg_3">
                        <a href="{{ Route('site.categorias_all')}}" data-toggle="tooltip" title="Ir para a páginda de categórias" data-placement="top">Categorias</a> / 
                        <label style="color: rgba(230, 230, 230, 0.54);">{{ $cats->nome }}</label>
                    </h3>
                </div>
            </div>
        </div>
        @if($videos->count())
            <div class="wrap_7">
                <div class="wrap_1">
                    <div class="row">
                        @foreach($videos as $video)
                            <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                                <div class="ta-panel ta-panel-nofooter" style="background-color: #fff;margin-bottom: 10%;">
                                    <div class="panel-heading">
                                    @if(!empty($video->palestrante->nome === 'Terceiro Anjo'))
                                        <span class="text_11 color_3" >{{ $video->palestrante->nome }}</span>
                                    @else
                                        @if($video->palestrante->tipo=='palestrante')
                                            <a class="text_11 color_3" href="{{ Route('site.palestrante', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom"> {{ $video->palestrante->nome }} </a>
                                        @elseif($video->palestrante->tipo=='programa')
                                            <a class="text_11 color_3" href="{{ Route('site.programa', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom"> {{ $video->palestrante->nome }} </a>
                                        @elseif($video->palestrante->tipo=='producao')
                                            <a class="text_11 color_3" href="{{ Route('site.producao', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom"> {{ $video->palestrante->nome }} </a>
                                        @endif                                            
                                    @endif
                                    </div>
                                    <div class="panel-panel-body">
                                        @if(!empty($video->imagem))

                                            @if($video->idioma=='portugues')
                                                <a data-type="video" href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                                    <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                                </a>
                                            @elseif($video->idioma=='ingles')
                                                <a data-type="video" href="{{ Route('site.video_en', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                                    <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                                </a>
                                            @elseif($video->idioma=='espanhol')
                                                <a data-type="video" href="{{ Route('site.video_es', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                                    <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                                </a>
                                            @endif
                                            <!-- <a data-type="video" href="{{ Route('site.video', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                                <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                            </a> -->
                                        @else
                                            @if($video->idioma=='portugues')
                                                <a href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                                    <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                                </a>
                                            @elseif($video->idioma=='ingles')
                                                <a href="{{ Route('site.video_en', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                                    <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                                </a>
                                            @elseif($video->idioma=='espanhol')
                                                <a href="{{ Route('site.video_es', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                                    <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                                </a>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="panel-footer" style="background-color: #fff;">
                                        @if($video->idioma=='portugues')
                                            <span><a class="text_12_1 color_3" href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">{{ str_limit($video->nome, 25) }}</a></span>
                                        @elseif($video->idioma=='ingles')
                                            <span><a class="text_12_1 color_3" href="{{ Route('site.video_en', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">{{ str_limit($video->nome, 25) }}</a></span>
                                        @elseif($video->idioma=='espanhol')
                                            <span><a class="text_12_1 color_3" href="{{ Route('site.video_es', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">{{ str_limit($video->nome, 25) }}</a></span>
                                        @endif
                                    </div>
                                </div>
                                <!-- curtir e compartilhar facebook -->
                                @if($video->idioma=='portugues')
                                    <div class="fb-like" data-href="{{ Route('site.video_br', $video->slug) }}" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ Route('site.video_br', $video->slug) }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a><br><br>
                                @elseif($video->idioma=='ingles')
                                    <div class="fb-like" data-href="{{ Route('site.video_en', $video->slug) }}" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ Route('site.video_en', $video->slug) }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a><br><br>
                                @elseif($video->idioma=='espanhol')
                                    <div class="fb-like" data-href="{{ Route('site.video_es', $video->slug) }}" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ Route('site.video_es', $video->slug) }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a><br><br>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else 
            <br>
            <h5 class="text_4 color_3">
                Desculpe, nenhum vídeo encontrado para essa categoria.
                <a href="{{ Route('site.categorias_all')}}" title="Veja outra categoria"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para escolher outra categoria.</strong></a> 
            </h5><br><br>
        @endif
        <div align="center">
            {!! $videos->links() !!}
        </div>
    @else
        <br>
        <h5 class="text_4 color_3">
            Desculpe, a categoria "{{$cats->nome}}" não está disponivel. {{-- Faça outra busca. --}}
            <a href="{{ Route('site.categorias_all')}}" title="Veja outra categoria"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para ver outras categorias.</strong></a> 
        </h5><br><br>
    @endif
    {{-- <div class="row">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#subcategoria=todos">Todos</a></li>
            @foreach($subcategorias as $subcategoria)
            <li role="presentation">    
                <a href="{{ Route('site.subcategoria', [$subcategoria->id]) }}">
                    {{ $subcategoria->nome }}
                </a>
            </li>
            @endforeach
        </ul><br>
        
        @foreach($videos as $video)
            <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                <div class="box_1">
                    <a data-type="video" href="{{ Route('site.video',[str_slug($video->nome,'_')]) }}">    
                        <img src="{{asset($video->imagem)}}" alt="{{ $video->nome }}"/>
                    </a>
                    <div class="caption">   
                        <h5 class="text_7 color_3">
                            <a href="{{ Route('site.video',[str_slug($video->nome,'_')]) }}">
                            {{ $video->nome }}</a>
                        </h5>
                        <small class="text_8 color_4">
                            <strong style="font-weight: bolder;">Sub-Categorias:</strong>
                            @foreach($video->subcategoria as $cat)
                                @if($video->subcategoria->count() > 1)
                                    {{ $cat->nome }}, 
                                @else
                                    {{ $cat->nome }} 
                                @endif
                            @endforeach
                        </small><br>
                        <p class="text_9 color_3">{{ str_limit($video->descricao, 70) }}
                        <a href="{{ Route('site.video',[str_slug($video->nome,'_')]) }}"><strong style="font-weight: bold;">Ver mais</strong></a></p>
                        </p>
                        
                        <!-- curtir facebook -->
                        <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false" >Curtir</div>
                        <!-- compartilhar facebook -->
                        <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >Compartilhar</div><br><br>
                        <!-- compartilhar twitter -->
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}

@endsection

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
{{-- <script src="/js/validacao/bootstrap.min.js"></script> --}}
{{-- <script src="/js/validacao/validacoes_navtab.js"></script> --}}