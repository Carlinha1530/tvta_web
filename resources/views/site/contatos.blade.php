@extends('layouts.site')

@section('pagina_titulo', 'Contatos')

@section('content')
    <div class="wrap_6 wrap_1">
        <div class="row">
            <div class="col-md-6">
                <h3 class="header_6 text_6 color_1 bg_3">Postal Address</h3>
                <div class="video-container">
                    {{-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.337108202553!2d-47.171124885041884!3d-22.491531785224574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c88af1596bf639%3A0x7788915209d7a923!2sR.+Alameda+Sapucaia%2C+Eng.+Coelho+-+SP%2C+13165-000!5e0!3m2!1spt-BR!2sbr!4v1493231931124" width="530" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>--}}

                    @if(!empty($contatos->mapa))
                        <div class="video-container">
                            {!! $contatos->mapa !!}
                        </div>
                    @else
                        <img class="responsive-img" src="{{ asset('/img/Streaming.png') }}" alt="Imagem Alternativa mapa"><br>
                    @endif
                </div>

                <br>
                <address class="text_10 color_4">
                    <p class="text_11 color_3">
                        {{ $contatos->endereco }}<br> 
                        {{ $contatos->cidade }}
                    </p><br>
                    <dl>
                        <dt>Fixo:</dt>
                        <dd>{{ $contatos->fone1 }}</dd><br>
                        <dt></dt>
                        <dd>{{ $contatos->fone2 }}</dd>
                    </dl>
                    <dl>
                        <dt>Celular:</dt>
                        <dd>{{ $contatos->celular }}</dd>
                    </dl>

                    <p class="text_10">E-mail: {{ $contatos->email }}</p>
                </address>
            </div>

            <div class="col-md-6">
                {{-- <h3 class="header_6 text_6 color_1 bg_3">{{ $pagina->nome }}</h3> --}}
                <h3 class="header_6 text_6 color_1 bg_3">Entre em Contato</h3>
                <form id="contact-form" action="{{ Route('site.contatos.enviar') }}" method="post">
                    {{ csrf_field() }}
                    <div class="contact-form-loader"></div>
                    <fieldset>
                        <label class="name">
                            <input type="text" name="nome" placeholder="Nome:" value=""
                                   data-constraints="@Required @JustLetters"/>
                        </label>

                        <label class="email">
                            <input type="text" name="email" placeholder="Email:" value=""
                                   data-constraints="@Required @Email"/>
                        </label>

                        <label class="message">
                            <textarea name="mensagem" placeholder="Mensagem:"
                                      data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        </label>

                        <div class="btn-wrapper">
                            <button class="btn_1 bg_3 text_7 color_1">Enviar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection