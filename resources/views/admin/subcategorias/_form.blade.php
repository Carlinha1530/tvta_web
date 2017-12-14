
@include('admin.errors._errors')

<div class="input-field">
    <input type="text" name="nome" class="validade" value="{{ isset($subcategorias->nome) ? $subcategorias->nome : '' }}">
    <label>Nome</label>
</div>

<div class="input-field">
    <label>Categoria</label><br><br>
    <select name="id_categoria" class="browser-default">
        <option>Escolha uma categoria..</option>
        @foreach($categorias as $categoria)
        <option value="{{ $categoria->id }}" {{(isset($subcategorias->id_categoria) && $subcategorias->id_categoria == $categoria->id  ? 'selected' : '')}}> 
            {{ $categoria->nome }} 
        </option>
        @endforeach
    </select>
</div>

<div class="input-field">
    <label>Publicar?</label><br><br>
    <select name="publicar" class="browser-default">
        <option value="nao" {{(isset($subcategorias->publicar) && $subcategorias->publicar == 'nao'  ? 'selected' : '')}}>Não</option>
        <option value="sim" {{(isset($subcategorias->publicar) && $subcategorias->publicar == 'sim'  ? 'selected' : '')}}>Sim</option>
    </select>
</div><br>
