
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($videos->nome) ? $videos->nome : '' }}">
    <label>Nome</label>
</div>
<div class="input-field">
    <label>Palestrante</label><br><br>
    <select name="id_palestrante" class="browser-default">
        <option>Escolha um palestrante..</option>
        @foreach($palestrantes as $palestrante)
            <option value="{{ $palestrante->id }}" {{(isset($videos->id_palestrante) && $videos->id_palestrante == $palestrante->id  ? 'selected' : '')}}> 
                {{ $palestrante->nome }} ({{ $palestrante->tipo }})
            </option>
        @endforeach
    </select>
</div><br>

<div class="input-field">
    <label>Série</label><br><br>
    <select name="id_serie" class="browser-default">
        <option>Escolha uma Série..</option>
        @foreach($series as $serie)
            <option value="{{ $serie->id }}" {{(isset($videos->id_serie) && $videos->id_serie == $serie->id  ? 'selected' : '')}}> 
                {{ $serie->nome }}
            </option>
        @endforeach
    </select>
</div><br><br>

@if(isset($videos->ordem_data))
<div class="input-field">
    <input type="text" name="ordem_data" class="validade" value="{{ isset($videos->ordem_data) ? $videos->ordem_data : '' }}">
    <label>
        Data Ordem 
        {{-- (<small  style="color: black">Ultima Atualização: </small>  
        <small style="color: red">{{ $videos->updated_at}} </small> ) --}}
    </label>
</div><br>  
@endif

<div class="input-field">
    <textarea name="descricao" class="materialize-textarea">
        {{ isset($videos->descricao) ? $videos->descricao : '' }}
    </textarea>
    <label>Descrição<a style="color:red"> [ATENÇÃO: Font padrão: VERDANA 12pt (para NEGRITO, usar ARIAL BLACK 12pt)]</a></label>

    {{--  <p><strong style="font-weight: bold; color:red">ATENÇÃO: Font padrão: VERDANA 12pt (para NEGRITO, usar ARIAL 12pt)</strong><br>  --}}

</div><br>

<div class="input-field">
    <input type="text" name="resumo" value="{{ isset($videos->resumo) ? $videos->resumo : '' }}">
    <label>Resumo</label>
</div>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($videos->publicar) && $videos->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($videos->publicar) && $videos->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>

<div class="input-field">
    <label>Idioma</label><br><br>
    <select name="idioma" class="browser-default">
        <option value="portugues" {{(isset($videos->idioma) && $videos->idioma == 'portugues'  ? 'selected' : '')}}>Português</option>
        <option value="ingles" {{(isset($videos->idioma) && $videos->idioma == 'ingles'  ? 'selected' : '')}}>Inglês</option>
        <option value="espanhol" {{(isset($videos->idioma) && $videos->idioma == 'espanhol'  ? 'selected' : '')}}>Espanhol</option>
    </select>
</div><br>

<div class="input-field">
    <label>Exibir pedido de doação?</label><br><br>
    <select name="doacao" class="browser-default">
        <option value="nao" {{(isset($videos->doacao) && $videos->doacao == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($videos->doacao) && $videos->doacao == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>

<div class="input-field">
    <input type="hidden" name="link_video" >
    <input type="text" name="link_original" class="validade" value="{{ isset($videos->link_original) ? $videos->link_original : '' }}">
    <label>Link </label>
</div>

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
        @if(isset($videos->imagem))
            <img width="120" src="{{ asset($videos->imagem) }}"><br>
        @endif
    </div>
</div>


<script>
    // (function ($) {
    //     $(function () {

    //         //initialize all modals           
    //         $('.modal').modal();

    //         //now you can open modal from code
    //         $('#modal1').modal('open');

    //         //or by click on trigger
    //         $('.trigger-modal').modal();

    //     }); // end of document ready
    // })(jQuery); // end of jQuery name space
</script>