@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="center">Lista de Categorias para {{$videos->nome}}</h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
				        <a href="{{ route('admin.videos')}}" class="breadcrumb">Lista de Videos</a>
				        <a class="breadcrumb">Lista de Categorias</a>
			      	</div>
			    </div>
		  	</nav>
		</div>

		<div class="row">
			<form action="{{route('admin.videos.categorias.salvar',$videos->id)}}" method="post">
			{{ csrf_field() }}
			<div class="input-field">
				<select name="categoria_id">
					@foreach($categorias as $valor)
					<option value="{{$valor->id}}">{{$valor->nome}}</option>
					@endforeach
				</select>
			</div>
				<button class="btn blue">Adicionar</button>
			</form>
		</div>
	
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Categoria</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($videos->categoria as $cat)
					<tr>
						<td>{{ $cat->nome }}</td>
						<td>
							
							<a class="btn red" href="javascript: if(confirm('Remover essa categoria?')){ window.location.href = '{{ route('admin.videos.categorias.remover',[$videos->id,$cat->id]) }}' }">Remover</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			
		</div>
		
	</div>

@endsection