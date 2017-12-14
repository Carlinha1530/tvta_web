{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $errors)
        <ul>
            <li>{{ $errors }}</li>
        </ul>    
        @endforeach
    </div>
@endif --}}

<div class="input-field {{ $errors->has('nome') ? 'has-error' : '' }}">
    <input type="text" name="nome" class="validade" value="{{ isset($artigos->nome) ? $artigos->nome : '' }}">
    <label>Nome</label>

    @if($errors->has('nome'))
        <span class="help-block">
            <strong>{{ $errors->first('nome') }}</strong>
        </span>
    @endif 
</div>
<div class="input-field {{ $errors->has('conteudo') ? 'has-error' : '' }}">
    <textarea name="conteudo" class="materialize-textarea">
       {{ isset($artigos->conteudo) ? $artigos->conteudo : '' }}
    </textarea>
    <label>Descrição</label>
    @if($errors->has('conteudo'))
        <span class="help-block">
            <strong>{{ $errors->first('conteudo') }}</strong>
        </span>
    @endif
</div>
<div class="input-field">
    <input type="date" name="data" value="{{ isset($artigos->data) ? $artigos->data : '' }}">
    {{-- <label>Data</label> --}}
</div>
<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Imagem</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path validade">
        </div>      
    </div>
    <div class="col m6 s12">
        @if(isset($artigos->imagem))
            <img width="120" src="{{ asset($artigos->imagem) }}"><br>
        @endif
    </div>
</div>
<div class="row">
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
        @if(isset($artigos->file))
            <img width="120" src="{{ asset($artigos->file) }}"><br>
        @endif
    </div>
</div>
