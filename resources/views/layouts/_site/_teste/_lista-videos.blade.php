<style>
<style>
    /*.teste_img img {
        max-width: 100%;
        max-height:218px;
        width: auto;
        height: 206px;
    }

    @media (max-height: 767px) {
        .teste_img img {
            max-width: 100%;
            max-height:218px;
            width: auto;
            height: 207px;
        }
    }*/


</style>

<div class="row">
    <div class="col-md-12 wow fadeInLeft">
        <h2 class="header_1 text_6 color_1 bg_3">
            Videos em Destaque
            <a href="{{ Route('site.videos_all') }}" style="float: right;" data-toggle="tooltip" title="Confira Todos os nossos Vídeos" data-placement="top" ><!--i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i-->Clique aqui e veja todos os Vídeos</a>
        </h2>
    </div>
</div>
<div class="wrap_1">
    <div class="row">
        @foreach($videos as $video)
        <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
            <div class="box_1">
                {{-- <a data-type="video" href="{{ $video->link_video }}"> --}}
                <a data-type="video" href="{{ Route('site.video', $video->slug) }}" data-toggle="tooltip" title="Ver vídeo" data-placement="bottom">
                    {{-- <div class="div-foto"> --}}
                        {{-- <img src="{{asset($video->imagem)}}" alt="{{$video->nome}}"/> --}}
                        <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; "></span>
                    {{-- </div> --}}
                </a>
                <div class="caption">
                    <h3 class="text_4 color_3">
                        <a class="font-link" href="{{ Route('site.video', $video->slug) }}" data-toggle="tooltip" title="Ver vídeo" data-placement="bottom">{{ $video->nome }}</a>
                    </h3>
                    <small class="text_8 color_4">
                        {{-- <a  href="{{ Route('site.palestrante', [$video->id_palestrante]) }}" data-toggle="tooltip" title="Ver palestrante" data-placement="bottom"> --}}
                        <a  href="{{ Route('site.palestrante', [str_slug($video->palestrante->nome,'_')]) }}" data-toggle="tooltip" title="Ver palestrante" data-placement="bottom">
                            {{ $video->palestrante->nome }}
                        </a>
                    </small><br><br>
                    <p class="text_9 color_4">{{ str_limit($video->resumo, 100) }} <a class="font-link" href="{{ Route('site.video', $video->slug) }}"><strong style="font-weight: bold;"> Ver mais</strong></a></p>
                    
                    <!-- curtir facebook -->
                    <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false" >Curtir</div>
                    <!-- compartilhar facebook -->
                    <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >Compartilhar</div><br><br>
                    <!-- compartilhar twitter -->
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a><br><br>

                    <!--a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.video', [$video->id]) }}">Veja a descrição deste Vídeo</a-->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>