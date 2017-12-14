@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($livros->nome) ? $livros->nome : '' }}">
    <label>Nome</label>
</div><br>
<div class="input-field">
    <input type="text" name="descricao" class="validade" value="{{ isset($livros->descricao) ? $livros->descricao : '' }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($livros->publicar) && $livros->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($livros->publicar) && $livros->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>

<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Arquivo (PDF)</span>
            <input type="file" name="_file_pdf">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($livros->file_pdf))
            <img width="120" src="{{ asset($livros->file_pdf) }}"><br>
        @endif
    </div>
</div>

<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Arquivo (ePub)</span>
            <input type="file" name="_file_epub">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($livros->file_epub))
            <img width="120" src="{{ asset($livros->file_epub) }}"><br>
        @endif
    </div>
</div>

<div class="row">
    <div class="file-field input-field col m6 s12 ">
        <div class="btn">
        <span>Imagem </span>
            <input type="file" name="_imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12 ">
        @if(isset($livros->imagem))
            <img width="120" src="{{ asset($livros->imagem) }}"><br>
        @endif
    </div>
</div>