
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($galerias->nome) ? $galerias->nome : '' }}">
    <label>Nome</label>
</div><br>
<div class="input-field">
    <textarea name="descricao" class="materialize-textarea">
        {{ isset($galerias->descricao) ? $galerias->descricao : '' }}
    </textarea>
    <label>Descrição</label>
</div><br>
<div class="input-field">
    <input type="text" name="resumo" value="{{ isset($galerias->resumo) ? $galerias->resumo : '' }}"><br><br>
    <label>Resumo</label>
</div>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($galerias->publicar) && $galerias->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($galerias->publicar) && $galerias->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>
<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Imagem (266 x 218)</span>
            <input type="file" name="_img">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($galerias->img))
            <img width="120" src="{{ asset($galerias->img) }}">
        @endif
    </div>
</div>