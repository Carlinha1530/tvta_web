{{-- <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" target="_blanck" href="{{ route('site.home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="{{ Route('admin.principal') }}">Home</a></li>
                    <li><a href="{{ Route('admin.palestrantes') }}">Palestrantes</a></li>
                    <li><a href="{{ Route('admin.artigos') }}">Artigos</a></li> 
                    <li><a href="{{ Route('admin.usuarios') }}">Usuários</a></li> 
                    <li><a href="{{ Route('admin.galerias') }}">Galerias</a></li> 
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vídeos<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ Route('admin.videos') }}">Vídeos</a></li> 
                            <li><a href="{{ Route('admin.series') }}">Series</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ Route('admin.categorias') }}">Categorias</a></li>
                            <li><a href="{{ Route('admin.subcategorias') }}">Sub-Categorias</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Páginas<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Rádio</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Palestrantes</a></li>
                            <li><a href="#">Vídeo e Artigo</a></li>
                            <li><a href="#">Doação</a></li>
                            <li><a href="#">Sobre Nós</a></li>
                            <li><a href="#">Galerias</a></li>
                            <li><a href="{{ Route('admin.paginas.teste_paginas') }}">TestePáginas</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav> --}}

{{-- <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" target="_blanck" href="{{ route('site.home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="{{ Route('admin.principal') }}">Home</a></li>
                    <li><a href="{{ Route('admin.palestrantes') }}">Palestrantes</a></li>
                    <li><a href="{{ Route('admin.artigos') }}">Artigos</a></li> 
                    <li><a href="{{ Route('admin.usuarios') }}">Usuários</a></li> 
                    <li><a href="{{ Route('admin.galerias') }}">Galerias</a></li> 
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vídeos<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ Route('admin.videos') }}">Vídeos</a></li> 
                            <li><a href="{{ Route('admin.series') }}">Series</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ Route('admin.categorias') }}">Categorias</a></li>
                            <li><a href="{{ Route('admin.subcategorias') }}">Sub-Categorias</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Páginas<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Rádio</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Palestrantes</a></li>
                            <li><a href="#">Vídeo e Artigo</a></li>
                            <li><a href="#">Doação</a></li>
                            <li><a href="#">Sobre Nós</a></li>
                            <li><a href="#">Galerias</a></li>
                            <li><a href="{{ Route('admin.paginas.teste_paginas') }}">TestePáginas</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav> --}}


<nav class="nav-extended">
    <div class="nav-wrapper blue">
        <div class="container">
          <a href="{{ route('admin.principal') }}" class="brand-logo">TVTerceiroAnjo</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ Route('admin.principal') }}">Início</a></li>
                <li><a target="_blanck" href="{{ route('site.home') }}">Site</a></li>
                @if(Auth::guest())
                  <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}
                <i class="material-icons right">arrow_drop_down</i></a></li>

                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!">{{ Auth::user()->name }}</a></li>
                    <li><a href="">Imóveis</a></li>
                    <li><a href="">Tipos</a></li>
                    <li><a href="">Cidades</a></li>
                    <li class="divider"></li>
                    <li><a href="">Slides</a></li>
                    <li><a href="">Usuários</a></li>
                    <li><a href="">Papel</a></li>
                    <li><a href="">Páginas</a></li>
                </ul>
                <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                @endif
            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><a href="">Início</a></li>
                <li><a target="_blanck" href="{{ route('site.home') }}">Site</a></li>
                @if(Auth::guest())
                  <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="">Imóveis</a></li>
                <li><a href="">Tipos</a></li>
                <li><a href="">Cidades</a></li>
                <li class="divider"></li>
                <li><a href="">Slides</a></li>
                <li><a href="">Usuários</a></li>
                <li><a href="">Papel</a></li>
                <li><a href="">Páginas</a></li>
                <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                @endif
            </ul>
        </div>
    </div>
    {{-- <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div> --}}
</nav>