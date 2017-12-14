@include('admin.errors._errors')

<link href="{{asset('/lib/chosen_v1.7.0/chosen.css')}}" rel="stylesheet">

<div class="row">
    <div class="col s12">
        <label>Selecione os Vídeos para a Série...</label>
        <select class="browser-default" name="video_id">
            @foreach($videos as $valor)
            <option value="{{$valor->id}}">{{$valor->nome}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <button class="btn btn-success">Adicionar</button>
    </div>
</div>

{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('/lib/chosen_v1.7.0/chosen.jquery.js')}}"></script>
<script>
    $('.browser-default').chosen()
</script>



