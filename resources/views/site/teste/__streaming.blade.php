@extends('layouts.site')

@section('pagina_titulo', 'Streaming')

@section('content')
    {{-- <div class="embed-responsive embed-responsive-16by9">
        <div id="video-container" class="streaming">
            <iframe src="https://www.youtube.com/embed/live_stream?channel=UCkSu5ibA15OcBWTjop72dPA&autoplay=1&controls=2" width="100%" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div> --}}

    <style>
    	.img{
			background: url('{{ asset('img/logos/television.png') }}') no-repeat center center;
			background-size: cover; 
			display: block;  
			height: 622px; 
			max-height: 100%; 
			width: 101%;"
    	}
    	.img{
			height: 490px;
			background: #111;
			float: left;
			-webkit-box-shadow: -1px 2px 101px -18px rgba(0, 0, 0, 0.7);
			-moz-box-shadow: -1px 2px 101px -18px rgba(0, 0, 0, 0.7);
			box-shadow: -1px 2px 101px -18px rgba(0, 0, 0, 0.7);
			margin: 20px 0 0 10px;
    	}
    	.stream{
		    margin-left: 7.6%;
		    margin-top: 3.3%;
		    width: 85%;
		    height: 85.7%;
		}	

		@media screen and (max-width: 480px){
		  .img{
		    height: 149px; 
		    width: 100%;" 
		  }
		}
    </style>

    <div class="row">
		<div class="col-md-10">
			<div class="">
				<div id="video-container" class="streaming img">
					<iframe class="stream" src="https://www.youtube.com/embed/live_stream?channel=UCkSu5ibA15OcBWTjop72dPA&autoplay=1&controls=2" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					{{--  <iframe class="stream" src="https://www.youtube.com/embed/live_stream?channel=UCkSu5ibA15OcBWTjop72dPA&autoplay=1&controls=2" width="853" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>  --}}
				</div>
			</div><br>
		</div>
		<div class="col-md-2">

		</div>
	</div>
 
    @include('layouts._site._streaming_flags')

	@foreach($xml as $item)
		<?php   
			$data = new DateTime($item['ScheduledAt']);
			list($hours, $minutes, $seconds) = explode(":", $item['Duration']);
			$seconds = (float) $seconds;
			$seconds = ceil($seconds);

			$intervalo = new DateInterval("PT" . $hours . "H" . $minutes . "M" . $seconds . "S");
			$data->add($intervalo);
		?>

		@if($data >= $now)
        	<p>{{$item['Name']}}</p>
		@endif
    @endforeach

@endsection

