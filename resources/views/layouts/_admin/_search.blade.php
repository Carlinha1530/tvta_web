<div class="row">
    <form  action="{{ Route('admin.categorias') }}" method="GET" accept-charset="utf-8">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          {{-- <input id="email" type="text" name="str" value="{{$str}}" class="validate"> --}}
          <input id="str" type="text" name="str" value="{{$str}}" class="validate">
          <label for="str" data-error="wrong" data-success="right">Buscar</label>
        </div>
      </div>
    </form>
</div>