
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="mapa" class="validade" value=" {{ isset($contatos->mapa) ? $contatos->mapa : '' }}">
    <label>Mapa</label>
</div>
<div class="input-field">
    <input type="text" name="endereco" class="validade" value="{{ isset($contatos->endereco) ? $contatos->endereco : '' }}">
    <label>Endereco</label>
</div><br>
<div class="input-field">
    <input type="text" name="cidade" class="validade" value="{{ isset($contatos->cidade) ? $contatos->cidade : '' }}">
    <label>Cidade</label>
</div>
<div class="input-field">
    <input type="text" name="fone1" class="validade" value="{{ isset($contatos->fone1) ? $contatos->fone1 : '' }}">
    <label>Telefone 1</label>
</div>
<div class="input-field">
    <input type="text" name="fone2" class="validade" value="{{ isset($contatos->fone2) ? $contatos->fone2 : '' }}">
    <label>Telefone 2</label>
</div>
<div class="input-field">
    <input type="text" name="celular" class="validade" value="{{ isset($contatos->celular) ? $contatos->celular : '' }}">
    <label>Celular</label>
</div>
<div class="input-field">
    <input type="text" name="email" class="validade" value="{{ isset($contatos->email) ? $contatos->email : '' }}">
    <label>Email</label>
</div>
<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($contatos->publicar) && $contatos->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($contatos->publicar) && $contatos->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>  
