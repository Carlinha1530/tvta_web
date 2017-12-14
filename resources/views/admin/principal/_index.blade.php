@extends('layouts.app')

@section('content')
    <div class="panel-heading">Principal Admin</div>
      {{-- <div class="panel-body">
          Bem Vindo!!
      </div> --}}
    </div>
@endsection

@section('panels')
	<link rel="stylesheet" href="css/panel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	{{-- <a href="#" data-toggle="modal" data-target="#nome">
    <div class="col-md-2">
      <div data-toggle="tooltip" data-placement="bottom" title="Visualizar as pessoas que estão no carro de sssss" class="panel panel-vendas">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-car fa-4x"></i>
            </div>
          </div>
        </div>
        <div class="panel-footer vend">
          <span class="pull-left">AAAAAAAAAAA</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </a> --}}
	<div class="row">
      <div class="col s4">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card blue-grey darken-4">
          <div class="card-content white-text">
            <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
    </div>
            
@endsection

