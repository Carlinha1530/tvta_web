@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Reset Password</div> --}}
                <h2>Trocar a senha</h2><br>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card green darken-1">
                                    <div class="card-content white-text">
                                        <p>ATENÇÂO!!</p><br>
                                        {{ session('status') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Endereço de E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $email or old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card red darken-1">
                                                <div class="card-content white-text">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card red darken-1">
                                                <div class="card-content white-text">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma Senha</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >

                                @if ($errors->has('password_confirmation'))
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card red darken-1">
                                                <div class="card-content white-text">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Trocar a senha
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
