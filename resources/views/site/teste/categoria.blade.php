@extends('layouts.site')

@section('pagina_titulo', $cats->nome)

@section('content')
    <div class="wrap_6 wow fadeInLeft">
        <div class="row">
            <h2 class="header_1 text_6 color_1 bg_3">
                <a href="{{ Route('site.categorias_all')}}">Categorias</a> / 
                <label style="color: rgba(230, 230, 230, 0.54);">{{ $cats->nome }}</label>
            </h2>
        </div>
    </div>
    <div class="wrap_1">
        <div class="container">
          <div class="row">

            <!-- Nav tabs -->
            <ul id="tabEtapas" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#todos" aria-controls="todos" role="tab" data-toggle="tab">Todos</a>
                </li>
                @foreach($subcategorias as $subcategoria)
                <li role="presentation">
                    <a href="#{{$subcategoria->id}}" aria-controls="subcat" role="tab" data-toggle="tab"> 
                        {{ $subcategoria->nome }}
                    </a>
                </li>
               @endforeach
            </ul><br> 
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="todos">
                    @foreach($videos as $video)
                    <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                        <div class="box_1">
                            <a data-type="video" href="{{ Route('site.video', [$video->id]) }}">    
                                <img src="{{asset($video->imagem)}}" alt="{{ $video->nome }}"/>
                            </a>
                            <div class="caption">   
                                <h5 class="text_7 color_3">
                                    <a href="{{ Route('site.video', [$video->id]) }}">
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
                                <a href="{{ Route('site.video', [$video->id]) }}"><strong style="font-weight: bold;">Ver mais</strong></a></p>
                                </p>

                                <div class="fb-like" data-href="{{ $video->link_video }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false" >Curtir</div>

                                <div class="fb-share-button" data-href="{{ $video->link_video }}" data-layout="button_count" >Compartilhar</div><br><br>

                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ $video->link_video }}" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                            </div><br>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div role="tabpanel" class="tab-pane" id="{{$subcategoria->id}}">
                    <h2>Etapa 2</h2>
                    {{-- @if($cats->subcategoria === $subcategoria->id) 
                        @foreach(($videos->subcategoria === $subcategorias->id) as $video)
                            {{ $video->nome }}
                        @endforeach
                     @endif --}}
                </div>
            </div>
          </div>
        </div>

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
                        <a data-type="video" href="{{ Route('site.video', [$video->id]) }}">    
                            <img src="{{asset($video->imagem)}}" alt="{{ $video->nome }}"/>
                        </a>
                        <div class="caption">   
                            <h5 class="text_7 color_3">
                                <a href="{{ Route('site.video', [$video->id]) }}">
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
                            <a href="{{ Route('site.video', [$video->id]) }}"><strong style="font-weight: bold;">Ver mais</strong></a></p>
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
    </div>
    <div align="center">
        {{-- {!! $videos->links() !!} --}}
    </div>
@endsection

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
{{-- <script src="/js/validacao/bootstrap.min.js"></script> --}}
{{-- <script src="/js/validacao/validacoes_navtab.js"></script> --}}