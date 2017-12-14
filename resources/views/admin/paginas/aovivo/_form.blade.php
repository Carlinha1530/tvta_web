
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="titulo" class="validade" value=" {{ isset($aovivo->titulo) ? $aovivo->titulo : '' }}">
    <label>Titulo</label>
</div><br>  

<div class="input-field">
    <textarea name="descricao" class="materialize-textarea">
    {{ isset($aovivo->descricao) ? $aovivo->descricao : '' }}
    </textarea>
    <label>Descrição</label>
</div><br>

<div class="input-field">
    <input type="text" name="link_video" class="validade" value=" {{ isset($aovivo->link_video) ? $aovivo->link_video : '' }}">
    <label>Link Vídeo Português</label>
    <strong style="font-weight: bold; color:black">Exemplo do link para o vídeo: </strong> <strong style="color:red"> https://www.youtube.com/embed/live_stream?channel=UCkSu5ibA15OcBWTjop72dPA&autoplay=1&controls=2</strong>
</div><br> 
<div class="input-field">
    <input type="text" name="link_videoen" class="validade" value=" {{ isset($aovivo->link_videoen) ? $aovivo->link_videoen : '' }}">
    <label>Link Vídeo Inglês</label>
    <strong style="font-weight: bold; color:black">Exemplo do link para o vídeo: </strong> <strong style="color:red"> https://www.youtube.com/embed/s5zcdFH0Eg4?rel=0&amp;showinfo=0&autoplay=1&controls=2</strong>
</div><br> 
<div class="input-field">
    <input type="text" name="link_videoes" class="validade" value=" {{ isset($aovivo->link_videoes) ? $aovivo->link_videoes : '' }}">
    <label>Link Vídeo Espanhol</label>
    <strong style="font-weight: bold; color:black">Exemplo do link para o vídeo: </strong> <strong style="color:red"> https://www.youtube.com/embed/8HFGg4xvzfI?rel=0&amp;showinfo=0&autoplay=1&controls=2</strong>
</div><br> 

{{-- 
<div class="input-field">
    <input type="hidden" name="link_video" >
    <input type="text" name="link_original" class="validade" value="{{ isset($videos->link_original) ? $videos->link_original : '' }}">
    <label>Link </label>
</div> 
--}}

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($aovivo->publicar) && $aovivo->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($aovivo->publicar) && $aovivo->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>  
