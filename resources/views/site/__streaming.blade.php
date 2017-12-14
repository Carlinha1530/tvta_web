@extends('layouts.site')

@section('pagina_titulo', 'Streaming')

@section('content')
    {{-- <div class="embed-responsive embed-responsive-16by9">
        <div id="video-container" class="streaming">
            <iframe src="https://www.youtube.com/embed/live_stream?channel=UCkSu5ibA15OcBWTjop72dPA&autoplay=1&controls=2" width="100%" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div> --}}

    <style>
		/*.flowplayer {
		background-color: #00abcd;
		}
		.flowplayer .fp-color-play {
		fill: #eee;
		}*/
    	
    	.img{
			height: 490px;
			width: 100%;
			background: #111;
			float: left;
			-webkit-box-shadow: -1px 2px 101px -18px rgba(0, 0, 0, 0.7);
			-moz-box-shadow: -1px 2px 101px -18px rgba(0, 0, 0, 0.7);
			box-shadow: -1px 2px 101px -18px rgba(0, 0, 0, 0.7);
			margin: 20px 0 0 10px;
    	}
    	.stream{
			margin-left: 8git push.6%;
			margin-top: 6.3%;
			width: 86%;
			height: 71.7%;
		}	

		@media screen and (max-width: 480px){
		  .img{
		    height: 149px; 
		    width: 100%;" 
		  }
		}

		.timeline{list-style:none;padding:0 0 45px;position:relative;margin-top:-10px}.timeline:before{top:30px;bottom:25px;position:absolute;content:" ";width:3px;background-color:#ccc;left:25px;margin-right:-1.5px}.timeline>li,.timeline>li>.timeline-panel{margin-bottom:5px;position:relative}.timeline>li:after,.timeline>li:before{content:" ";display:table}.timeline>li:after{clear:both}.timeline>li>.timeline-panel{margin-left:55px;float:left;top:30px;padding:9px 10px 8px 15px;border:1px solid #ccc;border-radius:5px;width:100%}.timeline>li>.timeline-badge{color:#fff;width:36px;height:36px;line-height:36px;font-size:1.2em;text-align:center;position:absolute;top:30px;left:9px;margin-right:-25px;background-color:#fff;z-index:100;border-radius:50%;border:1px solid #d4d4d4}.timeline>li.timeline-inverted>.timeline-panel{float:left}.timeline>li.timeline-inverted>.timeline-panel:before{border-right-width:0;border-left-width:15px;right:-15px;left:auto}.timeline>li.timeline-inverted>.timeline-panel:after{border-right-width:0;border-left-width:14px;right:-14px;left:auto}.timeline-badge.primary{background-color:#2e6da4!important}.timeline-badge.success{background-color:#3f903f!important}.timeline-badge.warning{background-color:#f0ad4e!important}.timeline-badge.danger{background-color:#d9534f!important}.timeline-badge.info{background-color:#5bc0de!important}.timeline-title{margin-top:0;color:inherit;font-size: 34px;}.timeline-body>p,.timeline-body>ul{margin-bottom:0;margin-top:0;font-size: 18px;}.timeline-body>p+p{margin-top:5px}.timeline-badge>.glyphicon{margin-right:0px;color:#fff}.timeline-body>h4{margin-bottom:0!important}
		
		h1{
			font-size: 38px;
			margin: 5px 0 -30px 52px;
		}
		h2{
			color: #666c6f;
			text-transform: uppercase;
			font-size: 23px;
			font-weight: bold;
			margin: 20px 0 0 55px;
		}
		h3{
			color: #fff;
			text-transform: uppercase;
			font-size: 16px;
			font-weight: bold;
			margin: 22px 0 0 55px;
		}
		hr {
			border: 0;
			border-top: 1px solid #666c6f;
			width: 112%;
			margin: 20px 10px 3px;
		}

    </style>

	<script>
		// // TESTE 2 flowplayer OKOK
		//jQuery(document).ready(function() {
		//	var api = flowplayer("#streaming", {
		//		live: true,
		//		splash: true,
		//		clip: {
		//			sources: [{
		//				type: "application/x-mpegurl",
		//				src: "http://streamer1.streamhost.org:1935/salive/GMIFLNL/playlist.m3u8",
		//			}],
					//title: "Rádio Terceiro Anjo",
		//			autoplay: true,
		//		},
		//	});
		//});
    </script>

	<div class="row">
		<div class="col-md-8">
			<div class="">
				<div id="video-container" class="streaming img">
					<h3>NO AR AGORA</h1>
					@foreach($collection2->take(1) as $item)
						<h1>{{$item->name}}</h1>
					@endforeach
					{{--  <iframe class="stream" src="https://www.youtube.com/embed/live_stream?channel=UCkSu5ibA15OcBWTjop72dPA&autoplay=1&controls=2" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><br>  --}}

					<div data-live="true" data-ratio="0.5625" data-share="false" class="flowplayer">
						<video data-title="Live stream">
								<source type="application/x-mpegurl" src="http://streamer1.streamhost.org:1935/salive/GMIFLNL/playlist.m3u8">
						</video>
					</div>

					<!-- TESTE 2 flowplayer -->
                    {{--  <div id="streaming"  class="stream" class="flowplayer fixed-controls" style="width:600px; height:338px;"></div>  --}}
					

				</div>
			</div><br>
		</div>
		<div class="col-md-4">
			<h2>A seguir</h2>
			<hr>
			<ul class="timeline">
				@foreach($collection2->slice(1, 5) as $item)
						<li>
							<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">{{date('H:i', strtotime($item->schedule_at))}}</h4>
								</div>
								<div class="timeline-body">
									<p>{{$item->name}}</p>
								</div>
							</div>
						</li>
				@endforeach
			</ul>
		</div>
	</div>

    
	
    @include('layouts._site._streaming_flags')

	{{--  comparacao com a data e a hora atual  --}}
	{{--  quando for igual, recarrega a lista  --}}
	<script>
		//Use setInterval:
/*
		$(function(){
			setInterval(oneSecondFunction, 1000);
		});

		function oneSecondFunction() {
		// stuff you want to do every second
		}
		setInterval(oneSecondFunction, 1000);
*/
	</script>

@endsection

