<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper grey darken-4">
            <a href="{{ route('admin.principal') }}" class="brand-logo">TV Terceiro Anjo</a>
            @if(!Auth::guest())
                {{-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a> --}}
                <a href="{{ route('admin.login.sair') }}" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">power_settings_new</i></a>
            @endif
           
            {{-- <a href="{{ route('admin.login.sair') }}">Sair</a> --}}
            <ul class="right hide-on-med-and-down">
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a target="_blanck" href="{{ route('site.home') }}">Site</a></li>
                    <li><a href="{{ Route('admin.principal') }}">Início</a></li>
                    <li><a href="{{ Route('admin.palestrantes') }}">Palestrantes</a></li>
                    <li><a href="{{ Route('admin.usuarios') }}">Usuários</a></li> 
                    <li><a href="{{ Route('admin.galerias') }}">Galerias</a></li>  
                    <li><a href="{{ Route('admin.midias') }}">Mídias</a></li>  
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">Downloads
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown2">Vídeos
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown3">Categorias
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown4">Páginas
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown5">{{ Auth::user()->name }}
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="{{ Route('admin.artigos') }}">Artigos</a></li> 
                        <li><a href="{{ Route('admin.livros') }}">Livros</a></li> 
                        <li><a href="{{ Route('admin.audios') }}">Áudios</a></li> 
                        <li><a href="{{ Route('admin.radioaudios') }}">Áudios Rádio</a></li>  
                    </ul>
                    <ul id="dropdown2" class="dropdown-content">
                        <li><a href="{{ Route('admin.videos') }}">Vídeos</a></li> 
                        <li><a href="{{ Route('admin.series') }}">Séries</a></li>
                    </ul>
                    <ul id="dropdown3" class="dropdown-content">
                        <li><a href="{{ Route('admin.categorias') }}">Categorias</a></li>
                        <li><a href="{{ Route('admin.subcategorias') }}">Sub-Categorias</a></li>
                    </ul>
                    <ul id="dropdown4" class="dropdown-content">
                        <li><a href="{{ Route('admin.slides') }}">Slides</a></li>
                        <li><a href="{{ Route('admin.paginas.contatos') }}">Contatos</a></li>
                        <li><a href="{{ Route('admin.paginas.sobrenos') }}">Nossa História</a></li>
                        <li><a href="{{ Route('admin.paginas.aovivo') }}">Ao Vivo</a></li>
                    </ul>   
                    <ul id="dropdown5" class="dropdown-content">
                        <li><a href="#!">{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                    </ul>
                @endif
            </ul>


            <ul class="side-nav" id="mobile-demo">
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                    <li class="divider"></li>
                    <li><a target="_blanck" href="{{ route('site.home') }}">Site</a></li>
                    <li><a href="{{ route('admin.principal') }}">Início</a></li> 
                    <li class="divider"></li>          
                    <li><a href="{{ Route('admin.palestrantes') }}">Palestrantes</a></li>
                    <li><a href="{{ Route('admin.usuarios') }}">Usuários</a></li> 
                    <li><a href="{{ Route('admin.galerias') }}">Galerias</a></li>
                    <li><a href="{{ Route('admin.midias') }}">Mídias</a></li>  
                    <li class="divider"></li>
                    <li><a href="{{ Route('admin.artigos') }}">Artigos</a></li> 
                    <li><a href="{{ Route('admin.livros') }}">Livros</a></li> 
                    <li><a href="{{ Route('admin.audios') }}">Áudios</a></li> 
                    <li><a href="{{ Route('admin.radioaudios') }}">Áudios Rádio</a></li>  
                    <li class="divider"></li>
                    <li><a href="{{ Route('admin.videos') }}">Vídeos</a></li> 
                    <li><a href="{{ Route('admin.series') }}">Séries</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ Route('admin.categorias') }}">Categorias</a></li>
                    <li><a href="{{ Route('admin.subcategorias') }}">Sub-Categorias</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ Route('admin.slides') }}">Slides</a></li>
                    <li><a href="{{ Route('admin.paginas.contatos') }}">Contatos</a></li>
                    <li><a href="{{ Route('admin.paginas.sobrenos') }}">Nossa História</a></li>
                    <li><a href="{{ Route('admin.paginas.aovivo') }}">Ao Vivo</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>
