
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
	<title>SIPOLI - Contact</title>
	<link rel="stylesheet" href="{{(asset('doctor'))}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{(asset('doctor'))}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="user.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="{{(asset('doctor'))}}/js/modernizr.js"></script>


  <style>
     .rectangle1{
        position: absolute;
        width: 830px;
        height: 56.93px;
        left: 220px;
        right: 50px;
        top: 130px;
        background: #435185;
      }
      .rectangle2{
        text-align: center;
        position: absolute;
        width: 830px;
        height: 300px;
        left: 220px;
        right: 50px;
        top: 150px;
        background: #FFFFFF;
        box-shadow: 3px 3px 10px rgba(0.60,0,0,0.65);
        padding: 10px;
      }

      h2{
        font-family: 'Lora';
        font-style: normal;
        color: #435185;
        font-weight: 700;
      }

      .col-lg-6{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 15px;
        color: #3C7CDC;
      }

      .line{
        position: absolute;
        width: 300px;
        height: 0px;
        left: 480px;
        right: 50px;
        top: 300px;
        border: 0.2px solid #9D9B9B;
        transform: rotate(90deg);
      }
  </style>
</head>	

<body>
<!--header section -->
	<header class="top-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<a href="{{(asset('doctor'))}}/index.html"><img src="{{(asset('doctor'))}}/img/logopolinema.jpg" width="150px" height="auto" alt="" class="img-responsive logo"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	    <ul class="nav navbar-nav navbar-right">
					    <li><a class="menu" href="home">Home</a></li>
					    <li><a class="menu" href="schedule">Schedule</a></li>
				        <li><a class="menu" href="aboutus">About Us </a></li>
				        <li><a class="menu active" href="contact">Contact</a></li>
				        <li><a class="menu" href="login"> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

  <div class="rectangle1"></div>
  <div class="rectangle2">
      <div class="col-lg-6">
			<h2>Email</h2>
			<br><br><br><br>
        	<p><a href="https://goo.gl/maps/oxGrcFJtMjkWAAUr8">poliklinik@polinema.ac.id</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-6">
			<h2>Telp</h2>
        	<br><br><br><br>
        	<p>+62 822-4455-3495</p>
		</div><!-- /.col-lg-4 -->
  </div>   
  <div class="line"></div>
</body>
</html>
