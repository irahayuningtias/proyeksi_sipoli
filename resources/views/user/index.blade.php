<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>SIPOLI | Home</title>
	<link rel="stylesheet" href="{{(asset('doctor'))}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{(asset('doctor'))}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="user.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="{{(asset('doctor'))}}/js/modernizr.js"></script>
	<script src="{{(asset('doctor'))}}/js/bootstrap.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<style>
.footer {
	background-color: white;
  	text-align: center;

}

h2{
	color:#435185; 
	font-family:Lora; 
	font-style: normal; 
	font-weight: 700; 
	font-size: 20px; 
	line-height: 5px;
}
</style>

<body>
	<!-- header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<a><img src="{{(asset('doctor'))}}/img/logopolinema.jpg" width="150px" height="auto" alt="" class="img-responsive logo"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	    <ul class="nav navbar-nav navbar-right">
					    <li><a class="menu active" href="home">Home</a></li>
					    <li><a class="menu" href="schedule">Schedule</a></li>
				        <li><a class="menu" href="aboutus">About Us </a></li>
				        <li><a class="menu" href="contact">Contact</a></li>
				        <li><a class="menu" href="login"> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="slide" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        	<!-- Wrapper for slides -->
			        	<div class="carousel-inner" role="listbox">
			            	<div class="item active">
			            		<img src="{{(asset('doctor'))}}/img/stetoskop.jpg">
									<!-- Three columns of text below the carousel -->
								<div class="footer">
										<div class="row">
											<div class="col-lg-4">
												<h2>Health Information</h2>
												<p"><a class="btn btn-secondary" href="https://www.youtube.com/watch?v=VQo4hyWfBQ4&list=RDv27COkZT4GY&index=8">More Info &raquo;</a></p>
											</div><!-- /.col-lg-4 -->
											<div class="col-lg-4">
												<h2>Opening Hours</h2>
												<p style="font-family:'Inter'; font-style: normal;">Hari : Senin - Jumat</p>
												<p style="color:#3C7CDC; font-family:'Inter'; font-style: normal;">Pukul: 07.00 - 16.00</p>
											</div><!-- /.col-lg-4 -->
											<div class="col-lg-4">
												<h2>Emergency Cases</h2>
												<p style= "color:#3C7CDC; font-family:'Inter'; font-style: normal;">+62 822-4455-3495</p>
											</div><!-- /.col-lg-4 -->
										</div><!-- /.row -->
								</div>
							</div>	
			        	</div>
			    	</div>
				</div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading">Artikel Kesehatan</h2>
      <div class=" layout_padding2">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/card-item-1.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Orange</h5>
              <p class="card-text">
                Siapa saja yang cocok menjalani Diet Paleo? Ini faktanya
					 Diet paleo merupakan pola makan mengurangi makanan olah berfokus pada makanan 
              </p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/card-item-2.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Grapes</h5>
              <p class="card-text">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which don't look
                even slightly believable.
              </p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/card-item-3.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Gauva</h5>
              <p class="card-text">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in some
                form, by injected humour, or randomised words which don't look
                even slightly believable.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="custom_dark-btn">
          Read More
        </a>
      </div>
    </div>
  </section>
<!-- end of about section -->

	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Mostafizur All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>