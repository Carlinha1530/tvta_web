@extends('layouts.site')

@section('pagina_titulo', 'Vídeos em Português')

@section('content')
    <div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h3 class="header_1 text_6 color_1 bg_3">Vídeos em Português</h3>
            </div>
        </div>
    </div>

    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                @foreach($videos as $video)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="ta-panel ta-panel-nofooter" style="background-color: #fff;margin-bottom: 10%;">
                        <div class="panel-heading">
                            @if(!empty($video->palestrante->nome === 'Terceiro Anjo'))
                                <h4 class="text_11 color_3" >
                                {{ str_limit($video->palestrante->nome, 25) }}</h4>
                            @else
                                @if($video->palestrante->tipo=='palestrante')
                                    <a class="text_11 color_3" href="{{ Route('site.palestrante', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom"> {{ str_limit($video->palestrante->nome, 25) }} </a>
                                @elseif($video->palestrante->tipo=='programa')
                                    <a class="text_11 color_3" href="{{ Route('site.programa', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom"> {{ str_limit($video->palestrante->nome, 25) }} </a>
                                @elseif($video->palestrante->tipo=='producao')
                                    <a class="text_11 color_3" href="{{ Route('site.producao', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom"> {{ str_limit($video->palestrante->nome, 25) }} </a>
                                @endif                                
                            @endif
                        </div>
                        <div class="panel-panel-body">
                            @if(!empty($video->imagem))
                                <a data-type="video" href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                    <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                </a>
                            @else
                                <a href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                    <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; " alt="{{$video->nome}}"></span>
                                </a>
                            @endif
                        </div>
                        <div class="panel-footer" style="background-color: #fff;">
                            <h4><a class="text_12_1 color_3" href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">{{ str_limit($video->nome, 25) }}</a></h4>
                        </div>

                    </div>
                    <!-- curtir e compartilhar facebook -->
                    {{-- <div class="fb-like" data-href="{{ Route('site.video_br', $video->slug) }}" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ Route('site.video_br', $video->slug) }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a><br><br>
                    <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" ></div> --}}

                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div align="center">
        <!-- Paginação -->
        {!! $videos->links() !!}
    </div>
@endsection