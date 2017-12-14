@extends('layouts.site')
@section('pagina_titulo', "Ao Vivo")
@section('content')

    <style>
        .img{
            background: url('{{ asset('img/logos/television.png') }}') no-repeat center center;
            background-size: cover; 
            display: block;  
            height: 622px; 
            max-height: 100%; 
            width: 101%;"
            margin-left: -1%;            
        }
        .img2{
            background: url('{{ asset('img/logos/television1.png') }}') no-repeat center center;
            background-size: cover; 
            display: block;  
            height: 622px; 
            max-height: 100%; 
            width: 101%;"
            margin-left: -1%;
        }
        .stream{
            margin-left: 7.6%;
            margin-top: 3.3%;
            width: 85%;
            height: 85.7%;
        }   
        @media screen and (max-width: 480px){
          .img{
            height: 149px; 
            width: 100%;" 
          }
        }
    </style>

    <div class="wrap_6 wrap_7">
        <div class="row">
            @if(!empty($aovivo->titulo))
                <h3 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">
                    {{ $aovivo->titulo }}
                </h3>
            @else
                <h3 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">
                    Ao Vivo em Português
                </h3>
            @endif
        </div>

        @if(!empty($aovivo->link_video) )
            <div id="video-container" class="streaming img " alt="Inscreva-se e fique por dentro de nossas transmssões" title="Imagem Alternativa Streaming">
                <iframe class="stream" src="{{ $aovivo->link_video }}" width="853" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen title="Streaming Ao Vivo"></iframe>
                {{-- <iframe class="stream" src=" https://www.youtube.com/embed/live_stream?channel=UCkSu5ibA15OcBWTjop72dPA&autoplay=1&controls=2" width="853" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
            </div><br><br>
        @else
            <div id="video-container" class="streaming img2 wow fadeInRight" alt="Inscreva-se e fique por dentro de nossas transmssões" title="Imagem Alternativa Streaming">
            </div><br><br> 
        @endif
        
        @if(!empty($aovivo->descricao) )
            <div class="text_12 color_3">
                {!! $aovivo->descricao !!}
            </div><br>
        @endif

        {{--  @if(!empty($aovivo->link_videoen) && !empty($aovivo->link_videoes) )  --}}
            <div class="container">
                <div class="row">
                    <div class="info">
                        <div class="col-md-12">
                            <a class="btn_2 text_18 color_1 bg_3" href="{{ url('/aovivoen') }}">Assista em Inglês</a>
                            <a class="btn_2 text_18 color_1 bg_3" href="{{ url('/aovivoes') }}">Assista em Espanhol</a>
                        </div>
                    </div>
                </div>
            </div><br><br><br>
        {{--  @endif  --}}
        
        @include('layouts._site._newsletter')

    </div> 
    
@endsection 