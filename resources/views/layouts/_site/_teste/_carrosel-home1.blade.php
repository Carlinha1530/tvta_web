<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Carousel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.carousel{
    /*background: #2f4357;*/
    margin-top: -20px;
    padding-bottom: 0%;
    margin-left: -12%;
    margin-right: -12%;
    

}
.carousel .item{
    min-height: 380px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
  margin: 20px;
}

div#subheader {
        background: #20345f;
        color: white;
    }

    .subheader-separator {
        /*margin-top: 1%;*/
        height: 38px;
        width: 134%;
        margin-left: -17%;
    }

</style>
</head>
<body>
<!-- <div class="bs-example"> -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('/lib/flexslide/img_carrosle5.png')}}" alt="First Slide">
            </div>
            <!-- <div class="item">
                <img src="/examples/images/slide2.png" alt="Second Slide">
            </div>
            <div class="item">
                <img src="/examples/images/slide3.png" alt="Third Slide">
            </div> -->
        </div>


        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
        <div id="subheader" class="subheader-separator"></div>
<!-- </div> -->
</body>
</html>                                   