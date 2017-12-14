@extends('layouts.site')

@section('pagina_titulo', 'Participar')

@section('content')
	<div class="wrap_6">
        <div class="row">
            <div class="col-md-12 wow fadeInLeft">
                <h3 class="header_3 text_6 color_1 bg_3">Participe</h3>
            </div>
        </div>
    </div>
    <div class="wrap_2">
    	<div class="caption_2">
            <h4 class="text_11 color_3 wow fadeInRight">
                Você pode apoiar este ministério de várias formas:
            </h4>
        </div><br><br>
        <div class="row">
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".2s">
                <div class="box_2">
                    <div class="caption">
                        <div class="row">
                            <img src="img/icons/oracao1.png" height="128" width="128" alt="">
                            <h4 class="text_11 color_3">Orações</h4><br>
                        </div>
                        <div class="row">
                            <p class="text_8_1 color_4" style="text-align: justify;" title="A Igreja, revestida da justiça de Cristo, é Sua depositária, na qual as riquezas de Sua misericórdia, amor e graça, se hão de por fim revelar plenamente. A declaração que fez em Sua oração intercessora, de que o amor do Pai é tão grande para conosco como para consigo mesmo, na qualidade de Filho unigênito, e que estaremos com Ele onde estiver, e que seremos um com Cristo e o Pai, é uma maravilha para o exército celestial, e constitui sua grande alegria.">A Igreja, revestida da justiça de Cristo, é Sua depositária, na qual as riquezas de Sua misericórdia, amor e graça, se hão de por fim revelar plenamente. A declaração que fez em Sua oração intercessora, de que o amor do Pai é tão grande para conosco como para consigo mesmo, na qualidade de Filho unigênito, e que estaremos com Ele onde estiver, e que seremos um com Cristo e o Pai, é uma maravilha para o exército celestial, e constitui sua grande alegria.</p>
                        </div>
                        {{-- <div class="row">
                            <a href="#" class="btn_1 text_12 color_1 bg_3" style="margin-top: -1%;">Ver Mais</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".4s">
                <div class="box_2">
                    <div class="caption">
                        <div class="row">
                            <img src="img/icons/trabalho1.png" alt="">
                            <h4 class="text_11 color_3"><a title="Seja voluntário" target="_blanck" href="https://goo.gl/forms/1YA8JI2Uzs3PAmnA2">Empenho Pessoal</a></h4><br>
                        </div>
                        <div class="row">
                            <p class="text_8_1 color_4" style="text-align: justify;">
                                A candidatura ao voluntariado pode ser feita para trabalho presencial ou à distância. O voluntário à distância poderá exercer as seguintes tarefas:
                                Traduções (inglês, espanhol), produção de Prezis, edição de áudio, e similares.
                                <a title="Seja voluntário" target="_blanck" href="https://goo.gl/forms/1YA8JI2Uzs3PAmnA2" style="color: red">Preencher Formulário</a>
                            </p>
                        </div>
                        {{-- <div class="row">
                            <a target="_blanck" href="https://goo.gl/forms/1YA8JI2Uzs3PAmnA2" class="btn_1 text_12 color_1 bg_3" style="margin-top: -1%;">Preencher Formulário</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".6s">
                <div class="box_2">
                    <div class="caption">
                        <div class="row">
                            <img src="img/icons/divulgar1.png" alt="">
                            <h4 class="text_11 color_3"><a title="Divulgue para seus amigos" target="_blanck" href="{{ Route('quero_divulgar') }}">Divulgação</a></h4><br>
                        
                            <p class="text_8_1 color_4" style="text-align: justify;margin-bottom: -5.2%;">
                            Curta os vídeos que assiste nas redes sociais. Indique-nos a seus amigos. Também poste links e banners em seu site ou blog. <a title="Divulgue para seus amigos" target="_blanck" href="{{ Route('quero_divulgar') }}" style="color: red">Obtenha aqui os códigos.</a>
                            </p><br>
                            <a title="Siga-nos no facebook" href="https://www.facebook.com/terceiroanjobrasil/" class=" text_12 color_1"><img src="img/icons/facebook1.png" height="30" width="30" alt="https://www.facebook.com/terceiroanjobrasil/"></a>
                            <a title="Siga-nos no Twitter" href="https://twitter.com/terceiro_anjo" class=" text_12 color_1"><img src="img/icons/twitter1.png" height="30" width="30" alt="https://twitter.com/terceiro_anjo"></a>
                            <a title="Siga-nos no youtube " href="https://www.youtube.com/user/TerceiroAnjoBrasil/" class=" text_12 color_1"><img src="img/icons/youtube1.png" height="30" width="30" alt="https://www.youtube.com/user/TerceiroAnjoBrasil/"></a>
                            <a title="Siga-nos vimeo" href="https://vimeo.com/tvterceiroanjo/" class=" text_12 color_1"><img src="img/icons/vimeo1.png" height="30" width="30" alt="https://vimeo.com/tvterceiroanjo/"></a>
                        </div>
                        {{-- <div class="row">
                            <a href="{{ Route('quero_divulgar') }}" class="btn_1 text_12 color_1 bg_3" style="margin-top: -1%;">Ver códigos</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".8s">
                <div class="box_2">
                    <div class="caption">
                        <div class="row">
                            <img src="img/icons/doacao1.png" alt=""><br><br>
                            <h4 class="text_11 color_3"><a title="Agradecemos por considerar ajudar com doações" target="_blanck" href="{{ Route('quero_doar') }}">Doações</a></h4><br>
                        </div>
                        <div class="row">
                            <p class="text_8_1 color_4" style="text-align: justify;">Terceiro Anjo não faz propaganda comercial e oferece tudo gratuitamente. Porém, subsistimos através das doações dos irmãos. Temos vários projetos e necessitamos de patrocínios externos.<a title="Agradecemos por considerar ajudar com doações" target="_blanck" href="{{ Route('quero_doar') }}" style="color: red"> Agradecemos por considerar ajudar com doações.</a></p><br><br>
                        </div>
                        {{-- <div class="row">
                            <a href="{{ Route('quero_doar') }}" class="btn_1 text_12 color_1 bg_3">Fazer Doações</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection