@extends('layouts.site')
@section('content')
	<div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h2 class="header_1 text_6 color_1 bg_3">
                    Serie BLABLA
                </h2>
            </div>
        </div>
    </div>
    <div class="video-bg">
        {{-- <div class="col-md-12"> --}}
            <div class="row">
                <div class="col-md-8"><br>
                    <div id="video-container" class="embed-responsive embed-responsive-16by9" style="margin-left: 25px;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/lH8zdCqiVzc?feature=oembed&amp;autoplay=1" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-4"><br><br>
                    <h2  class="text_6 color_1">Vídeos da Galeria BLABLA</h2><br>
                    <p class="text_8 color_4">5/10</p><br>

                    <hr style="margin-top: 0px;margin-bottom: 22px;margin-right: 22px;margin-left: -7px;">

                    <div class="table-overflow" id="overflow">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="box_1">
                                    <a href="">
                                        <img src="{{asset('/img/index-2_img01.jpg')}}" height="218" width="266" alt="Image 1"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h3 class="text_7 color_1"><a href="">Fusce euismod conse</a></h3>
                                <p class="text_8 color_4">Neque porro quisquam (51:37)</p>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="box_1">
                                    <a href="">
                                        <img src="{{asset('/img/index-2_img01.jpg')}}" alt="Image 1"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h3 class="text_7 color_1"><a href="">Fusce euismod conse</a></h3>
                                <p class="text_8 color_4">Neque porro quisquam (51:37)</p>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="box_1">
                                    <a href="">
                                        <img src="{{asset('/img/index-2_img01.jpg')}}" alt="Image 1"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h3 class="text_7 color_1"><a href="">Fusce euismod conse</a></h3>
                                <p class="text_8 color_4">Neque porro quisquam (51:37)</p>
                            </div>
                        </div><br> 
                    </div>
                </div>
            </div><br>
        {{-- </div> --}}
    </div><br><br>
    
    <div class="wrap_7">
        <div class="wrap_1">
            <div class="col-md-12">
                <div class="wrap_4">
                    <div class="box_1 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="caption_3">
                            <small class="text_8 color_4">
                                <strong style="font-weight: bolder;">Palestrante:</strong>
                                AAAAAA
                            </small><br>
                            <small class="text_8 color_4">
                                <strong style="font-weight: bolder;">Categorias:</strong>
                               SSSSSS
                            </small><br>
                            <small class="text_8 color_4">
                                <strong style="font-weight: bolder;">Sub-Categorias:</strong>
                                WWWWWW
                            </small><br><br>
                            <p class="text_9 color_3">
                                asfafasffffffffffffffffffffffffffffffffffffff
                                sdddddddddddddddddddddddddddddddddddddsfsdg
                            </p>
                        </div>

                        <div class="clearfix"></div>
                    </div><br>
                    <!-- compartilhar twitter -->
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-count="horizontal" data-lang="pt" data-dnt="true">Tweetar</a>
                    <!-- compartilhar facebook -->
                    <div class="fb-share-button" data-href="" data-layout="button_count" >Compartilhar</div>
                    <!-- curtir facebook -->
                    <div class="fb-like" data-href="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" >Curtir</div><br><br>
                </div>
            </div>
        </div>
    </div>
   
    <link rel="stylesheet" href="{{asset('css/scroll/jquery.mCustomScrollbar.min.css')}}">
    <script src="{{asset('js/scroll/jquery.mCustomScrollbar.min.js')}}"></script>
    <script>
        $(function() {
          $('#overflow').mCustomScrollbar();
        });
    </script>
@endsection