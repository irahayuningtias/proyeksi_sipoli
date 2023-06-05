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

	.slogan{
		position: absolute;
        width: 280px;
        height: 50px;
		right: 80px;
        top: 140px;
		font-family: 'Lora';
		font-style: normal;
		font-weight: 500;
		font-size: 70px;
		line-height: 60px;
		color: #435185
	}

	.rectangle1{
		position: absolute;
        width: 1240px;
        height: 10px;
        left: 12px;
    	right: 50px;
        top: 820px;
		background: #435185;
	}

	.rectangle2{
		position: absolute;
        width: 1240px;
        height: 150px;
        left: 12px;
    	right: 50px;
        top: 830px;
        background: #FFFFFF;
        box-shadow: 3px 3px 10px rgba(0.60,0,0,0.65);
        padding: 10px;
	}

	.col-lg-4{
		left: 230px;
		height: 150px;
		width: 300px;
		align: center;
	}

	.footer {
		left: 500px;
		text-align: left;
		padding: 10px;
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
									<div class="slogan">
										<p>Your health is our focus</p>
									</div>
									<div class="rectangle1"></div>
									<div class="rectangle2"></div>
								<div class="footer">
									<div class="row2">
											<div class="col-lg-4">
												<h2>Health Information</h2>
												<p><a class="btn btn-secondary" href="healthinfo">More Info &raquo;</a></p>
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
									</div>
								</div>
							</div>	
			        	</div>
			    	</div>
				</div>
			</div>
		</div>
	</section><!-- end of slider section -->

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