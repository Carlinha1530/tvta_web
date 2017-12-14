@extends('layouts.site')

@section('pagina_titulo', 'Nossa História')

@section('content')
    <div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h3 class="header_3 text_6 color_1 bg_3">Conheça-nos</h3>
            </div>
        </div>
    </div>
    <div class="wrap_2">
        <iframe width="1100" height="480" src="{{ $sobrenos->link_video }}" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h3 class="header_2 text_6 color_1 bg_3 wow fadeInLeft">Sobre Nós</h3>

            <div class="wrap_1">
                <div class="box_1 wow fadeInLeft">
                    <div class="caption_2">
                        <p class="text_13 color_3" style="text-align: justify;">
                            {!! $sobrenos->descricao_sobrenos !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="header_2 text_6 color_1 bg_3 wow fadeInRight">Oportunidades</h3>

            <div class="wrap_3">
                <div class="box_1 wow fadeInRight">
                    <div class="caption_1">
                        <h3 class="text_13 color_3" style="text-align: justify;">
                            {!! $sobrenos->descricao_oportunidades !!}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 wow fadeInLeft">
            <h3 class="header_6 text_6 color_1 bg_3">Nossa Equipe</h3>
        </div>
    </div>
    <div class="wrap_7" id="">
        <div class="row">
            @include('layouts._site._lista-usuarios')
        </div>
    </div>

    <div align="center">
        <!-- Paginação -->
        {!! $users->links() !!}
    </div>
    
@endsection
