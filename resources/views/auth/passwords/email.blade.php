@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Trocar a senha</div> --}}
                <h2>Trocar a senha</h2><br>
                <div class="panel-body">
                    @if (session('status'))
                        {{-- <div class="alert alert-success">
                            {{ session('status') }}
                        </div> --}}
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card green darken-1">
                                    <div class="card-content white-text">
                                        <p>Um link de redefinição de senha foi encaminhado para sua caixa de email!!</p>
                                        {{-- {{ session('status') }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Endereço de Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    {{-- <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> --}}
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <div class="card red darken-1">
                                                <div class="card-content white-text">
                                                    <p>Atenção! Informe o email de um usuário cadastrado no sistema.</p><br>
                                                    {{-- <strong>{{ $errors->first('email') }}</strong> --}}
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
                                    Enviar link de redefinição de senha
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
