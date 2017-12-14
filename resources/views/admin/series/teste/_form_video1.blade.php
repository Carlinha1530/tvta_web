@if (count($errors) > 0)
    <div class="row">
        <div class="alert alert-danger">
            <ul>
                <p>ATENÇÂO!!</p>
                @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> --}}
<link href="{{asset('/lib/chosen_v1.7.0/chosen.css')}}" rel="stylesheet">
<style>
	/*.video_id {
        background-color: rgba(255, 255, 255, 0.9);
        width: 100%;
        padding: 5px;
        border: 1px solid #f2f2f2;
        border-radius: 2px;
        height: 3rem;
    }*/
</style>

<div class="form-group">
    <select class="form-control" name="video_id" >
        <option>Selecione os Vídeos para a Serie...</option>
        @foreach($videos as $valor)
        <option value="{{$valor->id}}">{{$valor->nome}}</option>
        @endforeach
    </select>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{asset('/lib/chosen_v1.7.0/chosen.jquery.js')}}"></script>
<script>
    $('.form-control').chosen()
</script>