@extends('layouts.site')

@section('pagina_titulo', $videos->nome)

@section('content')
    @if($videos->publicar=='sim')
    	<div class="wrap_6 wow fadeInLeft">
            <h3 class="header_1 text_6 color_1 bg_3">
                <a href="{{ Route('site.videos_all')}}" data-toggle="tooltip" title="Ir para a página de vídeos" data-placement="top">Vídeos</a> / 
                <label style="color: rgba(230, 230, 230, 0.54);">{{ $videos->nome }}</label>
            </h3>
        </div>
        <div class="video-bg">
            <div id="video-container" class="embed-responsive embed-responsive-16by9">
                <!--iframe width="560" height="315" src="
                https://www.youtube.com/embed/lH8zdCqiVzc?feature=oembed&amp;autoplay=1
                " frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe-->

                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $videos->link_video}}?feature=oembed&amp;autoplay=1" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe> --}}

                <iframe src="{{ $videos->link_video }}" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

            </div>
            
            @if($videos->doacao === 'sim')
            <div class="video-donate">
                <a href="{{ Route('quero_doar') }}" class="video-donate-alert clearfix">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    Gostou deste vídeo? Precisamos do seu apoio para continuar.
                    <span class="pull-right link-underline">Saiba como ajudar</span>
                </a>
            </div>
            @endif
        </div><br>

        <div class="wrap_7">
            <div class="wrap_1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap_4">
                            <div class="box_1 wow fadeInLeft" data-wow-delay=".6s">
                                <div class="caption_3">
                                    <h3 class="text_11 color_4">
                                        @if(!empty($videos->serie->count() > 0))
                                            <strong style="font-weight: bolder;">Série:</strong>
                                        @endif         

                                        @foreach($videos->serie as $ser)
                                            @if(empty($ser->nome == 'Terceiro Anjo'))
                                                @if($videos->serie->count() > 1)
                                                    <a href="{{ Route('site.serie', $ser->slug) }}" data-toggle="tooltip" title="{{ $ser->nome }}" data-placement="bottom">
                                                        {{ $ser->nome }} 
                                                    </a>,
                                                @else
                                                    <a href="{{ Route('site.serie', $ser->slug) }}" data-toggle="tooltip" title="{{ $ser->nome }}" data-placement="bottom">
                                                        {{ $ser->nome }} 
                                                    </a>
                                                @endif
                                            @else
                                                <span data-toggle="tooltip" title="Desculpe, a série '{{ $ser->nome }}' não está disponivel" data-placement="right">{{ $ser->nome }} </span>
                                            @endif
                                        @endforeach  
                                    </h3>


                                    <h3 class="text_11 color_4">
                                        @if(empty($videos->palestrante->nome === 'Terceiro Anjo'))
                                            <strong style="font-weight: bolder;">Palestrante:</strong>
                                            @if($videos->palestrante->tipo=='palestrante')
                                                <a href="{{ Route('site.palestrante', $videos->palestrante->slug) }}" data-toggle="tooltip" title="{{ $videos->palestrante->nome }}" data-placement="right">{{ $videos->palestrante->nome }} </a>
                                            @elseif($videos->palestrante->tipo=='programa')
                                                <a href="{{ Route('site.programa', $videos->palestrante->slug) }}" data-toggle="tooltip" title="{{ $videos->palestrante->nome }}" data-placement="right">{{ $videos->palestrante->nome }} </a>
                                            @elseif($videos->palestrante->tipo=='producao')
                                                <a href="{{ Route('site.producao', $videos->palestrante->slug) }}" data-toggle="tooltip" title="{{ $videos->palestrante->nome }}" data-placement="right">{{ $videos->palestrante->nome }} </a>
                                            @endif
                                        @endif
                                    </h3>

                                    <h3 class="text_11 color_4">
                                        @if(!empty($videos->categoria->count() > 0))
                                        <strong style="font-weight: bolder;">Categorias:</strong>
                                        @endif  
                                        
                                        @foreach($videos->categoria as $cat)
                                            @if($videos->categoria->count() > 1)
                                                <a href="{{ Route('site.categoria',$cat->slug) }}" data-toggle="tooltip" title="{{ $cat->nome }}" data-placement="right"> 
                                                    {{ $cat->nome }}, 
                                                </a>
                                            @else
                                                <a href="{{ Route('site.categoria',$cat->slug) }}" data-toggle="tooltip" title="{{ $cat->nome }}" data-placement="right"> 
                                                    {{ $cat->nome }}
                                                </a>
                                            @endif
                                        @endforeach
                                    </h3>

                                    <h3 class="text_11 color_4">
                                        @if(!empty($videos->subcategoria->count() > 0))
                                        <strong style="font-weight: bolder;">Sub-Categorias:</strong>
                                        @endif  
                                
                                        @foreach($videos->subcategoria as $sub)
                                            @if($videos->subcategoria->count() > 1)
                                                <a href="{{ Route('site.subcategoria',$sub->slug) }}" data-toggle="tooltip" title="{{ $sub->nome }}" data-placement="right"> {{ $sub->nome }}
                                                </a>, 
                                            @else
                                                <a href="{{ Route('site.subcategoria',$sub->slug) }}" data-toggle="tooltip" title="{{ $sub->nome }}" data-placement="right"> {{ $sub->nome }}
                                                </a>
                                            @endif
                                        @endforeach
                                    </h3>

                                    <p class="text_9 color_4">
                                        {!! $videos->descricao !!}
                                    </p>
                                    
                                    {{-- Série AKI
                                    @if(!empty($videos->categoria->count() > 0))
                                        <br><strong style="font-weight: bolder;">Categorias:</strong>
                                    @endif   
                                    --}}
                                </div>

                                <div class="clearfix"></div>
                            </div><br>
                            <!-- compartilhar twitter -->
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ Route('site.video', $videos->slug) }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                            <!-- compartilhar facebook -->
                            <div class="fb-share-button" data-href="{{ Route('site.video', $videos->slug) }}" data-layout="button_count" >Compartilhar</div>
                            <!-- curtir facebook -->
                            <div class="fb-like" data-href="{{ Route('site.video', $videos->slug) }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" >Curtir</div><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <br>
        <h5 class="text_4 color_3">
            Desculpe, o vídeo "{{$videos->nome}}" não está disponivel. {{-- Faça outra busca. --}}
            <a href="{{ Route('site.videos_all')}}"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para ver outros vídeos.</strong></a> 
        </h5><br><br>
    @endif   
@endsection