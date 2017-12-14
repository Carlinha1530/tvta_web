@extends('layouts.site')

@section('pagina_titulo', 'Artigos')

@section('content')
	<div class="wrap_6 wrap_7">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">Artigos</h2>

					@foreach($artigos as $artigo)
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                @if(!empty($artigo->resumo))
                                    <a href="{{ Route('site.artigo', $artigo->slug) }}" data-toggle="tooltip" title="Artigo {{ $artigo->nome }}" alt="{{ $artigo->nome }}" data-placement="left">
                                        @if(!empty($artigo->imagem))
                                            <img class="thumbnail" style="background: url('{{asset($artigo->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px; padding: 0px;"></img>
                                        @else
                                            <img class="thumbnail" style="background: url('{{ asset('/img/Imagens_Padrao/artigo.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px; padding: 0px;"></img>
                                        @endif
                                    </a>
                                @else
                                    @if(!empty($artigo->imagem))
                                        <img class="thumbnail" style="background: url('{{asset($artigo->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px; padding: 0px;" title="{{ $artigo->nome }}" alt="{{ $artigo->nome }}"></img>
                                    @else
                                        <img class="thumbnail" style="background: url('{{ asset('/img/Imagens_Padrao/artigo.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px; padding: 0px;" title="{{ $artigo->nome }}" alt="{{ $artigo->nome }}"></img>
                                    @endif
                                @endif
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    @if(!empty($artigo->resumo))
                                        <a href="{{ Route('site.artigo', $artigo->slug) }}" data-toggle="tooltip" title="Ver artigo" data-placement="right">
                                            {{ $artigo->nome }}
                                        </a>
                                    @else
                                        {{ $artigo->nome }}
                                    @endif

                                    @if(!empty($artigo->autor))
                                        <h5 class="text_8 color_4"> 
                                            ({{ $artigo->autor }})
                                        </h5>
                                    @endif
                                </h3><br>

                                @if(!empty($artigo->resumo))
                                    <p class="text_12 color_3">{{ str_limit($artigo->resumo, 500)  }} 
                                    </p><br>
                                
                                    <a class="btn_1 text_7 color_1 bg_3" title="{{$artigo->nome}}" href="{{ Route('site.artigo', $artigo->slug)}}">Ler Artigo</a>
                                @endif
                                
                                @if(isset($artigo->file))
                                    <a class="btn_1 text_7 color_1 bg_3" href="artigos/download/{{$artigo->file}}">Download</a> {{-- Baixa pelo controller --}}
                                    {{-- <a class="btn_1 text_7 color_1 bg_3" target="_blanck"  href="{{ asset($artigo->file) }}">Download</a>--}} {{-- abri no navegador o arquivo pdf --}} 
                                    {{-- <a class="btn_1 text_7 color_1 bg_3" href="{{ asset('file/info.pdf') }}">ler navegador</a> --}} {{-- Baixa direto de uma pagina --}}
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
					@endforeach
					<div align="center">
				        <!-- Paginação -->
				        {!! $artigos->links() !!}
				    </div>
                </div>
            </div>
        </div>
@endsection