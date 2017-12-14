<div class="col-md-8 wow fadeInLeft">
    <h3 class="header_1 text_6 color_1 bg_3 maxheight">
    Artigos
        <a href="{{ Route('site.artigos') }}" style="float: right;" data-toggle="tooltip" title="Confira Todos os nossos Artigos" data-placement="top" >Clique aqui e veja todos os Artigos</a>
    </h3>
    @foreach($artigos as $artigo)
    <div class="wrap_4">
        <div class="box_1 wow fadeInLeft">
            <div class="put-left">
                @if(!empty($artigo->resumo))
                    <a href="{{ Route('site.artigo', $artigo->slug)}}" data-toggle="tooltip" title="{{ $artigo->nome }}" data-placement="left">
                        @if(!empty($artigo->imagem))
                        <span class="thumbnail" style="background: url('{{asset($artigo->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;"></span>
                        @else
                        <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_Padrao/artigo.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;" alt="{{ asset('/img/Imagens_Padrao/artigo.png') }}"></span>
                        @endif
                    </a>
                @else
                    @if(!empty($artigo->imagem))
                        <span class="thumbnail" style="background: url('{{asset($artigo->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;"></span>
                    @else
                        <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_Padrao/artigo.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;" alt="{{ asset('/img/Imagens_Padrao/artigo.png') }}"></span>
                    @endif

                @endif
            </div>
            <div class="caption_3">
                <h3 class="text_11 color_3">
                    @if(!empty($artigo->resumo))
                        <a href="{{ Route('site.artigo', $artigo->slug)}}" data-toggle="tooltip" title="{{ $artigo->nome }}" data-placement="right">{{ $artigo->nome }}</a>
                    @else
                        {{ $artigo->nome }}
                    @endif
                </h3>

                @if(!empty($artigo->autor))
                    <small class="text_8 color_4"> 
                        {{ $artigo->autor }}
                    </small><br><br>
                @endif

                {{--<p class="text_8 color_4">
                    {{ $artigo->created_at->formatLocalized('%A, %d de %B de %Y') }}
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                    {{ $artigo->created_at->diffForHumans()}} 
                     Em {{ date('d/m/Y', strtotime($artigo->created_at)) }}  
                </p>--}}

                @if(!empty($artigo->resumo))
                    <p class="text_12 color_3">{{ str_limit($artigo->resumo, 500)  }} 
                    </p><br>
                
                    <a class="btn_1 text_7 color_1 bg_3" title="{{$artigo->nome}}" href="{{ Route('site.artigo', $artigo->slug)}}">Ler Artigo</a>
                @endif

                @if(isset($artigo->file))
                    <a class="btn_1 text_7 color_1 bg_3" href="download/{{$artigo->file}}" title="fazer o download do artigo">Download</a>
                @endif
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    @endforeach
</div>