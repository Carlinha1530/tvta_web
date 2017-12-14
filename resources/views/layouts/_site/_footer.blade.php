<footer id="footer">
    <div class="bg_3">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="header_5 text_6 color_1">CONTATO</h3><br>
                    @if(!empty($contatos->mapa))
                        <div class="video-container">
                            {!! $contatos->mapa !!}
                        </div>
                    @else
                        <img class="responsive-img" src="{{ asset('/img/Streaming.png') }}" alt="{{ asset('/img/Streaming.png') }}" title="Streaming Tv Terceiro Anjo"><br>
                    @endif
                    {{-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.337108202553!2d-47.171124885041884!3d-22.491531785224574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c88af1596bf639%3A0x7788915209d7a923!2sR.+Alameda+Sapucaia%2C+Eng.+Coelho+-+SP%2C+13165-000!5e0!3m2!1spt-BR!2sbr!4v1493231931124" width="530" height="430" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                    <br><br>
                    <ul class="list">
                        <address class="text_10 color_1">
                            <p class="text_7">
                                {{-- Alameda Sapucaia 321 – Residencial Lagoa Bonita
                                13165-000 <br> Engenheiro Coelho – SP – Brasil --}}
                                {{ $contatos->endereco }}<br> 
                                {{ $contatos->cidade }}
                            </p>
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
                        </address><br>
                        <p class="text_10 color_1">E-mail: {{ $contatos->email }}</a></p>
                    </ul>
                </div><br>
                <div class="col-md-3">
                    <h3 class="header_5 text_6 color_1">PÁGINAS</h3>
                    <ul class="list">
                        <li><a href="{{ url('/streaming') }}" title="Streaming TV">Streaming TV</a></li>
                        <li><a href="{{ url('/aovivo') }}" title="Ao Vivo">Ao Vivo</a></li>
                        <li><a href="{{ url('/radio') }}" title="Rádio">Rádio </a></li>
                        <li><a href="{{ Route('site.series') }}" title="Séries">Séries</a></li>

                        <li><a href="{{ Route('site.videos_br') }}" title="Vídeos em Português">Vídeos em Português</a></li>
                        <li><a href="{{ Route('site.videos_en') }}" title="Vídeos em Inglês">Vídeos em Inglês</a></li>
                        <li><a href="{{ Route('site.videos_es') }}" title="Vídeos em Espanhol">Vídeos em Espanhol</a></li>

                        <li><a href="{{ url('/galerias_all') }}" title="Galerias">Galerias</a></li>
                        <li><a href="{{ Route('site.categorias_all') }}" title="Categorias">Categorias</a></li>
                        <li><a href="{{ Route('site.palestrantes_all') }}" title="Palestrantes">Palestrantes </a></li>
                        <li><a href="{{ Route('site.programas_all') }}" title="Programas">Programas </a></li>
                        <li><a href="{{ Route('site.producoes_all') }}" title="Produções">Produções </a></li>
                        <li><a href="http://terceiroanjo.ebiblico.com.br/" title="Estudos Bíblicos">Estude a Bíblia Agora</a>
                        <li><a href="{{ Route('site.serie_biblica') }}" title="Estudos Bíblico Ilustrado">Série Bíblica Ilustrada</a>
                        <li><a href="{{ Route('site.infografico') }}" title="Infográficos">Infográficos</a>
                        <li><a href="{{ Route('site.artigos') }}" title="Todos os Artigos">Artigos</a></li>
                        <li><a href="{{ Route('site.livros') }}" title="Todos os Livros">Livros para Download</a></li>
                        <li><a href="{{ Route('site.audios') }}" title="Todos os Áudios">Áudios para Download</a></li>
                        <li><a href="{{ Route('quero_doar') }}" title="Quero Doar">Quero Doar</a></li>
                        <li><a href="{{ Route('quero_participar') }}" title="Quero Participar">Quero Participar </a></li>
                        <li><a href="{{ Route('quero_divulgar') }}" title="Quero Divulgar">Quero Divulgar</a></li>
                        <li><a href="{{ url('/nossa_historia') }}" title="Sobre Nós">Sobre Nós</a></li>
                        <li><a href="{{ url('/contatos') }}" title="Contatos">Contatos </a></li>
                    </ul>
                </div>              
                <div class="col-md-4">
                    <h3 class="header_5 text_6 color_1">FACEBOOK</h3><br>
                    <div class="fb-page" data-href="https://www.facebook.com/terceiroanjobrasil/?fref=nf&amp;pnref=story" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/terceiroanjobrasil/?fref=nf&amp;pnref=story" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/terceiroanjobrasil/?fref=nf&amp;pnref=story">Terceiro Anjo</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="info">
                <div class="col-md-12">
                    <p class="text_5 color_3">
                        <a href="./">Terceiro Anjo</a> © 2017 Todos os direitos reservados |
                        <a href="#">Privacy Policy</a> <br>
                        <a href="https://www.facebook.com/terceiroanjobrasil/" title="Facebook">Facebook</a> |
                        <a href="https://twitter.com/terceiro_anjo" title="Twitter">Twitter</a> |
                        <a href="https://www.youtube.com/user/TerceiroAnjoBrasil/" title="YouTube">YouTube</a> |
                        <a href="https://vimeo.com/tvterceiroanjo/" title="Vimeo">Vimeo</a> |
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    // (function($) {
    //     $('[data-toggle="tooltip"]').tooltip()     
    // })(jQuery);
</script>  

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


{{-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=433497630332007";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> --}}

<!-- Twitter -->
{{--  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>  --}}