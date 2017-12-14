
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($paginas->nome) ? $paginas->nome : '' }}">
    <label>Nome</label>
</div><br>
<div class="input-field">
    <input type="text" name="descricao" class="validade" value="{{ isset($paginas->descricao) ? $paginas->descricao : '' }}">
    <label>Descrição</label>
</div>
{{-- @if(isset($paginas->email)) --}}
	<div class="input-field">
	    <input type="text" name="email" class="validade" value="{{ isset($paginas->email) ? $paginas->email : '' }}">
	    <label>Email</label>
	</div>
{{-- @endif --}}
<div class="input-field">
    <input type="text" name="texto" class="validade" value="{{ isset($paginas->texto) ? $paginas->texto : '' }}">
    <label>Texto</label>
</div><br>
<div class="input-field">
    <input type="text" name="mapa" class="validade" value=" {{ isset($paginas->mapa) ? $paginas->mapa : '' }}">
    <label>Mapa</label>
</div><br>
<div class="input-field">
    <input type="text" name="tipo" class="validade" value="{{ isset($paginas->tipo) ? $paginas->tipo : '' }}">
    <label>Tipo</label>
</div>
{{-- <div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($paginas->publicar) && $paginas->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($paginas->publicar) && $paginas->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br> --}}
<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Imagem (266 x 218)</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($paginas->imagem))
            <img width="120" src="{{ asset($paginas->imagem) }}"><br>
        @endif
    </div>
</div>
