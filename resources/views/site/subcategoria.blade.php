@extends('layouts.site')

@section('pagina_titulo', $subcats->nome)

@section('content')
    @if($subcats->publicar=='sim')
        <div class="wrap_6 wow fadeInLeft">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <h3 class="header_1 text_6 color_1 bg_3">
                        <a href="{{ Route('site.categorias_all')}}">{{ $subcats->nome }}</a> 
                        {{-- <label style="color: rgba(230, 230, 230, 0.54);">{{ $subcats->nome }}</label> --}}
                    </h3>
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
                                        <a data-type="video" href="{{ Route('site.video', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                            <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; "></span>
                                        </a>
                                    @else
                                        <a href="{{ Route('site.video', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">
                                            <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 160px; max-height: 100%; "></span>
                                        </a>
                                    @endif
                                </div>
                                <div class="panel-footer" style="background-color: #fff;">
                                    <span><a class="text_12_1 color_3" href="{{ Route('site.video', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="bottom">{{ str_limit($video->nome, 25) }}</a></span>
                                </div>
                            </div>
                            <!-- curtir e compartilhar facebook -->
                            <div class="fb-like" data-href="{{ Route('site.video', $video->slug) }}" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ Route('site.video', $video->slug) }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a><br><br>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="wrap_6 wow fadeInLeft">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <h2 class="header_1 text_6 color_1 bg_3">
                        ERROR!!
                    </h2>
                </div>
            </div>
        </div>
        <h5 class="text_4 color_3">
            Desculpe, a subcategoria "{{$subcats->nome}}" não está disponivel. Faça outra busca.
            {{-- <a href="{{ Route('site.subcategoria')}}"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para ver outras subcategorias.</strong></a>  --}}
        </h5><br><br><br>
    @endif
    <div align="center">
       {{--  {!! $videos->links() !!} --}}
    </div>
@endsection

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
{{-- <script src="/js/validacao/bootstrap.min.js"></script> --}}
{{-- <script src="/js/validacao/validacoes_navtab.js"></script> --}}