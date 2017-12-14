@include('admin.errors._errors')

{{-- <div class="form-group">
    <select class="form-control" name="categoria_id">
        <option>Selecione as categorias para o Vídeo...</option>
        @foreach($categorias as $valor)
        <option value="{{$valor->id}}">{{$valor->nome}}</option>
        @endforeach
    </select>
</div>
 --}}
<div class="row">
    <div class="col s12">
        <label>Escolha as Categorias</label>
        <select class="browser-default" name="categoria_id">
            <option value="" selected>Selecione as categorias para o Vídeo...</option>
            @foreach($categorias as $valor)
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
