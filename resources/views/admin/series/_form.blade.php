
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($series->nome) ? $series->nome : '' }}">
    <label>Nome</label>
</div><br>
<div class="input-field">
    <textarea name="descricao" class="materialize-textarea">
        {{ isset($series->descricao) ? $series->descricao : '' }}
    </textarea>
    <label>Descrição</label>
</div><br>

<div class="input-field">
    <input type="text" name="resumo" value="{{ isset($series->resumo) ? $series->resumo : '' }}"><br><br>
    <label>Resumo</label>
</div>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($series->publicar) && $series->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($series->publicar) && $series->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>
<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Imagem (500 x 300)</span>
            <input type="file" name="_imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($series->imagem))
            <img width="120" src="{{ asset($series->imagem) }}">
        @endif
    </div>
</div>