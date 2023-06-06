<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>SIPOLI - Home</title>
	<link rel="stylesheet" href="{{(asset('doctor'))}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{(asset('doctor'))}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="user.css">
	<link rel="stylesheet" href="login.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="{{(asset('doctor'))}}/js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

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
    	position: absolute;
        width: 830px;
        height: 360px;
        left: 220px;
        right: 50px;
    	top: 150px;
        background: #FFFFFF;
        box-shadow: 3px 3px 10px rgba(0.60,0,0,0.65);
        padding: 10px;
    }
</style>

<body>
		<!-- header section -->
		<header class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-5 header-logo">
						<a href="{{(asset('doctor'))}}/index.html"><img src="{{(asset('doctor'))}}/img/logopolinema.jpg" width="150px" height="auto" alt="" class="img-responsive logo"></a>
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

		<!-- LOGIN -->
		<div class="rectangle1">
		<div class="rectangle2">
		<img src="{{(asset('doctor'))}}/img/stetoskop.jpg">
		<main class="form-signin">

		@if(session()->has('success'))
		<div class="alert alert-succes alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		@endif

		@if(session()->has('loginError'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			{{ session('loginError') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		@endif


		<form action="/login" method="post">
			@csrf

			<h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
						<div class="form-floating">
						<label for="email">Email address</label>
							<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
							id="email" placeholder="name@example.com" autofocus required>
							@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror	
						</div>
						<div class="form-floating">
						<label for="password">Password</label>
							<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
						</div>
						<br>
						
						<button class="w-100 btn btn-lg btn-primary" type="submit">Login <a href="/user.index"></a></button>
					</form>
				</main>
	</body>
</html>