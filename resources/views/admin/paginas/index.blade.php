@extends('layouts.app')
@section('content')
    
    <h3 class="center">Lista de Páginas</h3>
    <div class="row">
        <nav class="nav-extended">
            <div class="nav-wrapper blue darken-4">
                <div class="col s12">
                    <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
                    <a class="breadcrumb">Lista de Páginas</a>
                </div>
            </div>
        </nav>
    </div>

    
    <div class="col s12 m6 l2">{{-- Slides --}}
      <div class="card black">
        <a class="white-text" href="{{ route('admin.paginas.slides') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">view_carousel</i>
            <span class="card-title">Slides</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col s12 m6 l2">{{-- Contatos --}}
      <div class="card black">
        <a class="white-text" href="{{ route('admin.paginas.contatos') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">call</i>
            {{-- <img src="{{asset('/img/icons/Admin_Paginas/phone-call.png')}}" height="70" width="70" alt=""><br><br> --}}
            <span class="card-title">Contatos</span>
          </div>
        </a>
      </div>
    </div>
    
    <div class="col s12 m6 l2">{{-- Nossa história --}}
      <div class="card black">
        <a class="white-text" href="{{ route('admin.paginas.sobrenos') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">web</i>
            <span class="card-title">Nossa História</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col s12 m6 l2">{{-- Nossa história --}}
      <div class="card black">
        <a class="white-text" href="{{ route('admin.paginas.aovivo') }}">
          <div class="card-content white-text center">
            <i class="large material-icons">play_circle_filled</i>
            <span class="card-title">Ao Vivo</span>
          </div>
        </a>
      </div>
    </div>

@endsection
