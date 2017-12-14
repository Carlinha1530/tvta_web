<!--======================HEADER=========================-->
<div class="header_wrap">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <a class="banner_1 put-right" href="#">
                    <!--img class="banner_1" src="img/index_banner01.jpg" alt="Banner 1"/-->
                    <img class="banner_1" src="{{asset('/img/index_banner01.jpg')}}" alt="Banner 1"/>
                </a>

                <div class="brand">
                    <h1 class="text_1 color_1">
                        <!--a href="./">Movie Track.</a-->
                        <a href="{{ url('/') }}"><img src="{{asset('/img/logos/LOGO TV Terceiro Anjo 2.png')}}" alt=""></a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="stuck_container">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <nav>
                    <ul class="sf-menu">
                        <!--li class="current"><a href="index-1.php">Home</a></li-->
                        <li ><a href="{{ url('/') }}">Home</a></li>
                        <li><a class="fa fa-caret-down" href="{{ url('/radio') }}">Rádio</a>
                            <ul>
                                <li><a href="{{ url('/radio') }}">Rádio ao Vivo</a></li>
                                <li><a href="{{ url('/radio_downloads') }}">Downloads</a></li>
                            </ul>
                        </li>
                        <!--li><a href="{{ url('/videos_all') }}">Videos</a></li-->
                        <li><a class="fa fa-caret-down" href="{{ url('/categorias_all') }}">Categorias</a>
                            <ul>
                                <li><a href="{{ url('/categorias_all') }}">Todas</a></li>
                                {{--@foreach($categorias as $categoria)
                                    <li>{{ $categoria->nome }}</li>
                                @endforeach--}}
                                <li><a href="{{ url('/categorias_single') }}">Reflexão</a></li>
                                <li><a href="{{ url('/categorias_single') }}">Música</a></li>
                                <li><a href="{{ url('/categorias_single') }}">Entrevistas</a></li>
                                <li><a href="{{ url('/categorias_single') }}">Saúde</a></li>
                            </ul>
                        </li>
                        <li><a class="fa fa-caret-down" href="{{ url('/palestrantes_all') }}">Palestrantes</a>
                            <ul>
                                <li><a href="{{ url('/palestrantes_all') }}">Todas </a></li>
                                <li><a href="{{ url('/palestrantes_single') }}">Myrtes Ribeiro</a></li>
                                <li><a href="{{ url('/palestrantes_single') }}">Benício Rios</a></li>
                                <li><a href="{{ url('/palestrantes_single') }}">Jefferson Araújo</a></li>
                                <li><a href="{{ url('/palestrantes_single') }}">Origens</a></li>
                                <li><a href="{{ url('/palestrantes_single') }}">Gerson Pires</a></li>
                            </ul>
                        </li>
                        <li><a href="http://terceiroanjo.ebiblico.com.br/">Estudos Bíblicos</a>
                        </li>
                        <li><a href="{{ url('/artigos') }}">Artigos</a></li>
                        <li><a class="fa fa-caret-down" href="">Doação</a>
                            <ul>
                                <li><a href="{{ url('/quero_doar') }}">Quero Doar</a></li>
                                <li><a href="{{ url('/quero_participar') }}">Quero Participar </a></li>
                                <li><a href="{{ url('/quero_divulgar') }}">Quero Divulgar</a></li>
                            </ul>
                        </li>
                        <li><a class="fa fa-caret-down" href="{{ url('/nossa_historia') }}">Sobre Nós</a>
                            <ul>
                                <li><a href="{{ url('/nossa_historia') }}">Nossa História</a></li>
                                <li><a href="{{ url('/contatos') }}">Contatos </a></li>
                                <li><a href="{{ url('/fotos') }}">Fotos</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <form id="search" action="search/search.php" method="GET" accept-charset="utf-8">
                    <label class="input_wrap" for="in">
                        <input id="in" type="text" name="s" value=" ..." placeholder=""
                               onblur="if(this.value == '') { this.value='...'}"
                               onfocus="if (this.value == '...') {this.value=''}"/>
                    </label>
                    <a onclick="document.getElementById('search').submit()">Buscar</a>
                </form>
            </div>
        </div>
    </div>
</div>
