@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($radioaudios->nome) ? $radioaudios->nome : '' }}">
    <label>Nome</label>
</div><br>
<div class="input-field">
    <input type="text" name="descricao" class="validade" value="{{ isset($radioaudios->descricao) ? $radioaudios->descricao : '' }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($radioaudios->publicar) && $radioaudios->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($radioaudios->publicar) && $radioaudios->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>

<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Áudio (mp3)</span>
            <input type="file" name="_audio">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div><br>
    <div class="col m6 s12">
        @if(isset($radioaudios->audio))
            <audio controls>
                <source src="{{ asset($radioaudios->audio) }}" type="audio/ogg">
                <source src="{{ asset($radioaudios->audio) }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        @endif
    </div>
</div>