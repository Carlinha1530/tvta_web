@extends('layouts.site')
@section('pagina_titulo', "Apps")
@section('content')
    
    <div class="wrap_6 wrap_7">
        <div class="row">
            <div class="col-md-12">
                <h3 class="header_2 text_6 color_1 bg_3  wow fadeInLeft" data-wow-delay=".2s">Aplicativos Mobile</h3>

                <div class="caption_2" >
	                <h4 class="text_11 color_3 wow fadeInRight">
                        GMI Media TV/Rádio broadcast:
	                </h4>
	            </div><br>	

    			<a href="https://play.google.com/store/apps/details?id=com.gospelministries.gmimedia" title="Aplicativo mobile Android" target="_blanck"><img src="{{ asset('/img/logos/google_play.png') }}" class="logo_apps" alt="Baixe o aplicativo para seu celular"></a>

                <br><br><br>

                <div class="caption_2" >
                    <h4 class="text_11 color_3 wow fadeInRight">
                        Terceiro Anjo, em breve:
                    </h4>
                </div><br> 

                <a href="https://itunes.apple.com/us/app/terceiro-anjo/id1279616129?mt=8" title="Aplicativo mobile iOS" target="_blanck">
                    <img src="{{ asset('/img/logos/app_store.png') }}" class="logo_apps" alt="Baixe o aplicativo para seu celular">
                </a>

            </div>
        </div>
    </div>

@endsection 