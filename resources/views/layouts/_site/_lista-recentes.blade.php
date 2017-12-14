<h3 class="header_3 text_6 color_1 bg_3 wow fadeInRight">Adicionado recentemente</h3>
<ul class="marked-list wow fadeInRight">
	@foreach($vi as $video)
		 @if($video->idioma=='portugues')
	    	<li><a class="text_12 color_3" href="{{ Route('site.video_br', $video->slug) }}" data-toggle="tooltip" title="Vídeo, {{ $video->nome}}" data-placement="right">{{ $video->nome}}</a></li> {{-- video --}}
		 @elseif($video->idioma=='ingles')
	    	<li><a class="text_12 color_3" href="{{ Route('site.video_en', $video->slug) }}" data-toggle="tooltip" title="Vídeo, {{ $video->nome}}" data-placement="right">{{ $video->nome}}</a></li> {{-- video --}}
		 @elseif($video->idioma=='espanhol')
	    	<li><a class="text_12 color_3" href="{{ Route('site.video_es', $video->slug) }}" data-toggle="tooltip" title="Vídeo, {{ $video->nome}}" data-placement="right">{{ $video->nome}}</a></li> {{-- video --}}
		 @endif 
	@endforeach	
	@foreach($se as $serie)
		<li><a class="text_12 color_3" href="{{ Route('site.serie', $serie->slug) }}" data-toggle="tooltip" title="Série, {{ $serie->nome}}" data-placement="right">{{ $serie->nome}}</a></li>  {{-- serie --}}
	@endforeach	
	@foreach($ar as $artigo)
		<li><a class="text_12 color_3" href="{{ Route('site.artigo',$artigo->slug) }}" data-toggle="tooltip" title="Artigo, {{ $artigo->nome}}" data-placement="right">{{ $artigo->nome}}</a></li> {{-- artigo --}}
	@endforeach	
	@foreach($ga as $galeria)
		<li><a class="text_12 color_3" href="{{Route('galeria', $galeria->slug)}}" data-toggle="tooltip" title="Galeria, {{ $galeria->nome}}" data-placement="right">{{ $galeria->nome}}</a></li> {{-- galeria --}}
	@endforeach	
	@foreach($au as $audio)
		<li><a class="text_12 color_3" href="{{Route('radio', $audio->slug)}}" data-toggle="tooltip" title="Áudio, {{ $audio->nome}}" data-placement="right">{{ $audio->nome}}</a></li> {{-- audio --}}
	@endforeach	
	@foreach($pa as $palestrante)
		<li>
			@if(!empty($palestrante->nome === 'Terceiro Anjo'))
                <span class="text_12 color_3" >
                {{ str_limit($palestrante->nome, 25) }}</span>
            @else
                @if($palestrante->tipo=='palestrante')
                    <a class="text_12 color_3" href="{{ Route('site.palestrante', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="right"> {{ str_limit($palestrante->nome, 25) }} </a>
                @elseif($palestrante->tipo=='programa')
                    <a class="text_12 color_3" href="{{ Route('site.programa', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="right"> {{ str_limit($palestrante->nome, 25) }} </a>
                @elseif($palestrante->tipo=='producao')
                    <a class="text_12 color_3" href="{{ Route('site.producao', $palestrante->slug) }}" data-toggle="tooltip" title="{{ $palestrante->nome }}" data-placement="right"> {{ str_limit($palestrante->nome, 25) }} </a>
                @endif                                
            @endif
       	</li>  {{-- palestrante --}}
	@endforeach	
</ul>
{{-- vi/ar/au/ga/se/pa --}}

