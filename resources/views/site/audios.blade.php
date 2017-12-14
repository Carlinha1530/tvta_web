@extends('layouts.site')

@section('pagina_titulo', 'Áudios')

@section('content')
	<div class="wrap_6 wrap_7">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">Áudios Para Download</h3>

					@foreach($audios as $audio)
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
                                        {{ $audio->nome }}
                                    </h3><br>

                                    <p class="text_9 color_4">
                                    {{ str_limit($audio->descricao, 500)  }}</p><br>
                                </div>
                                @if(isset($audio->audio))
                                    <a class="btn_1 text_7 color_1 bg_3" href="download/{{$audio->audio}}">Download</a>
                                @endif
                                {{-- <a class="btn_1 text_7 color_1 bg_3" href="">Download</a> --}}
                                <div class="clearfix"></div>
                            </div>
                        </div>
					@endforeach
					<div align="center">
				        <!-- Paginação -->
				        {!! $audios->links() !!}
				    </div>
                </div>
            </div>
        </div>
@endsection