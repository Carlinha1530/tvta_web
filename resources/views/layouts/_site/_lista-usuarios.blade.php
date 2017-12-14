@foreach($users as $use)
<div class="col-md-3 wow fadeInLeft" data-wow-delay=".2s">
    <div class="box_1">
        {{-- <a data-type="lightbox" href="{{asset($use->imagem)}}"> --}}
        {{-- <a class="text_11 color_3" href="{{asset($use->imagem)}}"> --}}
            <span class="thumbnail" style="background: url('{{asset($use->imagem)}}') no-repeat center center; background-size: cover; display: block;  height: 222px; max-height: 100%; " alt="Imagem de {{ $use->name }}"></span>
        {{-- </a> --}}
        <br>
        <div class="caption_2">
            <h3 class="text_11 color_3"><a href="#">{{ $use->name }}</a>
            </h3>
            <small class="text_8 color_4"> {{ $use->profissao }} </small><br>
            <p class="text_12 color_4">{!! $use->descricao  !!} </p>
            {{-- <p class="text_9 color_4">{{ str_limit($use->descricao, 200)  }} </p> --}}
        </div><br><br>
    </div>
</div>
@endforeach

{{-- <a href="#" data-toggle="modal" data-target=".{{ $use->id }}">     
    <strong style="font-weight: bold;">..Ver mais</strong>
</a> --}}
<!-- Modal -->
{{-- <div class="modal fade {{ $use->id }}" id="{{ $use->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><strong>{{ $use->name }} </strong></h4>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div> --}}