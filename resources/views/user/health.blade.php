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

	.container1 a{
		font-family: 'Lora';
		font-style: normal;
		font-weight: 700;
		text-align: center;
		float: right;
		background: #435185;
		border-radius: 8px;
		box-shadow: 3px 3px 10px rgba(0.60,0,0,0.65);

	}

	h1{
		font-family: 'Lora';
		font-style: normal;
		font-weight: 700;
		color: #435185;
	}

	h5{
		font-family: 'Lora';
		font-style: normal;
		font-weight: 700;
	}

	p{
		font-family: 'Inter';
		font-style: normal;
		font-weight: 500;
		color: #353434;
	}

	.rectangle1{
		position: absolute;
		width: 270px;
		height: 450px;
		left: 100px;
		top: 230px;
		background: #FFFFFF;
		border-radius: 2px;
		box-shadow: 3px 3px 10px rgba(0.60,0,0,0.65);
        padding: 10px;
	}

	.rectangle2{
		position: absolute;
		width: 270px;
		height: 450px;
		left: 500px;
		top: 230px;
		background: #FFFFFF;
		border-radius: 2px;
		box-shadow: 3px 3px 10px rgba(0.60,0,0,0.65);
        padding: 10px;
	}

	.rectangle3{
		position: absolute;
		width: 270px;
		height: 450px;
		left: 900px;
		top: 230px;
		background: #FFFFFF;
		border-radius: 2px;
		box-shadow: 3px 3px 10px rgba(0.60,0,0,0.65);
        padding: 10px;
	}

	.content{
		position: center;
		height: 500px;
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
					    <li><a class="menu" href="home">Home</a></li>
					    <li><a class="menu" href="schedule">Schedule</a></li>
				        <li><a class="menu" href="aboutus">About Us </a></li>
				        <li><a class="menu" href="contact">Contact</a></li>
				        <li><a class="menu" href="login"> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->
	
	<div class="container">
		<h1>Artikel Kesehatan</h1>
		<div class="container1">
			<a class="btn btn-primary text-white" href="https://www.halodoc.com/kesehatan">see all</a>
		</div>
	</div>

	<div class="content">
		<div class="rectangle1">
			<a><img img src="{{(asset('doctor'))}}/img/healthinfo1.webp" width= "250px" height= "265px"></a>
			<h5>Diet Paleo</h5>
			<p>Siapa Saja yang Cocok Menjalani Diet Paleo? Ini Faktanya</p>
			<p>Diet paleo merupakan pola makan mengurangi makanan olahan dan berfokus pada makanan u...</p>
		</div>
		<div class="rectangle2">
			<a><img img src="{{(asset('doctor'))}}/img/healthinfo2.jpg" width= "250px" height= "265px"></a>
			<h5>Makanan Sehat</h5>
			<p>Jarang Diketahui, Ini 7 Manfaat Gurita untuk Kesehatan Tubuh</p>
			<p>Sebagai hewan laut yang mati setelah kawin ini, gurita memiliki banyak manfaat untuk kesehat...</p>
		</div>
		<ddiv class="rectangle3">
			<a><img img src="{{(asset('doctor'))}}/img/healthinfo1.webp" width= "250px" height= "265px"></a>
			<h5>Viginitis</h5>
			<p>Miss V Terasa Gatal Tak Tertahankan, Gejala Vaginitis?</p>
			<p>Ada banyak kondisi yang menyebabkan gatal pada kemaluan, salah satunya adalah vaginitis....</p>
		</div>
	</div>
	<br><br><br><br>
</body>