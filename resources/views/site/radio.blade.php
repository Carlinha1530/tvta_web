@extends('layouts.site')

@section('pagina_titulo', 'Rádio')

@section('content')

    <!-- <script src="{{asset('/lib/radio.js')}}"></script> -->
   <style>
    .flowplayer {
        background-image: url(/img/Streaming1.png);
        /* opacity:0.65; */
    }
   </style>   

    <div class="wrap_6 wrap_7">
        <div class="row">
            <div class="col-md-12">
                <h3 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">Rádio Terceiro Anjo</h3>
                <div class="wrap_4">
                    <!-- TESTE 4 MediaElement -->
                    {{--  <audio preload="none" controls="controls">
                        <source src="rtmp://streamer1.streamhost.org/salive/GMI3anjoa" type="video/mp4"> 
                        <source src="rtmp://streamer1.streamhost.org/salive/GMI3anjoa" type="audio/rtmp">
                    </audio>  --}}

                    <!-- TESTE 2 flowplayer -->
                    <div id="player" class="flowplayer fixed-controls" style="width:600px; height:338px;"></div>

                    <!-- // TESTE 5 FLOWPLAY -->
                    <!-- <div id="fp-audio" data-audio-only="true" class="fp-fat fp-edgy fp-outlined">
                        <video autoplay data-title="Autoplay">
                            <source type="application/x-mpegurl" src="http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8">
                        </video>
                    </div> -->

                    <!-- jwPlayer 1 -->
                    <!-- <div id="streaming">Carregando rádio...</div> -->
                </div>
            </div>
        </div>
        <hr>
        @if($audios->count())
        <div class="row">
            <div class="col-md-12">
                <h3 class="header_2 text_6 color_1 bg_3 wow fadeInLeft">Faça download de nossos áudios</h3>
                <div class="wrap_1">
                    <div class="box_1 wow fadeInLeft">
                      {{-- @if(isset($audios->publicar))
                        <div class="caption_2">
                            <h3 class="text_4 color_3">
                                Faça download de nossos áudios
                            </h3>
                        </div><br><br>
                      @endif --}}

                      @foreach($audios as $audio)
                      <div class="wrap_4" id="{{ $audio->id}}">
                          <div class="box_1 wow fadeInLeft" data-wow-delay=".4s">
                              <div class="caption_3">
                                  <h4 class="text_4 color_3">
                                      <a href="">{{ $audio->nome}}</a>
                                  </h4><br>
                                  <audio controls>
                                      <source src="{{ $audio->audio }}" type="audio/ogg">
                                      <source src="{{ $audio->audio }}" type="audio/mpeg">
                                      Your browser does not support the audio element.
                                  </audio>
                                  <p class="text_9 color_4">{{ $audio->descricao}}</p>
                                  {{-- @if(isset($audio->audio))
                                    <a class="btn_1 text_7 color_1 bg_3" href="download/{{$audio->audio}}">Download</a>
                                  @endif --}}
                              </div>
                              <div class="clearfix"></div>
                          </div>
                      </div>
                      @endforeach

                      <div align="center">
                          {!! $audios->links() !!}
                      </div>
                    </div>
                </div>
            </div>
        </div> 
        @endif      
    </div>
    
@endsection
