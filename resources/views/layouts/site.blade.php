<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta http-equiv="Content-Language" content="pt-br"> --}}
    
   <title>{{ config('seo.nome') }} - @yield('pagina_titulo')</title>
    {{-- <title>{{ isset($seo['nome']) ? $seo['nome'] : $seo['nome'] }}</title> --}}
    <meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}">
    <meta name="author" content="{{ config('seo.author') }}"/>

    {{--  Open Graph data  --}}
    <meta property="og:title" content="{{ isset($seo['nome']) ? $seo['nome'] : $seo['nome'] }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ isset($seo['url']) ? $seo['url'] : $seo['url'] }}" /> 
    {{-- <meta property="og:url" content="http://terceiroanjo.com" />--}}
    <meta property="og:image" content="{{ isset($seo['imagem']) ? $seo['imagem'] : $seo['imagem'] }}" />
    <meta property="og:description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}" />
    <meta property="fb:app_id" content="189340181633073"/>

    <link rel="icon" href="{{asset('/img/logos/logo1.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('/css/app.css')}}" >
    <link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('/css/camera.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/contact-form.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/jquery.fancybox.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/lib/screen.css')}}">


    {{-- flowplayer TV--}}
    {{--  <script src="{{asset('/lib/flowplayer-7.0.4/flowplayer.audio.min.js')}}"></script>   --}}
    <link rel="stylesheet" href="{{asset('/lib/flowplayer-7.0.4/skin/skin.css')}}">
    <script src="{{asset('/js/jquery.min.js')}}"></script> 

    <script src="{{asset('/js/0.8.4.hls.min.js')}}"></script> 
    <script src="{{asset('/js/7.1.0.flowplayer.min.js')}}"></script> 
    <script src="{{asset('/js/flowplayer.hlsjs.light.js')}}"></script> 
    
    {{--  flowplayer Rádio  --}}    
    <link rel="stylesheet" href="{{asset('/lib/flowplayer-7.0.4/flowplayer.audio.css')}}">
    <script src="//releases.flowplayer.org/audio/flowplayer.audio.min.js"></script>
    {{--  <script src="{{asset('/js/flowplayer.audio.min.js')}}"></script>   --}}
    {{--  <script src="{{asset('/js/7.2.1.flowplayer.min.js')}}"></script>   --}}
    <script>
        $("#fp-audio").flowplayer({
            //autoplay: true,
            splash: true,
            flashls: {
                startfromlevel: 0
            }
        });
    </script>


    {{--  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>  --}}
    {{--  <script src="//releases.flowplayer.org/7.1.0/flowplayer.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/hls.js/0.8.4/hls.min.js"></script>
    <script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.light.js"></script>  --}}
  
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/js/jquery.js')}}"></script>{{--Remover pra usar o popover e tooltip--}}
    <script src="{{asset('/js/jquery-migrate-1.2.1.js')}}"></script>
    <script src="{{asset('/search/search.js')}}"></script>
    <script src="{{asset('/js/jquery.equalheights.js')}}"></script>
    <script src="{{asset('/js/camera.js')}}"></script>
    <script src="{{asset('/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('/js/jquery.fancybox-media.js')}}"></script>
    <script src="{{asset('/js/jquery.mobile.customized.min.js')}}"></script>
    <script src="{{asset('/js/wow/wow.js')}}"></script>



   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>{{----}}

    <script>
        $(document).ready(function () {
            if ($('html').hasClass('desktop')) {
                new WOW().init();
            }
        });
    </script>
    <script src="{{asset('/js/script.js')}}"></script>
    <script src="{{asset('/js/init.js')}}"></script>  

</head>
<body>

    @include('site.analyticstracking')
    
    @include('site.google_translate')

    <div id="app">

        <header>
            @include('layouts._site._navbar')
        </header>

        @yield('content_carrosel')
        
        <div class="page">
            <section id="content" >
                <div class="container"><br>
                    @include('layouts._includes._flash-message')
                    @yield('content')
                </div>
            </section>
        </div>
        
        <!--==========FOOTER========================-->
        <footer id="footer">
            @include('layouts._site._footer')
        </footer>
    </div>
    
    {{--  <script src="{{asset('/lib/radio.js')}}"></script>   --}}
    
</body>
</html>
