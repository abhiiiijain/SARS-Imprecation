<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">

.fa {
    padding: 20px;
    font-size: 30px;
    width: 60px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
    margin: 5px 2px;
  }

  .fa:hover {
    opacity: 0.7;
  }
  .fa-linkedin-square {
    padding: 16px;
    background: #3B5998;
    color: white;
  }


 .col-center {
	margin: 0 auto;
	float: none !important;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
	width: 185px;
	height: 185px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 175px;
	height: 175px;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {
	padding: 30px 0 10px;
}
.carousel .overview {
	font-style: italic;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #7AA641;
}
.carousel .carousel-control {
	width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
	background: none;
}
.carousel-control i {
    font-size: 68px;
	line-height: 42px;
    position: absolute;
    display: inline-block;
	color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel .carousel-indicators {
	bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 1px 3px;
	border-radius: 50%;
}
.carousel-indicators li {
	background: #999;
	border-color: transparent;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {
	background: #555;
	box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
  </style>
</head>

<div id="our_team" class="container-fluid text-center">
  <h2>Our Team</h2>
  <br>
    <div class="row">
    	<div class="col-md-8 col-center m-auto">
      		<div id="myCarousel1" class="carousel slide" data-ride="carousel">
        		<!-- Carousel indicators -->
        		<ol class="carousel-indicators">
          			<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
          			<li data-target="#myCarousel1" data-slide-to="1"></li>
        		</ol>
        		<!-- Wrapper for carousel items -->
        		<div class="carousel-inner">
          			<div class="item carousel-item active">
                  <div class="img-box"><a href="https://www.instagram.com/abhiiiijain/"><img src="images/abhiiiijain1.jpg"  width="300px" height="300px"></a></div>
            			<br>
            			<p class="overview"><a href="https://www.instagram.com/abhiiiijain/"><b>Abhinandan Jain</b></a></p>
                  <a href="https://www.linkedin.com/in/abhiiiijain/" class="fa fa-linkedin-square"></a>
          			</div>
                <div class="item carousel-item">
            			<div class="img-box"><img src="images/adarsh1.jpg" width="300px" height="300px"></div>
            			<br>
            			<p class="overview"><b>Adarsh Sharma</b></p>
                  <a href="https://www.linkedin.com/in/adarsh2002/" class="fa fa-linkedin-square"></a>
          			</div>
      			</div>
      			<!-- Carousel controls -->
    			<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
      				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      				<span class="sr-only">Previous</span>
    			</a>
    			<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
      				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      				<span class="sr-only">Next</span>
    			</a>
    		</div>
		</div>
	</div>
</div>
