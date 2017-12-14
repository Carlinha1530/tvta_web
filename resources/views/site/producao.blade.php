@extends('layouts.site')

@section('pagina_titulo', $palestrante->nome)

@section('content')
    @if($palestrante->publicar=='sim' && $palestrante->tipo=='producao')
    	<div class="wrap_6">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <h3 class="header_1 text_6 color_1 bg_3">
                        <a href="{{ Route('site.producoes_all')}}" data-toggle="tooltip" 
                        title="Ir a página de Produção" data-placement="top">Produção</a> / 
                        <label style="color: rgba(230, 230, 230, 0.54);">{{$palestrante->nome}}</label>
                    </h3>
                </div>
            </div>
        </div>
        {{-- http://v3.terceiroanjo.com/img/imagens_posts/index-1_img02.jpg --}}
        {{-- http://v3.terceiroanjo.com/mp3/para_videos/ --}}

        <div class="wrap_7">
            <div class="wrap_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap_4">
                            <div class="box_1 wow fadeInLeft" data-wow-delay=".6s">
                                <div class="put-left">  
                                    @if(!empty($palestrante->imagem))
                                        <span class="thumbnail" style="background: url('{{asset($palestrante->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;" alt="{{$palestrante->nome}}"></span>
                                    @else
                                        <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/palestrante.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;" alt="{{$palestrante->nome}}"></span>
                                    @endif
                                </div>
                                <div class="caption_3">
                                    @if(!empty($palestrante->profissao))
                                    <h3 class="text_4 color_3">
                                        <strong style="font-weight: bolder;">Ocupação:</strong>
                                        {{$palestrante->profissao}}
                                    </h3>
                                    @endif
                                    <p class="text_9 color_4">
                                        {!!$palestrante->descricao!!}
                                        @if(!empty($palestrante->file))
                                            <strong>
                                                <a target="_blanck" href="{{ asset($palestrante->file) }}">baixar aqui!!</a>
                                            </strong>
                                        @endif
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="wrap_6">
                            <div class="row">
                                <div class="col-md-12 wow fadeInLeft">
                                    <h3 class="header_1 text_6 color_1 bg_3">Vídeos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="wrap_1">
                            <div class="row">
                                @if($videos->count())
                                    @foreach($videos as $video)
                                        <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                                            <div class="ta-panel ta-panel-nofooter" style="background-color: #fff;margin-bottom: 10%;">
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
                                            {{-- <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" ></div> --}}
                                        </div>
                                    @endforeach
                                @else 
                                    <div class="col-md-12 wow fadeInLeft">
                                        <br>
                                        <h5 class="text_4 color_3">
                                            Desculpe, nenhum vídeo encontrado para esse produção.
                                            <a href="{{ Route('site.producoes_all')}}"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para escolher outro produção.</strong></a> 
                                        </h5><br><br>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div align="center">
            {!! $videos->links() !!}
        </div>
    @else
        <br>
        <h5 class="text_4 color_3">
            Desculpe, o produção "{{$palestrante->nome}}" não está disponivel. 
            <a href="{{ Route('site.producoes_all')}}"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para ver outro produção.</strong></a> 
        </h5><br><br>
    @endif
@endsection