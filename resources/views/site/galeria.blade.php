@extends('layouts.site')

@section('pagina_titulo', $galeria->nome)

@section('content')
    <!-- Galeria -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('/css/galeria/jgallery.min.css?v=1.6.0')}}" />
    <script type="text/javascript" src="{{asset('/js/galeria/jgallery.min.js?v=1.6.0')}}"></script>
    <script type="text/javascript" src="{{asset('/js/galeria/touchswipe.min.js')}}"></script>
    <script type="text/javascript">
    $( function() {
        $( '#gallery' ).jGallery( { height: '100vh', canChangeMode: false } ); //OK sem full scream
    } );
    </script>
    
    @if($galeria->publicar=='sim')
        <div class="wrap_6">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <h3 class="header_1 text_6 color_1 bg_3">
                        <a href="{{ Route('galerias_all')}}">Galerias</a> / 
                        <label style="color: rgba(230, 230, 230, 0.54);">{{$galeria->nome}}</label>
                    </h3>
                </div>
            </div>
        </div>
        @if($galeria->ImgGaleria()->count())
        <div class="wrap_7">
            <div class="wrap_1">
                <div class="row">
                    <div class="col-md-12 wow fadeInRight">
                        <p class="text_12 color_4">
                            {{ $galeria->resumo }}
                        </p><br><br>

                        <div id="gallery">
                            <div class="album" data-jgallery-album-title="Album 1">
                            @foreach($img_galerias as $imagem)
                                <a href="{{ asset($imagem->img_large) }}"><img src="{{ asset($imagem->img_large) }}" alt="{{ $imagem->descricao }}" /></a>
                                {{--  <a href="{{ asset($imagem->img_large) }}"><img src="{{ asset($imagem->img_large) }}" alt="{{ str_limit($imagem->descricao, 50) }}" /></a>  --}}
                            @endforeach
                            </div>
                            {{-- <div class="album" data-jgallery-album-title="Album 2">
                                <a href="images/large/4.jpg"><img src="images/thumbs/4.jpg" alt="Photo 4" /></a>
                                <a href="images/large/5.jpg"><img src="images/thumbs/5.jpg" alt="Photo 5" /></a>
                                <a href="images/large/6.jpg"><img src="images/thumbs/6.jpg" alt="Photo 6" /></a>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else 
            <br>
            <h5 class="text_4 color_3">
                Desculpe, nenhuma imagem encontrada para essa galeria.
                <a href="{{ Route('site.categorias_all')}}" title="Veja outra Galeria"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para escolher outra galeria.</strong></a> 
            </h5><br><br>
        @endif
    @else
        <br>
        <h5 class="text_4 color_3">
            Desculpe, a galeria "{{$galeria->nome}}" não está disponivel. {{-- Faça outra busca. --}}
            <a href="{{ Route('galerias_all')}}" title="Veja outra Galeria"><strong style="font-weight: bold;color: #ec1019;"> Click aqui para ver outras galerias.</strong></a> 
        </h5><br><br>
    @endif
@endsection