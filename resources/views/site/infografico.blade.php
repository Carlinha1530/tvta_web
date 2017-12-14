@extends('layouts.site')
@section('pagina_titulo', "Infográficos")
@section('content')
    <div class="wrap_6 wrap_7">
        <div class="row">
            <h3 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">
                Infográficos
            </h3>
			
			@include('layouts._site._lista-infografigos')

        </div>
    </div> 
@endsection 

{{--< style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
<div class='embed-container'><iframe src='http://bibliamais.adventistas.org.s3.amazonaws.com/BSO/2300-tardes-y-mananaspt/index.html' style='border:0'></iframe></div><br><br>--}}

{{-- <a href="http://bibliamais.adventistas.org.s3.amazonaws.com/BSO/2300-tardes-y-mananaspt/index.html" target="_blank">2.300 tardes e manhãs</a> --}}

{{-- <iframe src='https://issuu.com/webdsa/docs/biblia__completo_alta/1?ff=true&e=1168846/36293984' style='border:0'></iframe> --}}