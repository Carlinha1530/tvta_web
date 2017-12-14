@extends('layouts.site')

@section('pagina_titulo', 'Rádio')

@section('content')

   
    <!-- <link rel="stylesheet" href="//releases.flowplayer.org/7.0.4/skin/skin.css">
    <script src="//releases.flowplayer.org/7.0.4/flowplayer.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.4.min.js"></script> -->
    
    <!-- <link rel="stylesheet" href="{{asset('/lib/flowplayer-7.0.4/skin/skin.css')}}">
    <script src="{{asset('/lib/flowplayer-7.0.4/flowplayer.min.js')}}"></script> -->

    <script src="{{asset('/lib/radio.js')}}"></script>


    <!-- FlowPlayer -->
    <!-- <link rel="stylesheet" href="//releases.flowplayer.org/audio/flowplayer.audio.css">
    <script src="//releases.flowplayer.org/7.1.2/flowplayer.min.js"></script>
    <script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.light.min.js"></script>
    <script src="//releases.flowplayer.org/audio/flowplayer.audio.min.js"></script> -->
   
    <link rel="stylesheet" href="{{asset('/lib/flowplayer-7.0.4/style_radio.css')}}">
    <link rel="stylesheet" href="{{asset('/lib/flowplayer-7.0.4/flowplayer.audio.css')}}">
    <script src="{{asset('/lib/flowplayer-7.0.4/flowplayer.min.js')}}"></script>
    <script src="{{asset('/lib/flowplayer-7.0.4/flowplayer.hlsjs.light.min.js')}}"></script>
    <script src="{{asset('/lib/flowplayer-7.0.4/flowplayer.audio.min.js')}}"></script>

    <div class="wrap_6 wrap_7">
        <div class="row">
            <div class="col-md-12">
                <h3 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">Rádio Terceiro Anjo</h3>
                <div class="wrap_4">
                    <!--  TESTE 1 JwPlayer -->
                    <!-- <div id="streaming">Carregando rádio...</div> -->
                    
                    <!-- TESTE 2 flowplayer -->
                    <!-- <div id="player" class="fixed-controls"  style="width:600px; height:338px;"></div> -->
                    
                    
                    <!-- // TESTE 3 FLOWPLAY -->
                    <!-- <div data-aspect-ratio="47:25" class="flowplayer no-volume">
                       <video autoplay>
                          <source type="video/webm"
                                  src="//edge.flowplayer.org/black/470x250.webm">
                          <source type="video/mp4"
                                  src="//edge.flowplayer.org/black/470x250.mp4">
                        </video>
                    </div> -->
                    
                    <!-- // TESTE 4 FLOWPLAY -->
                    <!-- <div id="mixed" class="fp-outlined">
                    </div>
                    <div id="icecast" class="fp-playful fp-edgy"></div>
                    <p class="doc" id="icecast-info">&nbsp;</p> -->

                    <!-- // TESTE 5 FLOWPLAY -->
                    <div id="fp-audio" data-audio-only="true" class="fp-fat fp-edgy fp-outlined">
                        <video autoplay data-title="Autoplay">
                            <source type="application/x-mpegurl" src="http://streamer1.streamhost.org:1935/salive/GMItvfh/playlist.m3u8">
                        </video>
                    </div>

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

    

    <!-- <script>
      // var api = flowplayer("#player", {
      //     live: true,
      //     // splash: true,
      //     clip: {
      //         sources: [
      //             {
      //                 type: "application/x-mpegurl",
      //                 src: "rtmp://streamer1.streamhost.org/salive/GMI3anjoa",
      //                 // autoPlay: true,
      //             }
      //         ],
      //         // title: "LiveStream"
      //     },
      //     // embed: {
      //     //     skin: "http://releases.flowplayer.org/6.0.1/skin/bauhaus.css"
      //     // }
      // });
    </script> -->
    
    
@endsection
