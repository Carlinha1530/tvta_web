@extends('layouts.site')

@section('pagina_titulo', 'Rádio')

@section('content')
    <style>
        #player2-container .mejs__time-buffering, #player2-container .mejs__time-current,
        #player2-container .mejs__time-handle, #player2-container .mejs__time-loaded,
        #player2-container .mejs__time-marker, #player2-container .mejs__time-total,
        #player2-container .mejs__time-hovered {
            height: 2px;
        }

        #player2-container .mejs__time-total {
            margin-top: 9px;
        }
        #player2-container .mejs__time-handle {
            left: -5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ffffff;
            top: -5px;
            cursor: pointer;
            display: block;
            position: absolute;
            z-index: 2;
            border: none;
        }
        #player2-container .mejs__time-handle-content {
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('/lib/mediaelement/mediaelementplayer.css')}}">
   
    <div class="players" id="player2-container">
        <div class="media-wrapper">
            <audio id="player2" preload="none" controls style="max-width:100%;">
                <source src="rtmp://streamer1.streamhost.org/salive/GMI3anjoa" type="audio/rtmp">
                <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
        </div>    
    </div><br>

    <script src="{{asset('/lib/mediaelement/mediaelement-and-player.js')}}"></script>
    <script src="{{asset('/lib/mediaelement/mediaelement.js')}}"></script>
    <script src="{{asset('/lib/mediaelement/demo.js')}}"></script>
    <script src="{{asset('/lib/mediaelement/soundcloud.js')}}"></script>

@endsection