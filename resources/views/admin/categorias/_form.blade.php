
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($categorias->nome) ? $categorias->nome : '' }}">
    <label>Nome</label>
</div><br>
<div class="input-field">
    <input type="text" name="descricao" class="validade" value="{{ isset($categorias->descricao) ? $categorias->descricao : '' }}">
    <label>Descrição</label>
</div><br>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($categorias->publicar) && $categorias->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($categorias->publicar) && $categorias->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>

<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Imagem (266 x 218)</span>
            <input type="file" name="_imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
    @if(isset($categorias->imagem))
        <img width="120" src="{{ asset($categorias->imagem) }}">
    @endif
    </div>
</div>