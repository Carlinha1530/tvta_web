
@include('admin.errors._errors')

{{-- <div class="input-field {{ $errors->has('name') ? 'has-error' : '' }}">
    <input type="text" name="name" class="validade" value="{{ isset($usuario->name) ? $usuario->name : '' }}">
    @if($errors->has('name'))
        <label class="validation"><strong>Nome *</strong></label>
    @else
   <label>Nome</label>  
    @endif
</div><br> --}}

<div class="input-field">
    <input type="text" name="name" value="{{ isset($usuario->name) ? $usuario->name : '' }}">
    <label>Nome</label>
</div>

<div class="input-field">
    <input type="text" name="email" value="{{ isset($usuario->email) ? $usuario->email : '' }}">
    <label>Email</label>
</div>

@if(!isset($usuario->password))
<div class="input-field">
    <input type="password" name="password" value="{{ isset($usuario->password) ? $usuario->password : '' }}">
    <label>Senha</label>
</div>
<div class="input-field">
    <input type="password" name="password_confirmation" >
    <label>Confirmar Senha</label>
</div>
@endif

<div class="input-field">
    <input type="text" name="profissao" value="{{ isset($usuario->profissao) ? $usuario->profissao : '' }}">
    <label>Profissão</label>
</div><br>
<div class="input-field">
	<textarea name="descricao" class="materialize-textarea">
    	{{ isset($usuario->descricao) ? $usuario->descricao : '' }}
	</textarea>
    <label>Descrição</label>
</div><br>
<div class="input-field">
    <input type="text" name="resumo" value="{{ isset($usuario->resumo) ? $usuario->resumo : '' }}"><br><br>
    <label>Resumo</label>
</div>
<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($usuario->publicar) && $usuario->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($usuario->publicar) && $usuario->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>
<div class="row">
    <div class="file-field input-field col m6 s12">
        <div class="btn">
        <span>Imagem (266 x 218)</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" >
        </div>      
    </div>
    <div class="col m6 s12">
    	@if(isset($usuario->imagem))
        	<img width="120" src="{{ asset($usuario->imagem) }}">
		@endif
    </div>
</div>

{{-- <div class="radio">
  <label>
    <input type="radio" name="tipo" value="usuario" {{isset($usuario->tipo) && $usuario->tipo == 'usuario' ? 'checked' : '' }} required>Usuário
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="tipo" value="equipe" {{isset($usuario->tipo) && $usuario->tipo == 'equipe' ? 'checked' : '' }} required>Equipe
  </label>
</div> --}}
