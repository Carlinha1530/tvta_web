@extends('layouts.site')

@section('pagina_titulo', $series->nome)

@section('content')
    @if($series->publicar=='sim')
        @if($series->video()->count())
            <div class="wrap_6">
                <div class="row">
                    <div class="col-md-12 wow fadeInLeft">
                        <h3 class="header_1 text_6 color_1 bg_3">
                            <a href="{{ Route('site.series')}}" data-toggle="tooltip" title="Ir para a página de séries" data-placement="top">Séries</a> / 
                            <label style="color: rgba(230, 230, 230, 0.54);">{{$series->nome}}</label>
                        </h3>
                    </div>
                </div>
            </div>
            
            <div class="video-bg">
                <div class="row">
                    <div class="col-md-8"><br>
                        <div id="iframe-container" class="embed-responsive embed-responsive-16by9" style="margin-left: 25px;">
                            <iframe width="560" height="315" src="{{ $first->link_video }}" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-4"><br><br>
                        <h3  class="text_6 color_1">Vídeos da Série {{ $series->nome }}</h3><br>
                        <hr style="margin-top: 0px;margin-bottom: 22px;margin-right: 22px;margin-left: -7px;">
                        <div class="table-overflow" id="overflow">
                            @foreach($videos as $vid)
                                <div class="row">
                                    <div class="col-md-5">
                                        <div id="video" class="box_1">
                                            @if(!empty($vid->imagem))
                                                <a href="{{ $vid->link_video }}" data-toggle="tooltip" title="Reproduzir {{ $vid->nome }}" data-placement="bottom">
                                                    <span class="thumbnail" style="background: url('{{asset($vid->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 85px; max-height: 100%; width:127px" alt="{{$vid->nome}}"></span>
                                                </a>
                                            @else
                                                <a href="{{ $vid->link_video }}" data-toggle="tooltip" title="Reproduzir {{ $vid->nome }}" data-placement="bottom">
                                                    <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 85px; max-height: 100%; width:127px" alt="{{$vid->nome}}"></span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h3 class="text_7 color_1">
                                            <div id="video">
                                                <a href="{{ $vid->link_video }}" data-toggle="tooltip" title="Reproduzir {{ $vid->nome }}" data-placement="bottom">  
                                                    {{ str_limit($vid->nome, 25) }}
                                                </a>
                                            </div>
                                        </h3>
                                        <p class="text_9 color_4">{{ str_limit($vid->resumo, 50) }}
                                            @if($vid->idioma=='portugues')
                                                <a href="{{ Route('site.video_br', $vid->slug) }}"><strong style="font-weight: bold;">Ver detalhes</strong></a>
                                            @elseif($vid->idioma=='ingles')
                                                <a href="{{ Route('site.video_en', $vid->slug) }}"><strong style="font-weight: bold;">Ver detalhes</strong></a>
                                            @elseif($vid->idioma=='espanhol')
                                                <a href="{{ Route('site.video_es', $vid->slug) }}"><strong style="font-weight: bold;">Ver detalhes</strong></a>
                                            @endif 
                                        </p>
                                    </div>
                                </div><br>
                            @endforeach
                        </div>
                    </div>
                </div><br>
            </div><br>

            <div class="wrap_7">
                <div class="wrap_1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap_4">
                                <div class="box_1 wow fadeInLeft" data-wow-delay=".6s">
                                    <div class="caption_3">
                                        {{--<h1 class="text_4 color_3">
                                            <strong style="font-weight: bolder;">Série:</strong>
                                                {{ $series->nome }}
                                        </h1><br>--}}
                                        <p class="text_9 color_4">
                                            {!! $series->descricao !!}
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><br>
                                <!-- compartilhar twitter -->
                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                                <!-- compartilhar facebook -->
                                <div class="fb-share-button" data-href="" data-layout="button_count" >Compartilhar</div>
                                <!-- curtir facebook -->
                                <div class="fb-like" data-href="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" >Curtir</div><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else 
            <br>
            <h5 class="text_4 color_3">
                Desculpe, nenhum vídeo encontrado para essa série.
                <a href="{{ Route('site.series')}}"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para escolher outra série.</strong></a> 
            </h5><br><br>
        @endif
    @else
        <br>
        <h5 class="text_4 color_3">
            Desculpe, a série "{{$series->nome}}" não está disponivel. {{-- Faça outra busca. --}}
            <a href="{{ Route('site.series')}}"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para ver outras séries.</strong></a> 
        </h5><br><br>
    @endif

    <link rel="stylesheet" href="{{asset('css/scroll/jquery.mCustomScrollbar.min.css')}}">
    <script src="{{asset('js/scroll/jquery.mCustomScrollbar.min.js')}}"></script>
    <script src="{{asset('js/series/script.js')}}"></script>
@endsection