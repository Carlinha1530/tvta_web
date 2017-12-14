<div class="row">
    <div class="col-md-12">
        <div class="camera-wrapper">
            <div id="camera" class="camera-wrap">
                @foreach($slides as $slide)
                <div data-src="{{asset($slide->imagem)}}">
                    <div class="fadeIn camera_caption bg_4">
                        <h2 class="text_3 color_3"><a href="#">{{ $slide->nome}}</a></h2>

                        <p class="text_4 color_3">
                            {{-- {{ $slide->created_at->formatLocalized('%A, %d de %B de %Y') }} --}}
                            {{-- {{ $slide->created_at->format('l j \\of F Y') }} --}}
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            {{ $slide->created_at->diffForHumans()}} 
                            {{-- {{ date('l, d M Y (H:i)', strtotime($slide->created_at)) }} --}}
                        </p>
                        {{-- Season 2, Episode 055 (51:37) --}}

                        <p class="text_12 color_3">
                            {{  str_limit($slide->descricao, 300) }}<a href="#"><strong>..Ler Mais</strong></a>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div><br><br><br><br>