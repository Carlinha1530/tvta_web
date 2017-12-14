@extends('layouts.site')

@section('pagina_titulo', 'Home')

@section('content_carrosel')
    @include('layouts._site._carrosel-home')
    <div id="subheader" class="subheader-separator"></div>
@endsection

@section('content')
    <div class="row">
		@include('layouts._site._banners')
	</div>
	    
	@include('layouts._site._newsletter')
	</br>
	@include('layouts._site._lista-videos')

	<div class="wrap_5">
	    <div class="row">
	        @include('layouts._site._lista-artigos')

	        <div class="col-md-4 wow fadeInRight">
	            @include('layouts._site._estudos_biblicos')
	            @include('layouts._site._lista-recentes')
	        </div>
	    </div>
	</div>
@endsection
