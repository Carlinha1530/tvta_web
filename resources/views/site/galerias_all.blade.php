@extends('layouts.site')

@section('pagina_titulo', 'Galerias')

@section('content')
    <div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h3 class="header_1 text_6 color_1 bg_3">Galerias</h3>
            </div>
        </div>
    </div>

    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                @foreach($galerias as $galeria)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box_1">
                        @if(!empty($galeria->img))
                            <a href="{{Route('galeria', $galeria->slug)}}" data-toggle="tooltip" title="Ver galeria" data-placement="bottom" target="_blanck" >
                                <span class="thumbnail" style="background: url('{{asset($galeria->img)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; " alt="{{$galeria->nome}}"></span>
                            </a>
                        @else
                            <a href="{{Route('galeria', $galeria->slug)}}" data-toggle="tooltip" title="Ver galeria" data-placement="bottom" target="_blanck" >
                                <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/galeria.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; " alt="{{$galeria->nome}}"></span>
                            </a>
                        @endif
                        <div class="caption">
                            <h3 class="text_11 color_3"><a href="{{Route('galeria',$galeria->slug)}}"  data-toggle="tooltip" title="Ver galeria" data-placement="right"  target="_blanck">{{ str_limit($galeria->nome, 15) }}</a></h3><br>

                            <p class="text_12 color_4">{{ str_limit($galeria->resumo, 25)  }}
                            <a href="{{Route('galeria',$galeria->slug)}}"  data-toggle="tooltip" title="Ver galeria" data-placement="right" target="_blanck" ><strong style="font-weight: bold;">..Ver mais</strong></a></p>

                        </div>
                    </div><br><br>
                </div>
                @endforeach
            </div>

            <div align="center">
                <!-- Paginação -->
                {!! $galerias->links() !!}
            </div>
        </div>
    </div>
@endsection