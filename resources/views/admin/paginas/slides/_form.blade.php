@include('admin.errors._errors')

@if(isset($registro->imagem))


<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($registro->nome) ? $registro->nome : '' }}">
    <label>Nome</label>
</div>
<div class="input-field">
    <input type="text" name="descricao" class="validade" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="ordem" class="validade" value="{{ isset($registro->ordem) ? $registro->ordem : '' }}">
    <label>Ordem</label>
</div>

<div class="input-field">
    <input type="text" name="link" class="validade" value="{{ isset($registro->link) ? $registro->link : '' }}">
    <label>Link</label>
</div>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($registro->publicar) && $registro->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($registro->publicar) && $registro->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div>
<br><br>
<div class="row">
    <div class="file-field input-field col m6 s12 {{ $errors->has('imagem') ? 'has-error' : '' }}">
        <div class="btn">
        <span>Imagens (1133 x 518)</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
    
        <img width="120" src="{{ asset($registro->imagem) }}">
    
    </div>
</div>

@else

<div class="row">
    <div class="file-field input-field col m12 s12 ">
        <div class="btn">
        <span>Imagens (1133 x 518)</span>
            <input type="file" multiple name="imagens[]">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>    
</div>

@endif



