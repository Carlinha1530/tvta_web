@extends('layouts.site')

@section('pagina_titulo', 'Rádio')

@section('content')

    <div class="wrap_6 wrap_7">
        <div class="row">
            <div class="col-md-12">
                <h3 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">Rádio Terceiro Anjo</h3>
                <div class="wrap_4 wow fadeInLeft">
                    <div id="fp-audio" data-audio-only="true" class="flowplayer">
                        <video>
                            <source type="application/x-mpegurl" src="http://streamer1.streamhost.org:1935/salive/GMI3anjoa/playlist.m3u8">
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
    

@endsection