<div class="row">
    <div class="col-md-12 wow fadeInLeft">
        <h3 class="header_1 text_6 color_1 bg_3">
            Vídeos em Destaque
            {{--  <a href="{{ Route('site.videos_br') }}" style="float: right;" data-toggle="tooltip" title="Confira Todos os nossos Vídeos" data-placement="top" ><!--i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i-->Clique aqui e veja todos os Vídeos</a>   --}}
        </h3>
    </div>
</div>
<div class="wrap_1">
    <div class="row">
        @foreach($videos as $video)
            <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s" style="">
                <div class="ta-panel ta-panel-nofooter" style="background-color: #fff;margin-bottom: 10%;">
                    <div class="panel-heading">
                        @if(!empty($video->palestrante->nome === 'Terceiro Anjo'))
                            <h3 class="text_11 color_3" >
                            {{ str_limit($video->palestrante->nome, 25) }}</h3>
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
                                <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; "></span>
                            </a>
                        @else
                            <a href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; "></span>
                            </a>
                        @endif
                        {{-- <span style="margin: 16px 16px 16px 16px;"><a style="text-align: justify;" class="text_12 color_1" href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">{{ $video->nome }}</a></span> --}}
                    </div>
                    <div class="panel-footer" style="background-color: #fff;">
                        <h3><a class="text_12_1 color_3" href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">{{ str_limit($video->nome, 25) }}</a></h3>
                    </div>
                </div>
                
                <!-- curtir e compartilhar facebook -->
                {{--  <div class="fb-like" data-href="{{ Route('site.video_br', $video->slug) }}" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>  --}}

                {{-- <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartilhar</a></div> --}}

                <!-- compartilhar twitter -->
                {{--  <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ Route('site.video_br', $video->slug) }}" data-count="horizontal" data-lang="pt" data-dnt="true" title="seguir a nossa página no twitter">Tweetar</a><br><br>  --}}
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-4 wow fadeInRight">
            <h3 class="header_1 text_6 color_1 bg_3 maxheight"><a href="{{ Route('site.videos_br') }}">Veja mais vídeos em português</a> </h3>
        </div>
        <div class="col-md-4 wow fadeInRight">
            <h3 class="header_1 text_6 color_1 bg_3 maxheight"><a href="{{ Route('site.videos_en') }}">Veja mais vídeos em Inglês</a> </h3>
        </div>
        <div class="col-md-4 wow fadeInRight">
            <h3 class="header_1 text_6 color_1 bg_3 maxheight"><a href="{{ Route('site.videos_es') }}">Veja mais vídeos em Espanhol</a> </h3>
        </div>
    </div>
</div>

