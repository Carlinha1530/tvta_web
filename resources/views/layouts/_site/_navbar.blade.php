{{-- 
<div id="google_translate_element" class="translate"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'pt', includedLanguages: 'en,es,pt', layout: google.translate.TranslateElement.FloatPosition.TOP_RIGHT}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    --}}     
        
{{-- <header id="header"> --}}
<header>
    {{-- @include('site.google_translate') --}}

    <div class="header_wrap">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="brand">
                                {{-- <h1 class="text_1 color_1"> --}}
                                    {{-- <a href="{{ url('/') }}"><img src="img/logos/logo2.png" height="893" width="4058" alt=""></a> --}}
                                    <a href="{{ url('/') }}">
                                        <img class="logo_nav" src="{{ asset('img/logos/logo2.png') }}" alt="Logo Terceiro Anjo" title="Logo Terceiro Anjo">
                                        {{-- <img src="{{ asset('img/logos/logo2.png') }}" height="893" width="4058" alt=""> --}}
                                        {{-- <span class="logo_nav" style="background: url('{{asset('img/logos/logo2.png')}}') no-repeat center center; "></span> --}}
                                    </a>
                                {{-- </h1> --}}
                            </div>
                        </div>
                        <div class="col-md-8" style="margin-left: -30px;">
                            {{-- <div class="col-md-8 col-md-pull-1"> --}}
                            {{-- <a class="banner_1 " href="#">
                                <img class="banner_1" src="/img/index_banner01.jpg" alt="Banner 1"/>
                            </a> --}}
                            <p class="text_15 color_3" style="">
                                "...Se alguém adora a besta e a sua imagem e recebe a sua marca na fronte 
                                <br> ou sobre a mão, também esse beberá do vinho da cólera de Deus..." 
                            </p>
                            <p class="text_16 color_3" style="">Apocalipse 14:9-10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <ul class="sf-menu">
                            <!--li class="current"><a href="index-1.php">Home</a></li-->
                            <li ><a href="{{ url('/') }}" title="Home">Home</a></li>
                            <li><a class="fa fa-caret-down" href="{{ Route('site.categorias_all') }}">Categorias</a>
                                <ul>
                                    @if(isset($categorias)) 
                                        @foreach($categorias as $value)
                                            <li><a href="{{ Route('site.categoria', $value->slug) }}" title="Categoria {{ $value->nome }}">{{ $value->nome }}</a></li>
                                        @endforeach
                                    @endif
                                    <li><a href="{{ Route('site.categorias_all') }}" title="Todas as Categorias">Todas... </a></li>
                                </ul>
                            </li>
                            {{-- <li><a class="fa fa-caret-down" href="{{ Route('site.palestrantes_all') }}">Apresentador</a>
                                <ul>
                                    @if(isset($palestrantes)) 
                                        @foreach($palestrantes as $value) 
                                            <li><a href="{{ Route('site.palestrante',$value->slug) }}">
                                            {{ str_limit($value->nome, 14)  }}</a></li>
                                        @endforeach
                                    @endif
                                    <li><a href="{{ Route('site.palestrantes_all') }}">Todos... </a></li>
                                </ul>
                            </li> --}}
                            <li><a class="fa fa-caret-down" href="{{ Route('site.palestrantes_all') }}" title="Todos os palestrantes">Palestrantes</a>
                                <ul>
                                    <li><a href="{{ Route('site.palestrantes_all') }}" title="Todos os palestrantes">Palestrantes</a></li>
                                    <li><a href="{{ Route('site.programas_all') }}" title="Todos os Programas">Programas</a></li>
                                    <li><a href="{{ Route('site.producoes_all') }}" title="Todas as Produções">Produções </a></li>
                                </ul>
                            </li>
                            <li><a class="fa fa-caret-down" title="Todos os Vídeos">Vídeos</a>
                                <ul>
                                    <li><a class="fa fa-caret-right" title="Todos os Vídeos">Vídeos</a>
                                        <ul>
                                            <li><a href="{{ Route('site.videos_br') }}" title="Vídeos em Português">Vídeos BR</a></li>
                                            <li><a href="{{ Route('site.videos_en') }}" title="Vídeos em Inglês">Vídeos EN</a></li>
                                            <li><a href="{{ Route('site.videos_es') }}" title="Vídeos em Espanhol">Vídeos ES</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ Route('site.series') }}" title="Todos as Séries">Séries</a></li>
                                </ul>
                            </li>
                            <li><a class="fa fa-caret-down" href="http://terceiroanjo.ebiblico.com.br/" title="Estudos Bíblicos">Estudos Bíblicos</a>
                                <ul>
                                    <li><a href="http://terceiroanjo.ebiblico.com.br/" title="Estude a Bíblia Agora">Estude a Bíblia Agora</a>
                                    <li><a href="{{ Route('site.serie_biblica') }}" title="Série Bíblica Ilustrada">Série Bíblica Ilustrada</a>
                                    <li><a href="{{ Route('site.infografico') }}" title="Infográficos">Infográficos</a>
                                </ul>
                            </li>
                            <li><a class="fa fa-caret-down" href="{{ Route('site.artigos') }}" title="Estudos Bíblicos">Download</a>
                                <ul>
                                    <li><a href="{{ Route('site.artigos') }}" title="Todos os Artigos">Artigos</a></li>
                                    <li><a href="{{ Route('site.livros') }}" title="Todos os Livros">Livros</a></li>
                                    <li><a href="{{ Route('site.audios') }}" title="Todos os Áudios">Áudios</a></li>
                                </ul>
                            </li>
                            
                            <li><a class="fa fa-caret-down" href="{{ url('/nossa_historia') }}" title="Conheça a TV Terceiro Anjo"><strong>Sobre Nós</strong></a>
                                <ul>
                                    <li><a href="{{ url('/nossa_historia') }}" title="Conheça a TV Terceiro Anjo">Nossa História</a></li>
                                    <li><a href="{{ url('/contatos') }}" title="Veja nossos contatos">Contatos </a></li>
                                    <li><a href="{{ url('/galerias_all') }}" title="Nossos momentos">Galerias</a></li>
                                </ul>
                            </li>
                            <li><a class="fa fa-caret-down" href="{{ Route('quero_doar') }}" title="Veja como voce pode fazer uma doação">Doação</a>
                                <ul>
                                    <li><a href="{{ Route('quero_doar') }}" title="Veja como voce pode fazer uma doação">Quero Doar</a></li>
                                    <li><a href="{{ Route('quero_participar') }}" title="Veja como você pode participar deste ministério">Quero Participar </a></li>
                                    <li><a href="{{ Route('quero_divulgar') }}" title="Veja como você pode ajudar na divulgação">Quero Divulgar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    {{-- <form id="search" action="search/search.php" method="GET" accept-charset="utf-8">
                        <label class="input_wrap" for="in">
                            <input id="in" type="text" name="s" value=" ..." placeholder=""
                                   onblur="if(this.value == '') { this.value='...'}"
                                   onfocus="if (this.value == '...') {this.value=''}"/>
                        </label>
                        <a onclick="document.getElementById('search').submit()">Buscar</a>
                    </form> --}}
                    <form action="{{ Route('site.busca') }}" method="GET" accept-charset="utf-8">
                        <div class="aa-input-container" id="aa-input-container">
                            {{-- <input class="aa-input-search" type="search" name="str" value="{{$str}}" placeholder="Buscar..." id="aa-search-input" autocomplete="off" /> --}}
                            <input class="aa-input-search" type="search" name="str" value="{{$str}}" id="aa-search-input" autocomplete="off" />
                            <i class="fa fa-search aa-input-icon" aria-hidden="true"></i>
                        </div>
                        <input type="submit" class="buscar" value="Buscar"/>
                    </form>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
{{-- <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script> --}}
{{-- <script src="/js/algoliasearch/script.js"></script> --}}
{{-- <script src="/js/algoliasearch/autocomplete.js"></script> --}}
{{-- <script src="/js/algoliasearch/algoliasearch.min.js"></script> --}}