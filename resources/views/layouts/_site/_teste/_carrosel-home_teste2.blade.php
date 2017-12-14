{{-- <div class="container"> --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($slides as $slide)
            <div class="item active">
                <img src="{{asset($slide->imagem)}}">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            @endforeach
            <!-- End Item -->
            {{-- <div class="item">
                <img src="http://placehold.it/1200x400/e67e22/ffffff&text=Projects">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div> --}}
            <!-- End Item -->
            {{-- <div class="item">
                <img src="http://placehold.it/1200x400/2980b9/ffffff&text=Portfolio">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div> --}}
            <!-- End Item -->
            {{-- <div class="item">
                <img src="http://placehold.it/1200x400/8e44ad/ffffff&text=Services">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div> --}}
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem
                ipsum dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
                dolor sit</small></a></li>
        </ul>
    </div>
    <!-- End Carousel -->
{{-- </div> --}}
<style>
    .carousel-inner>.item>a>img, .carousel-inner>.item>img {
        display: block;
        max-width: 100%;
        width: 100%;
        height: auto;
        line-height: 1;
    }

    #myCarousel
    {
        margin-top: -16px;
        margin-top: -16px;
        position: relative;
        margin-left: -178px;
        margin-right: -178px;
    } 
    #myCarousel .nav a small
    {
        display: block;
    }
    #myCarousel .nav
    {
        background: #eee;
        margin-bottom: 3%;
    }
    .nav-justified > li > a
    {
        border-radius: 0px;
    }
    .nav-pills>li[data-slide-to="0"].active a { background-color: #16a085; }
    .nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
    .nav-pills>li[data-slide-to="2"].active a { background-color: #2980b9; }
    .nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }
    .full-screen {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>

<script>    
    $(document).ready( function() {
        $('#myCarousel').carousel({
            interval:   6000
        });

        var clickEvent = false;
        $('#myCarousel').on('click', '.nav a', function() {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');        
        }).on('slid.bs.carousel', function(e) {
            if(!clickEvent) {
                var count = $('.nav').children().length -1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if(count == id) {
                    $('.nav li').first().addClass('active');    
                }
            }
            clickEvent = false;
        });
    });
</script>