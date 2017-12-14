@extends('layouts.app')
@section('content')
    {{-- <h5 class="center">Bem vindo, {{ Auth::user()->name }}</h5> --}}

    {{-- Site --}}
    <div class="col s12 m6 l2">
      <div class="card black">
        <a class="white-text" href="{{ route('site.home') }}" target="_blanck">
          <div class="card-content white-text center">
            <i class="large material-icons">web</i>
            <span class="card-title">Site</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Palestrantes --}}
    <div class="col s12 m6 l2">
      <div class="card orange darken-3">
        <a class="white-text" href="{{ Route('admin.palestrantes') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">person_pin</i>
            <span class="card-title">Palestrantes</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Artigos --}}
    <div class="col s12 m6 l2">
      <div class="card purple darken-3">
        <a class="white-text" href="{{ Route('admin.artigos') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">description</i>
            <span class="card-title">Artigos</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Usuários --}}
    <div class="col s12 m6 l2">
      <div class="card pink accent-2">
        <a class="white-text" href="{{ Route('admin.usuarios') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">supervisor_account</i>
            <span class="card-title">Usuários</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Galerias --}}
    <div class="col s12 m6 l2">
      <div class="card teal darken-3">
        <a class="white-text" href="{{ Route('admin.galerias') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">perm_media</i>
            <span class="card-title">Galerias</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Áudios --}}
    <div class="col s12 m6 l2">
      <div class="card pink darken-3">
        <a class="white-text" href="{{ Route('admin.radioaudios') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">settings_voice</i>
            <span class="card-title">Áudios Rádio</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Vídeos --}}
    <div class="col s12 m6 l2">
      <div class="card green darken-3">
        <a class="white-text" href="{{ Route('admin.videos') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">videocam</i>
            <span class="card-title">Vídeos</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Séries --}}
    <div class="col s12 m6 l2">
      <div class="card  green">
        <a class="white-text" href="{{ Route('admin.series') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">movie</i>
            <span class="card-title">Séries</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Categorias --}}
    <div class="col s12 m6 l2">
      <div class="card blue darken-4">
        <a class="white-text" href="{{ Route('admin.categorias') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">view_module</i>
            <span class="card-title">Categorias</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Sub-Categorias --}}
    <div class="col s12 m6 l2">
      <div class="card blue">
        <a class="white-text" href="{{ Route('admin.subcategorias') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">view_list</i>
            <span class="card-title">Sub-Categorias</span>
          </div>
        </a>
      </div>
    </div>
    
    {{-- Mídias --}}
    <div class="col s12 m6 l2">
      <div class="card red darken-3">
        <a class="white-text" href="{{ Route('admin.midias') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">shop_two</i>
            <span class="card-title">Mídias</span>
          </div>
        </a>
      </div>
    </div>
  
    {{-- Páginas --}}
    <div class="col s12 m6 l2">
      <div class="card amber darken-1">
        <a class="white-text" href="{{ Route('admin.paginas') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">view_week</i>
            <span class="card-title">Páginas</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Livros Down. --}}
    <div class="col s12 m6 l2">
      <div class="card deep-orange darken-3">
        <a class="white-text" href="{{ Route('admin.livros') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">library_books</i>
            <span class="card-title">Livros Down.</span>
          </div>
        </a>
      </div>
    </div>

    {{-- Áudios Down. --}}
    <div class="col s12 m6 l2">
      <div class="card  blue-grey darken-3">
        <a class="white-text" href="{{ Route('admin.audios') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">volume_mute</i>
            <span class="card-title">Áudios Down.</span>
          </div>
        </a>
      </div>
    </div>

@endsection
