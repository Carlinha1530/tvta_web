<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/logos/Globo grande.png" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{asset('/css/app.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/css/datatable/jquery.dataTables.min.css')}}">

    <!--Import Google Icon Font-->
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/style_admin.css')}}">

</head>
<body id="app-layout">
    <main>
        @include('layouts._admin._navbar')

        @if(Session::has('mensagem'))
          <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card {{ Session::get('mensagem')['class'] }}">
                        <div align="center" class="card-content">
                          {{ Session::get('mensagem')['msg'] }}
                        </div>
                    </div>
                </div>
            </div>
          </div>
        @endif 

        <br>

        @yield('content')
    </main>
    {{--<div class="" id="app">
        @include('layouts._admin._navbar')
        <div class="container">
            <div class="row">
                @if (Auth::guest())
                    @yield('content')
                @else
                    <div class="col-md-12">
                        @include('layouts._includes._flash-message') 
                        {{-- <div class="panel panel-primary"> --}}
                            {{-- @yield('content') --}}
                        {{-- </div> --}}
                    {{--</div>
                @endif
            </div>

            <div class="row">
                <div class="col-md-12">
                    @yield('panels')
                </div>
            </div>
        </div>
    </div>--}}

    <!-- Scripts -->
    {{--  <script src="{{asset('/js/app.js')}}"></script> --}}
    <script src="{{asset('/js/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>

</body>
</html>
