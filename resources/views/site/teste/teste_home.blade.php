@extends('layouts.site')

@section('content')
	<!--==========CONTENT============-->
	<div class="page">
		<section id="content">
			<div class="container">
				<!--br><br>
				<div class="wrap_5">
				    <div class="row">
				        <div class="grid_8 wow fadeInLeft">
				            <div class="embed-responsive embed-responsive-16by9">
				                <iframe width="640" height="360" src="https://www.youtube.com/embed/E_PlOjyCl6M" frameborder="0" allowfullscreen></iframe>
				            </div>
				        </div>
				        <div class="grid_4 wow fadeInRight">
				            <h2 class="header_1 text_6 color_1 bg_3 maxheight">Categorias</h2>

				            <div class="wrap_5">
				                <div class="row">
				                    <div class="grid_2 wow fadeInRight">
				                        <ul class="marked-list">
				                            <li><a href="#">9/11</a></li>
				                            <li><a href="#">Art and Artists </a></li>
				                            <li><a href="#">Biography </a></li>
				                            <li><a href="#">Comedy</a></li>
				                            <li><a href="#">Conspiracy </a></li>
				                            <li><a href="#">Crime </a></li>
				                            <li><a href="#">Drugs </a></li>
				                            <li><a href="#">Economics </a></li>
				                            <li><a href="#">Environment </a></li>
				                            <li><a href="#">Health </a></li>
				                            <li><a href="#">History </a></li>
				                            <li><a href="#">Media</a></li>
				                        </ul>
				                    </div>
				                    <div class="grid_2 wow fadeInRight">
				                        <ul class="marked-list">
				                            <li><a href="#">Military and War</a></li>
				                            <li><a href="#">Mystery</a></li>
				                            <li><a href="#">Nature </a></li>
				                            <li><a href="#">Performing Arts </a></li>
				                            <li><a href="#">Philosophy </a></li>
				                            <li><a href="#">Politics </a></li>
				                            <li><a href="#">Psychology</a></li>
				                            <li><a href="#">Religion</a></li>
				                            <li><a href="#">Science</a></li>
				                            <li><a href="#">Sexuality </a></li>
				                            <li><a href="#">Society </a></li>
				                            <li><a href="#">Sports </a></li>
				                        </ul>
				                    </div>
				                </div>
				            </div>

				            <h2 class="header_3 text_6 color_1 bg_3 wow fadeInRight">Adicionado recentemente</h2>

				            <ul class="marked-list wow fadeInRight">
				                <li><a href="#">Vestibulum ante ipsum primis</a></li>
				                <li><a href="#">In faucibus orci luctus et</a></li>
				                <li><a href="#">Ultrices posuere cubilia Curae</a></li>
				                <li><a href="#">Suspendisse sollicitudin velit sed leo</a></li>
				                <li><a href="#">Ultrices posuere cubilia Curae</a></li>
				            </ul>
				        </div>
				    </div>
				</div-->

				<div class="row">
				    <div class="col-md-12">
				        <div class="camera-wrapper">
				            <div id="camera" class="camera-wrap">
				                <div data-src="{{asset('/img/index_slide01.jpg')}}">
				                    <div class="fadeIn camera_caption bg_4">
				                        <h2 class="text_3 color_3"><a href="#">Fusce euismod conse</a></h2>

				                        <p class="text_4 color_3">Season 2, Episode 055 (51:37)</p>

				                        <p class="text_5 color_3">
				                            Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer
				                            adipiscing elit. <br/>
				                            Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel
				                            diam. <br/>
				                            Sed in lacus ut enim adipiscing aliquet. <a href="#">Read more &gt;</a>
				                        </p>
				                    </div>
				                </div>
				                <div data-src="{{asset('/img/index_slide02.jpg')}}">
				                    <div class="fadeIn camera_caption bg_4">
				                        <h2 class="text_3 color_3"><a href="#">Fusce euismod conse</a></h2>

				                        <p class="text_4 color_3">Season 2, Episode 056 (51:37)</p>

				                        <p class="text_5 color_3">
				                            Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer
				                            adipiscing elit. <br/>
				                            Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel
				                            diam. <br/>
				                            Sed in lacus ut enim adipiscing aliquet. <a href="#">Read more &gt;</a>
				                        </p>
				                    </div>
				                </div>
				                <div data-src="{{asset('/img/index_slide03.jpg')}}">
				                    <div class="fadeIn camera_caption bg_4">
				                        <h2 class="text_3 color_3"><a href="#">Fusce euismod conse</a></h2>

				                        <p class="text_4 color_3">Season 2, Episode 057 (51:37)</p>

				                        <p class="text_5 color_3">
				                            Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer
				                            adipiscing elit. <br/>
				                            Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel
				                            diam. <br/>
				                            Sed in lacus ut enim adipiscing aliquet. <a href="#">Read more &gt;</a>
				                        </p>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>

				<div class="row">
				    <div class="col-md-12">
				        <h2 class="header_1 text_6 color_1 bg_3">
				            <a href="{{ url('/videos_all') }}">Videos em Destaque</a>
				        </h2>

				    </div>
				</div>
				<div class="wrap_1">
				    <div class="row">
				        <div class="col-md-3" data-wow-delay=".2s">
				            <div class="box_1"><a data-type="video" href="//www.youtube.com/embed/2kodXWejuy0"><img
				                    src="{{asset('/img/index_img01.jpg')}}" alt="Image 1"/></a>

				                <div class="caption">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>
				                </div>
				            </div>
				        </div>
				        <!--div class="col-md-3" data-wow-delay=".4s">
				            <div class="box_1"><a data-type="video" href="//www.youtube.com/embed/2kodXWejuy0"><img
				                    src="/img/index_img02.jpg" alt="Image 2"/></a>

				                <div class="caption">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>
				                </div>
				            </div>
				        </div>
				        <div class="col-md-3" data-wow-delay=".6s">
				            <div class="box_1"><a data-type="video" href="//www.youtube.com/embed/2kodXWejuy0"><img
				                    src="/img/index_img03.jpg" alt="Image 3"/></a>

				                <div class="caption">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>
				                </div>
				            </div>
				        </div>
				        <div class="col-md-3" data-wow-delay=".8s">
				            <div class="box_1"><a data-type="video" href="//www.youtube.com/embed/2kodXWejuy0"><img
				                    src="/img/index_img04.jpg" alt="Image 4"/></a>

				                <div class="caption">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>
				                </div>
				            </div>
				        </div-->
				    </div>
				</div>
				<!--div class="wrap_2">
				    <div class="row">
				        <div class="col-md-3"  data-wow-delay=".2s">
				            <div class="box_1"><a data-type="video" href="//www.youtube.com/embed/2kodXWejuy0"><img
				                    src="/img/index_img05.jpg" alt="Image 5"/></a>

				                <div class="caption">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>
				                </div>
				            </div>
				        </div>
				        <div class="col-md-3"  data-wow-delay=".4s">
				            <div class="box_1"><a data-type="video" href="//www.youtube.com/embed/2kodXWejuy0"><img
				                    src="/img/index_img06.jpg" alt="Image 6"/></a>

				                <div class="caption">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>
				                </div>
				            </div>
				        </div>
				        <div class="col-md-3" data-wow-delay=".6s">
				            <div class="box_1"><a data-type="video" href="//www.youtube.com/embed/2kodXWejuy0"><img
				                    src="/img/index_img07.jpg" alt="Image 7"/></a>

				                <div class="caption">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>
				                </div>
				            </div>
				        </div>
				        <div class="col-md-3" data-wow-delay=".8s">
				            <div class="box_1"><a data-type="video" href="//www.youtube.com/embed/2kodXWejuy0"><img
				                    src="/img/index_img08.jpg" alt="Image 8"/></a>

				                <div class="caption">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>

				<div class="row">
				    <div class="grid_12 wow fadeInLeft">
				        <h2 class="header_1 text_6 color_1 bg_3"><a href="videos_all.php">Veja Todos os Videos</a></h2>
				    </div>
				</div-->

				<div class="row">
				    <div class="col-md-8" data-wow-delay=".2s">
				        <div class="wrap_3">
				            <a class="banner" href="#"><img src="{{asset('/img/index_banner02.jpg')}}" alt="Banner 2"/></a>
				        </div>
				    </div>
				    <div class="col-md-4" data-wow-delay=".4s">
				        <div class="wrap_3">
				            <a class="banner" href="#"><img src="{{asset('/img/index_banner03.jpg')}}" alt="Banner 3"/></a>
				        </div>
				    </div>
				</div>

				<div class="wrap_5">
				    <div class="row">
				        <div class="col-md-8">
				            <h2 class="header_2 text_6 color_1 bg_3 maxheight"><a href="{{ url('/artigos') }}">Artigos</a></h2>

				            <div class="wrap_4">
				                <div class="box_1 wow fadeInLeft">
				                    <div class="put-left"><img src="{{asset('/img/index_img09.jpg')}}" alt="img 9"/></div>
				                    <div class="caption_1">
				                        <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                        <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>

				                        <p class="text_9 color_3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				                            Praesent vestibu- <br/>
				                            lum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus
				                            porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipi- <br/>
				                            scing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec,
				                            luctus a, lorem. Maecenas tristique orci ac sem.
				                        </p>

				                        <a class="btn_1 text_7 color_1 bg_3" href="#">Watch Now</a>
				                    </div>
				                    <div class="clearfix"></div>
				                </div>
				            </div>
				            <div class="wrap_4">
				                <div class="box_1 wow fadeInLeft">
				                    <div class="put-left"><img src="{{asset('/img/index_img10.jpg')}}" alt="img 10"/></div>
				                    <div class="caption_1">
				                        <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                        <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>

				                        <p class="text_9 color_3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				                            Praesent vestibu- <br/>
				                            lum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus
				                            porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipi- <br/>
				                            scing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec,
				                            luctus a, lorem. Maecenas tristique orci ac sem.
				                        </p>

				                        <a class="btn_1 text_7 color_1 bg_3" href="#">Watch Now</a>
				                    </div>
				                    <div class="clearfix"></div>
				                </div>
				            </div>
				            <div class="box_1 wow fadeInLeft">
				                <div class="put-left"><img src="{{asset('/img/index_img11.jpg')}}" alt="img 11"/></div>
				                <div class="caption_1">
				                    <h3 class="text_7 color_3"><a href="#">Fusce euismod conse</a></h3>

				                    <p class="text_8 color_4">Season 2, Episode 055 (51:37)</p>

				                    <p class="text_9 color_3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				                        Praesent vestibu- <br/>
				                        lum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus
				                        porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipi- <br/>
				                        scing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec,
				                        luctus a, lorem. Maecenas tristique orci ac sem.
				                    </p>

				                    <a class="btn_1 text_7 color_1 bg_3" href="#">Watch Now</a>
				                </div>
				                <div class="clearfix"></div>
				            </div>
				        </div>
				        <div class="col-md-4">
				            <h2 class="header_1 text_6 color_1 bg_3 maxheight">Categorias</h2>

				            <div class="wrap_5">
				                <div class="row">
				                    <div class="grid_2 wow fadeInRight">
				                        <ul class="marked-list">
				                            <li><a href="#">9/11</a></li>
				                            <li><a href="#">Art and Artists </a></li>
				                            <li><a href="#">Biography </a></li>
				                            <li><a href="#">Comedy</a></li>
				                            <li><a href="#">Conspiracy </a></li>
				                            <li><a href="#">Crime </a></li>
				                            <li><a href="#">Drugs </a></li>
				                            <li><a href="#">Economics </a></li>
				                            <li><a href="#">Environment </a></li>
				                            <li><a href="#">Health </a></li>
				                            <li><a href="#">History </a></li>
				                            <li><a href="#">Media</a></li>
				                            <li><a href="#">Military and War</a></li>
				                            <li><a href="#">Mystery</a></li>
				                            <li><a href="#">Nature </a></li>
				                            <li><a href="#">Performing Arts </a></li>
				                            <li><a href="#">Philosophy </a></li>
				                            <li><a href="#">Politics </a></li>
				                        </ul>
				                    </div>
				                    <!--div class="grid_2 wow fadeInRight">
				                        <ul class="marked-list">
				                            <li><a href="#">Psychology</a></li>
				                            <li><a href="#">Religion</a></li>
				                            <li><a href="#">Science</a></li>
				                            <li><a href="#">Sexuality </a></li>
				                            <li><a href="#">Society </a></li>
				                            <li><a href="#">Sports </a></li>
				                        </ul>
				                    </div-->
				                </div>
				            </div>

				            <div class="wrap_5 wow fadeInRight">
				                <a class="banner" href="#"><img src="{{asset('/img/index_banner04.jpg')}}" alt="Banner 4"/></a>
				            </div>

				            <h2 class="header_3 text_6 color_1 bg_3 wow fadeInRight">Adicionado recentemente</h2>

				            <ul class="marked-list wow fadeInRight">
				                <li><a href="#">Vestibulum ante ipsum primis</a></li>
				                <li><a href="#">In faucibus orci luctus et</a></li>
				                <li><a href="#">Ultrices posuere cubilia Curae</a></li>
				                <li><a href="#">Suspendisse sollicitudin velit sed leo</a></li>
				                <li><a href="#">Ultrices posuere cubilia Curae</a></li>
				            </ul>
				        </div>
				    </div>
				</div>
			</div>
		</section>
	</div>
@endsection
