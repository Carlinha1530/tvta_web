<h2 class="header_1 text_6 color_1 bg_3 maxheight"><a href="{{ Route('site.categorias_all') }}" title="Categorias">Categorias</a></h2>
<div class="wrap_5">
	<div class="row">
		@foreach($categorias as $categoria)
		<div class="grid_2 wow fadeInRight">
		    <ul class="marked-list">
		        <li><a href="{{ Route('site.categoria' $categoria->slug) }}" data-toggle="tooltip" title="Ver categoria" data-placement="right">{{ $categoria->nome }}</a></li>
		    </ul>
		</div>
		@endforeach
	</div>
</div>

