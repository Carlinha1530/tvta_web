@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Entrar</h2>
    <form action="{{ route('admin.login') }}" method="post">
        {{ csrf_field() }}
        @include('admin.login._form')
        <button class="btn blue">Entrar</button>   
        {{-- <a class="btn btn-link" href="{{ route('password.request') }}"> --}}
        <a class="btn btn-link" href="{{ route('password.request') }}">
            Esqueceu sua senha?
        </a>     
    </form>
</div>
@endsection
