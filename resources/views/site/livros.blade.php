@extends('layouts.site')

@section('pagina_titulo', 'Livros')

@section('content')
	<div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h3 class="header_1 text_6 color_1 bg_3">Livros para Downloads</h3>
            </div>
        </div>
    </div>
{{-- file_pdf
file_epub --}}
    <div class="wrap_7">
        <div class="wrap_1">
            <div class="row">
                @foreach($livros as $livro)
                <div class="col-md-3 wow fadeInRight" data-wow-delay=".2s">
                    <div class="box_1">
                        @if(!empty($livro->imagem))
                            <span class="thumbnail" style="background: url('{{asset($livro->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; "></span>
                        @else
                            <span class="thumbnail" style="background: url('{{ asset('/img/Imagens_padrao/artigo.png') }}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; "></span>
                        @endif
                        <div class="caption">
                            <h3 class="text_4 color_3">
                                {{ str_limit($livro->nome, 15) }}
                            </h3><br>

                            @if(isset($livro->file_pdf))
                                <a class="btn_1 text_7 color_1 bg_3" href="download_pdf/{{$livro->file_pdf}}">Baixar PDF</a>
                            @endif
                            @if(isset($livro->file_epub))
                                <a class="btn_1 text_7 color_1 bg_3" href="download_epub/{{$livro->file_epub}}">Baixar ePub</a>
                            @endif
                        </div>
                    </div><br><br>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div align="center">
        <!-- Paginação -->
        {!! $livros->links() !!}
    </div>
@endsection