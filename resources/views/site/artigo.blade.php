@extends('layouts.site')
@section('pagina_titulo', "Artigo - ".$artigos->nome)
@section('content')
    @if($artigos->publicar=='sim')
        <div class="wrap_6 wrap_7">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="header_1 text_6 color_1 bg_3">
                        <a href="{{ Route('site.artigos')}}" data-toggle="tooltip" title="Ir a página de artigo" data-placement="top">Artigos</a> / 
                        <label style="color: rgba(230, 230, 230, 0.54);">{{ $artigos->nome }}</label>
                    </h3>
                    <div class="wrap_4">
                        <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                            <div class="put-left">
                                @if(!empty($artigo->imagem))
                                    <span alt="Imagem artigo {{ $artigos->nome }}" title="Imagem artigo {{ $artigos->nome }}" class="thumbnail" style="background: url('{{asset($artigos->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;"></span>
                                @else
                                    <span alt="Imagem artigo {{ $artigos->nome }}" title="Imagem artigo {{ $artigos->nome }}" class="thumbnail" style="background: url('{{ asset('/img/Imagens_Padrao/artigo.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; width: 254px;"></span>
                                @endif
                            </div>
                            <div class="caption_3">
                                <h3 class="text_11 color_3">
                                    @if(!empty($artigos->autor))
                                    Autor:
                                        {{ $artigos->autor }}
                                    @endif
                                </h3><br>
                                <p class="text_8 color_4" >
                                    {{--
                                    {{ $artigos->created_at->formatLocalized('%A, %d de %B de %Y') }}
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{ $artigos->created_at->diffForHumans()}} 
                                     {{ date('D, d M, Y', strtotime($artigos->data)) }} 
                                    --}}
                                </p>
                                <p class="text_12 color_4" style="text-align: justify;">
                                    {!! $artigos->conteudo !!}
                                </p><br>
                                @if(isset($artigos->file))
                                     <a class="btn_1 text_7 color_1 bg_3" target="_blanck" href="{{ asset($artigos->file) }}">Download</a>
                                @endif
                                {{-- <button class="btn-btn-default" type="button" onclick="window.print()"><i class="fa fa-print"></i></button> --}}
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <br>
        <h3 class="text_4 color_3">
            Desculpe, o artigo "{{$artigos->nome}}" não está disponivel. {{-- Faça outra busca. --}}
            <a href="{{ Route('site.artigos')}}"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para ver outros artigos.</strong></a> 
        </h3><br><br>
    @endif
@endsection 