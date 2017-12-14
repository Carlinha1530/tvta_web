@extends('layouts.site')
@section('content')
	<div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2 class="header_1 text_6 color_1 bg_3">{{ $palestrante->nome }}</h2>
            </div>
        </div>
    </div>

    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                @foreach($videos as $video)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box_1">
                        <a data-type="video" href="">    
                            <img src="{{asset($video->imagem)}}" alt="Image 1"/>
                        </a>
                        <div class="caption">
                            <h5 class="text_7 color_3">
                                {{ $video->nome }}
                                <small class="text_8 color_4">
                                    <a href="">( {{ $video->palestrante->nome }})</a>
                                </small>
                            </h5>
                            <p class="text_9 color_3">{{ $video->descricao }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div align="center">
        {!! $videos->links() !!}
    </div>
@endsection