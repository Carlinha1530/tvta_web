
@include('admin.errors._errors')

@if( isset($registro->img_large))

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    <label>Nome</label>
</div><br>
<div class="input-field">
    <input type="text" name="descricao" class="validade" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
    <label>Descrição</label>
</div><br>
<div class="input-field">
    <input type="text" name="ordem" class="validade" value="{{ isset($registro->ordem) ? $registro->ordem : '' }}">
    <label>Ordem</label>
</div>
<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($registro->publicar) && $registro->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>
<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Imagem (266 x 218)</span>
            <input type="file" name="img_large">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        <img width="120" src="{{ asset($registro->img_large) }}">
    </div>
</div>

@else

<div class="row">
    <div class="file-field input-field col m12 s12">
        <div class="btn">
        <span>Imagem (266 x 218)</span>
            <input type="file" multiple name="imagens_large[]">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>    
</div>

@endif