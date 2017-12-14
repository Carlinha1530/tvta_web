
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($palestrantes->nome) ? $palestrantes->nome : '' }}">
    <label>Nome</label>
</div>
<div class="input-field">
    <input type="text" name="profissao" class="validade" value="{{ isset($palestrantes->profissao) ? $palestrantes->profissao : '' }}">
    <label>Ocupação</label>
</div><br>

<label >Descrição</label>
<div class="input-field">
    <textarea name="descricao" class="materialize-textarea">
       {{ isset($palestrantes->descricao) ? $palestrantes->descricao : '' }}
    </textarea>
</div><br>
<div class="input-field">
    <input type="text" name="resumo" value="{{ isset($palestrantes->resumo) ? $palestrantes->resumo : '' }}"><br><br>
    <label>Resumo</label>
</div>
<div class="input-field">
    <label>Tipo</label><br><br>
    <select name="tipo" class="browser-default">
        <option value="palestrante" {{(isset($palestrantes->tipo) && $palestrantes->tipo == 'palestrante'  ? 'selected' : '')}}>Palestrante</option>
        <option value="programa" {{(isset($palestrantes->tipo) && $palestrantes->tipo == 'programa'  ? 'selected' : '')}}>Programa</option>
        <option value="producao" {{(isset($palestrantes->tipo) && $palestrantes->tipo == 'producao'  ? 'selected' : '')}}>Produção</option>
    </select>
</div><br>
<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($palestrantes->publicar) && $palestrantes->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($palestrantes->publicar) && $palestrantes->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
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
        @if(isset($palestrantes->imagem))
            <img width="120" src="{{ asset($palestrantes->imagem) }}"><br>
        @endif
    </div>
</div>
<!-- <div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Arquivo</span>
            <input type="file" name="file">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($palestrantes->file))
            <img width="120" src="{{ asset($palestrantes->file) }}"><br>
        @endif
    </div>
</div> -->
