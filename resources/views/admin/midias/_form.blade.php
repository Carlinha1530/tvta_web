
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($midias->nome) ? $midias->nome : '' }}">
    <label>Nome</label>
</div>

<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Mídia (Imagem, PDF, MP3)</span>
            <input type="file" name="_file">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($midias->file))
            <img width="120" src="{{ asset($midias->file) }}"><br>
        @endif
    </div>
</div>
