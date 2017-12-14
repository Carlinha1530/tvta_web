<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            {{-- <a class="navbar-brand" target="_blanck" href="{{ route('site.home') }}">
                {{ config('app.name', 'Laravel') }}
            </a> --}}
            <a class="navbar-brand" href="{{ route('admin.principal') }}" class="brand-logo">TV Terceiro Anjo</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="{{ Route('admin.principal') }}">Site</a></li>
                    <li><a href="{{ Route('admin.principal') }}">Início</a></li>
                    <li><a href="{{ Route('admin.palestrantes') }}">Palestrantes</a></li>
                    <li><a href="{{ Route('admin.usuarios') }}">Usuários</a></li> 
                    <li><a href="{{ Route('admin.galerias') }}">Galerias</a></li> 
                    <li><a href="{{ Route('admin.midias') }}">Mídias</a></li> 
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Downloads<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ Route('admin.artigos') }}">Artigos</a></li> 
                            <li><a href="{{ Route('admin.livros') }}">Livros</a></li> 
                            <li><a href="{{ Route('admin.audios') }}">Áudios</a></li> 
                            <li><a href="{{ Route('admin.radioaudios') }}">Áudios Rádio</a></li>  
                        </ul>
                    </li>
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
                            <li><a href="{{ Route('admin.slides') }}">Slides</a></li>
                            <li><a href="{{ Route('admin.paginas.contatos') }}">Contatos</a></li>
                            <li><a href="{{ Route('admin.paginas.sobrenos') }}">Nossa História</a></li>
                            <li><a href="{{ Route('admin.paginas.aovivo') }}">Ao Vivo</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#!">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!--div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
          <a href="{{ route('site.home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
    </nav>
</div-->

