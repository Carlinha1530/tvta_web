
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="link_video" class="validade" value=" {{ isset($sobrenos->link_video) ? $sobrenos->link_video : '' }}">
    <label>Link_video</label>
</div><br>  

<div class="input-field">
    <textarea name="descricao_sobrenos" class="materialize-textarea">
    {{ isset($sobrenos->descricao_sobrenos) ? $sobrenos->descricao_sobrenos : '' }}
    </textarea>
    <label>Descricao Sobre-nos</label>
</div><br>

<div class="input-field">
    <textarea name="descricao_oportunidades" class="materialize-textarea">
    {{ isset($sobrenos->descricao_oportunidades) ? $sobrenos->descricao_oportunidades : '' }}
    </textarea>
    <label>Descricao Oportunidades</label>
</div><br>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($sobrenos->publicar) && $sobrenos->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($sobrenos->publicar) && $sobrenos->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>  
