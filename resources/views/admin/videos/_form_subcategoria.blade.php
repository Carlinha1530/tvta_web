@include('admin.errors._errors')

{{-- <div class="form-group">
    <select class="form-control" name="subcategoria_id">
        <option>Selecione as subcategorias para o Vídeo...</option>
        @foreach($subcategorias as $valor)
        <option value="{{$valor->id}}">{{$valor->nome}}</option>
        @endforeach
    </select>
</div>
 --}}
<div class="row">
    <div class="col s12">
        <label>Escolha as Subcategorias</label>
        <select class="browser-default" name="subcategoria_id">
            <option value="" selected>Selecione as subcategorias para o Vídeo...</option>
            @foreach($subcategorias as $valor)
	        <option value="{{$valor->id}}">{{$valor->nome}}</option>
	        @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <button class="btn btn-success">Adicionar</button>
    </div>
</div>
