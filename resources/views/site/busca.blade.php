@extends('layouts.site')

@section('pagina_titulo', 'Busca')

@section('content')
    <div class="wrap_6 wrap_7">
        <div class="row">
            @if(isset($str))
                <div class="wrap_6">
                    <div class="row">
                        <div class="col-md-12 wow fadeInLeft">
                            <h3 class="header_1 text_6 color_1 bg_3">Resultados encontrados para "{{$str}}"</h3>
                        </div>
                    </div>
                </div>

                @foreach($videos as $video)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                @if(!empty($video->imagem))
                                    @if($video->idioma=='portugues')
                                        <a data-type="video" href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="left" target="_blanck">
                                            <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$video->nome}}"></span>
                                        </a>
                                    @elseif($video->idioma=='ingles')
                                        <a data-type="video" href="{{ Route('site.video_en', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="left" target="_blanck">
                                            <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$video->nome}}"></span>
                                        </a>
                                    @elseif($video->idioma=='espanhol')
                                        <a data-type="video" href="{{ Route('site.video_es', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="left" target="_blanck">
                                            <span class="thumbnail" style="background: url('{{asset($video->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$video->nome}}"></span>
                                        </a>
                                    @endif
                                @else
                                    @if($video->idioma=='portugues')
                                        <a href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="left">
                                            <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$video->nome}}"></span>
                                        </a>
                                    @elseif($video->idioma=='ingles')
                                        <a href="{{ Route('site.video_en', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="left">
                                            <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$video->nome}}"></span>
                                        </a>
                                    @elseif($video->idioma=='espanhol')
                                        <a href="{{ Route('site.video_es', $video->slug) }}" data-toggle="tooltip" title="{{ $video->nome }}" data-placement="left">
                                            <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/video.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$video->nome}}"></span>
                                        </a>
                                    @endif 
                                @endif
                            </div>
                            <div class="caption_3">
                                <h3 class="text_4 color_3">
                                    @if($video->idioma=='portugues')
                                        <a href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="Ver vídeo" data-placement="bottom" target="_blanck">{{ $video->nome }}</a>
                                    @elseif($video->idioma=='ingles')
                                        <a href="{{ Route('site.video_en', $video->slug) }}" data-toggle="tooltip" title="Ver vídeo" data-placement="bottom" target="_blanck">{{ $video->nome }}</a>
                                    @elseif($video->idioma=='espanhol')
                                        <a href="{{ Route('site.video_es', $video->slug) }}" data-toggle="tooltip" title="Ver vídeo" data-placement="bottom" target="_blanck">{{ $video->nome }}</a>
                                    @endif 
                                </h3><br>

                                <h3 class="text_11 color_3">
                                    <strong>Palestrante:</strong> 
                                    @if(!empty($video->palestrante->nome === 'Terceiro Anjo'))
                                        <span class="text_11 color_3" >
                                        {{ str_limit($video->palestrante->nome, 25) }}</span>
                                    @else
                                        @if($video->palestrante->tipo=='palestrante')
                                            <a class="text_11 color_3" href="{{ Route('site.palestrante', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom" target="_blanck"> {{ str_limit($video->palestrante->nome, 25) }} </a>
                                        @elseif($video->palestrante->tipo=='programa')
                                            <a class="text_11 color_3" href="{{ Route('site.programa', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom" target="_blanck"> {{ str_limit($video->palestrante->nome, 25) }} </a>
                                        @elseif($video->palestrante->tipo=='producao')
                                            <a class="text_11 color_3" href="{{ Route('site.producao', $video->palestrante->slug) }}" data-toggle="tooltip" title="{{ $video->palestrante->nome }}" data-placement="bottom" target="_blanck"> {{ str_limit($video->palestrante->nome, 25) }} </a>
                                        @endif                                
                                    @endif
                                </h3><br>
                                <h3 class="text_11 color_3">
                                        @foreach($video->categoria as $cat)
                                            <strong>Categorias:</strong>
                                            @if($video->categoria->count() > 1)
                                                {{-- <a href="{{ Route('site.categoria', [$cat->id]) }}" target="_blanck" >  --}}
                                                <a href="{{ Route('site.categoria',$cat->slug) }}" data-toggle="tooltip" title="Ver categoria" data-placement="right" target="_blanck" > 
                                                    {{ $cat->nome }}, 
                                                </a>
                                            @else
                                                <a href="{{ Route('site.categoria',$cat->slug) }}" data-toggle="tooltip" title="Ver categoria" data-placement="right" target="_blanck" > 
                                                    {{ $cat->nome }} 
                                                </a>
                                            @endif
                                        @endforeach
                                    <br>
                                </h3>
                                <h3 class="text_11 color_3">
                                        @foreach($video->subcategoria as $sub)
                                            <strong>Sub-Categorias:</strong>
                                            @if($video->subcategoria->count() > 1)
                                                <a href="{{ Route('site.subcategoria',$sub->slug) }}" data-toggle="tooltip" title="Ver subcategoria" data-placement="right" target="_blanck">
                                                 {{ $sub->nome }}
                                                </a>, 
                                            @else
                                                <a href="{{ Route('site.subcategoria',$sub->slug) }}" data-toggle="tooltip" title="Ver subcategoria" data-placement="right" target="_blanck">
                                                {{ $sub->nome }}
                                                </a>
                                            @endif
                                        @endforeach
                                </h3><br><br>
                            </div>
                                @if($video->idioma=='portugues')
                                    <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.video_br', $video->slug) }}" target="_blanck" >Assistir Vídeo </a>
                                @elseif($video->idioma=='ingles')
                                    <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.video_en', $video->slug) }}" target="_blanck" >Assistir Vídeo </a>
                                @elseif($video->idioma=='espanhol')
                                    <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.video_es', $video->slug) }}" target="_blanck" >Assistir Vídeo </a>
                                @endif 
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
              
                @foreach($art as $artigo)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                @if(!empty($artigo->imagem))
                                    <a href="{{ Route('site.artigo', $artigo->slug) }}" data-toggle="tooltip" title="Ver artigo {{$artigo->nome}}" data-placement="left" target="_blanck">
                                        <span class="thumbnail" style="background: url('{{asset($artigo->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$artigo->nome}}"></span>
                                    </a>
                                @else
                                    <a href="{{ Route('site.artigo', $artigo->slug) }}" data-toggle="tooltip" title="Ver artigo" data-placement="left" target="_blanck">
                                        <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/artigo.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$artigo->nome}}"></span>
                                    </a>
                                @endif
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    <a href="{{ Route('site.artigo', $artigo->slug) }}" data-toggle="tooltip" title="Ver artigo {{$artigo->nome}}" data-placement="right" target="_blanck">{{ $artigo->nome }}</a>

                                    @if(!empty($artigo->autor))
                                        <small class="text_8 color_4"> 
                                            ({{ $artigo->autor }})
                                        </small>
                                    @endif
                                </h3><br>
                                <p class="text_8 color_4">
                                    {{-- {{ date('l, d M Y', strtotime($artigo->data)) }} --}}
                                    {{-- {{ $artigo->created_at->formatLocalized('%A, %d de %B de %Y') }} --}}
                                    {{-- <i class="fa fa-clock-o" aria-hidden="true"></i> --}}
                                    {{-- {{ $artigo->created_at->diffForHumans()}}  --}}
                                </p>

                                <p class="text_9 color_3">{{ str_limit($artigo->resumo, 500)  }}</p>

                                <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.artigo', $artigo->slug) }}" target="_blanck" >Ler Artigo</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach

                @foreach($pales as $palestrante)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                @if(!empty($palestrante->imagem))
                                    <a href="{{ Route('site.palestrante', $palestrante->slug) }}" data-toggle="tooltip" title="Ver palestrante {{$palestrante->nome}}" data-placement="bottom" target="_blanck">
                                        <span class="thumbnail" style="background: url('{{asset($palestrante->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$palestrante->nome}}"></span>
                                    </a>
                                @else
                                    <a href="{{ Route('site.palestrante', $palestrante->slug) }}" data-toggle="tooltip" title="Ver palestrante {{$palestrante->nome}}" data-placement="bottom" target="_blanck">
                                        <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/palestrante.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$palestrante->nome}}"></span>
                                    </a>
                                @endif
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    @if(!empty($palestrante->nome === 'Terceiro Anjo'))
                                        <h3 class="text_11 color_3" >
                                        {{ str_limit($palestrante->nome, 25) }}</h3>
                                    @else
                                        @if($palestrante->tipo=='palestrante')
                                            <a class="text_11 color_3" href="{{ Route('site.palestrante', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="bottom"> {{ str_limit($palestrante->nome, 25) }} </a>
                                        @elseif($palestrante->tipo=='programa')
                                            <a class="text_11 color_3" href="{{ Route('site.programa', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="bottom"> {{ str_limit($palestrante->nome, 25) }} </a>
                                        @elseif($palestrante->tipo=='producao')
                                            <a class="text_11 color_3" href="{{ Route('site.producao', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="bottom"> {{ str_limit($palestrante->nome, 25) }} </a>
                                        @endif                                
                                    @endif

                                    @if(!empty($palestrante->profissao))
                                        <small> ({{ $palestrante->profissao }}) </small>
                                    @endif
                                </h3><br>
                                <p class="text_9 color_4">{{ str_limit($palestrante->resumo, 500)  }} </p>
                            </div>

                            @if(empty($palestrante->nome === 'Terceiro Anjo'))
                                {{-- <span class="text_11 color_3" >
                                {{ str_limit($palestrante->nome, 25) }}</span>
                            @else --}}
                                @if($palestrante->tipo=='palestrante')
                                    <a href="{{ Route('site.palestrante', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="bottom"  target="_blanck" class="btn_1 text_7 color_1 bg_3"> Ver Palestrante </a>
                                @elseif($palestrante->tipo=='programa')
                                    <a href="{{ Route('site.programa', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="bottom"  target="_blanck" class="btn_1 text_7 color_1 bg_3"> Ver Palestrante </a>
                                @elseif($palestrante->tipo=='producao')
                                    <a href="{{ Route('site.producao', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="bottom"  target="_blanck" class="btn_1 text_7 color_1 bg_3"> Ver Palestrante </a>
                                @endif                                
                            @endif
                            <div class="clearfix"></div> 
                        </div>
                    </div>
                @endforeach

                @foreach($ser as $serie)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                @if(!empty($serie->imagem))
                                    <a href="{{ Route('site.serie', $serie->slug) }}" data-toggle="tooltip" title="Ver série {{$serie->nome}}" data-placement="left">
                                        <span class="thumbnail" style="background: url('{{asset($serie->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$serie->nome}}"></span>
                                    </a>
                                @else
                                    <a href="{{ Route('site.serie', $serie->slug) }}" data-toggle="tooltip" title="Ver série {{$serie->nome}}" data-placement="left">
                                        <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/serie.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$serie->nome}}"></span>
                                    </a>
                                @endif
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    <a href="{{ Route('site.serie', $serie->slug) }}" data-toggle="tooltip" title="Ver série" data-placement="right">
                                    {{ $serie->nome }}</a>
                                </h3>
                                <p class="text_9 color_4">{{ str_limit($serie->resumo, 500)  }} </p><br>
                            </div>
                                <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.serie', $serie->slug) }}">Assistir Série</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach

                @foreach($gal as $galeria)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                @if(!empty($galeria->imagem))
                                    <a href="{{Route('galeria', $galeria->slug)}}" data-toggle="tooltip" title="Ver galeria" data-placement="left" target="_blanck" >
                                        <span class="thumbnail" style="background: url('{{asset($galeria->img)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;"  alt="{{$galeria->nome}}"></span>
                                    </a>
                                @else
                                    <a href="{{Route('galeria', $galeria->slug)}}" data-toggle="tooltip" title="Ver galeria" data-placement="left" target="_blanck" >
                                        <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/galeria.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;"  alt="{{$galeria->nome}}"></span>
                                    </a>
                                @endif
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    <a href="{{Route('galeria', $galeria->slug)}}" data-toggle="tooltip" title="Ver galeria" data-placement="right" target="_blanck" >{{ $galeria->nome }}</a>
                                </h3>

                                <p class="text_9 color_4">{{ str_limit($galeria->resumo, 500)  }}
                            </div>
                                <a class="btn_1 text_7 color_1 bg_3" href="{{Route('galeria', $galeria->slug)}}">Visualizar Galeria</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
                
                @foreach($cats as $categoria)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                @if(!empty($categoria->imagem))
                                    <a href="{{ Route('site.categoria', $categoria->slug) }}" data-toggle="tooltip" title="Ver categoria" data-placement="left">
                                        <span class="thumbnail" style="background: url('{{asset($categoria->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$categoria->nome}}"></span>
                                    </a>
                                @else
                                    <a href="{{ Route('site.categoria', $categoria->slug) }}" data-toggle="tooltip" title="Ver categoria" data-placement="left">
                                        <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/categoria.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$categoria->nome}}"></span>
                                    </a>
                                @endif
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    <a href="{{ Route('site.categoria', $categoria->slug) }}" data-toggle="tooltip" title="Ver categoria" data-placement="right">
                                    {{ $categoria->nome }}</a>
                                </h3><br>

                                <p class="text_9 color_4">
                                {{ str_limit($categoria->descricao, 500)  }}</p><br>
                            </div>
                                <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.categoria', $categoria->slug) }}">Visualizar Categoria</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach

                @foreach($aud as $audio)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                {{-- <a href="{{ Route('radio') }}" data-toggle="tooltip" title="Ver Áudio" data-placement="left"> --}}
                                    @if($audio->publicar === 'sim')
                                        <span class="thumbnail" style="background: url('{{ asset('/img/modelo_img_music.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$audio->nome}}">
                                            <audio style="background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;" controls>
                                                <source src="{{ $audio->audio }}" type="audio/ogg">
                                                <source src="{{ $audio->audio }}" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                            </audio>
                                        </span>
                                    @elseif($audio->publicar === 'nao')
                                        <span class="thumbnail" style="background: url('{{ asset('/img/modelo_img_music.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$audio->nome}}">
                                            <audio style="background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;" controls>
                                                <source src="{{ $audio->audio }}" type="audio/ogg">
                                                <source src="{{ $audio->audio }}" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                            </audio>
                                        </span>
                                    @endif
                                {{-- </a> --}}
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    <a href="{{ Route('radio') }}" data-toggle="tooltip" title="Ver Áudio" data-placement="right">
                                    {{ $audio->nome }}</a>
                                </h3><br>

                                <p class="text_9 color_4">
                                {{ str_limit($audio->descricao, 500)  }}</p><br>
                            </div>
                                <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('radio') }}">Visualizar Áudio</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
                
                {{-- @foreach($sub as $subcategoria)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                <a href="{{ Route('site.subcategoria',$subcategoria->slug) }}" target="_blanck" >
                                    <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/subcategoria.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 262px;" alt="{{$subcategoria->nome}}"></span>
                                </a>
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    <a href="{{ Route('site.subcategoria',$subcategoria->slug) }}" target="_blanck" >
                                        {{ $subcategoria->nome }}
                                    </a>
                                </h3><br>
                            </div>
                            <a class="btn_1 text_7 color_1 bg_3" href="{{ Route('site.subcategoria',$subcategoria->slug) }}">Visualizar Subcategoria</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach --}}

                {{-- @foreach($use as $user)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                <a data-type="lightbox" href="{{asset($user->imagem)}}">
                                    <div class="div-foto">
                                        <img src="{{asset($user->imagem)}}" alt="{{ $user->name }}"/>
                                    </div>
                                </a>
                            </div>
                            <div class="caption_3">
                                <h3 class="text_4 color_3">
                                    <a href="">
                                    {{ $user->name }}</a>

                                    @if(!empty($user->profissao))
                                        <small> ({{ $user->profissao }}) </small>
                                    @endif
                                </h3>

                                <p class="text_9 color_4">{{ str_limit($user->resumo, 600)  }}
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach --}} 
            @endif


            {{-- <div align="center">
                {{ $str->links() }}
            </div> --}}
        </div>
    </div>
@endsection
{{-- aud --}}