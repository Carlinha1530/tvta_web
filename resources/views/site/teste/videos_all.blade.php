@extends('layouts.site')

@section('pagina_titulo', 'Vídeos')

@section('content')
    <div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2 class="header_1 text_6 color_1 bg_3">Vídeos</h2>
            </div>
        </div>
    </div>

    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                @foreach($videos as $video)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box_1">
                        <a data-type="video" href="{{ Route('site.video', $video->slug) }}" data-toggle="tooltip" title="Ver vídeo" data-placement="bottom">  
                            {{-- <div class="div-foto"> --}}
                                {{-- <img src="{{asset($video->imagem)}}" alt="{{ $video->nome }}"/> --}}
                                <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; "></span>
                            {{-- </div>   --}}
                        </a>
                        <div class="caption">
                            <h5 class="text_4 color_3"> 
                                <a href="{{ Route('site.video', $video->slug) }}" data-toggle="tooltip" title="Ver vídeo" data-placement="right">
                                {{ str_limit($video->nome, 25) }}</a>
                            </h5><br>
                            <p class="text_8 color_4">
                                <strong style="font-weight: bolder;">Palestrante:</strong> 
                                <a href="{{ Route('site.palestrante', [str_slug($video->palestrante->nome,'_')]) }}" data-toggle="tooltip" title="Ver palestrante" data-placement="right">{{ $video->palestrante->nome }}
                                </a>
                            </p>

                            <p class="text_8 color_4">
                                @if(!empty($video->categoria->count() > 0))
                                <strong style="font-weight: bolder;">Categorias:</strong>
                                @endif  

                                @foreach($video->categoria as $cat)
                                    @if($video->categoria->count() > 1)
                                        <a href="{{ Route('site.categoria', [str_slug($cat->nome,'_')]) }}" data-toggle="tooltip" title="Ver categoria" data-placement="right"> 
                                            {{ $cat->nome }}, 
                                        </a>
                                    @else
                                        <a href="{{ Route('site.categoria', [str_slug($cat->nome,'_')]) }}" data-toggle="tooltip" title="Ver categoria" data-placement="right"> 
                                            {{ $cat->nome }} 
                                        </a>
                                    @endif
                                @endforeach
                            </p>

                            {{-- <p class="text_8 color_4">
                                @if(!empty($video->subcategoria->count() > 0))
                                <strong style="font-weight: bolder;">Sub-Categorias:</strong>
                                @endif 

                                @foreach($video->subcategoria as $sub)
                                    @if($video->subcategoria->count() > 1)
                                        <a href="{{ Route('site.subcategoria', [$sub->id]) }}" alt="{{$sub->nome}}" data-toggle="tooltip" data-placement="right" title="{{$sub->nome}}"> {{ $sub->nome }}
                                        </a>, 
                                    @else
                                        <a href="{{ Route('site.subcategoria', [$sub->id]) }}" alt="{{$sub->nome}}" data-toggle="tooltip" data-placement="right" title="{{$sub->nome}}"> {{ $sub->nome }}
                                        </a>
                                    @endif
                                @endforeach
                            </p> --}}
                        </div>

                        <div class="caption">
                            <p class="text_9 color_4">{{ str_limit($video->resumo, 50)  }}{{-- <a href="{{ Route('site.video', $video->slug) }}"><strong style="font-weight: bold;color: #4080ff;">Ver mais</strong></a> --}}
                            </p>
                        </div>
                        <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.video', $video->slug) }}">Ver mais </a><br><br>

                        <!-- compartilhar facebook -->
                        <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >
                        </div>
                        <!-- compartilhar twitter -->
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a> <br><br><br>
                        <!--div class="row">
                            <div class="col-md-12">
                                <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true"></div>
                            </div>
                        </div-->
                    </div>
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