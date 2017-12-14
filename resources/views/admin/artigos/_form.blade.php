
@include('admin.errors._errors')

{{-- <div class="input-field {{ $errors->has('nome') ? 'has-error' : '' }}"> --}}
<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($artigos->nome) ? $artigos->nome : '' }}">
    {{-- @if($errors->has('nome')) --}}
        {{-- <label class="red-text text-darken-2"><strong>Nome *</strong></label> --}}
    {{-- @else --}}
   <label>Nome</label>  
    {{-- @endif --}}
</div><br>

<div class="input-field">
    <input type="text" name="autor" class="validade" value="{{ isset($artigos->autor) ? $artigos->autor : '' }}">
    {{-- @if($errors->has('nome')) --}}
        {{-- <label class="red-text text-darken-2"><strong>Nome *</strong></label> --}}
    {{-- @else --}}
   <label>Autor</label>  
    {{-- @endif --}}
</div><br>

<div class="input-field">
    <textarea name="conteudo" class="materialize-textarea">
    {{ isset($artigos->conteudo) ? $artigos->conteudo : '' }}
    </textarea>
    <label>Texto</label>
</div><br>

<div class="input-field">
    <input type="text" name="resumo" value="{{ isset($artigos->resumo) ? $artigos->resumo : '' }}"><br><br>
    <label>Resumo</label>
</div>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($artigos->publicar) && $artigos->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($artigos->publicar) && $artigos->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>

<div class="row">
    <div class="file-field input-field col m6 s12 ">
        <div class="btn">
        <span>Imagem (266 x 218)</span>
            <input type="file" name="_imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12 ">
        @if(isset($artigos->imagem))
            <img width="120" src="{{ asset($artigos->imagem) }}"><br>
        @endif
    </div>
</div>

<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Arquivo (pdf)</span>
            <input type="file" name="_file">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($artigos->file))
            <img width="120" src="{{ asset($artigos->file) }}"><br>
        @endif
    </div>
</div>
