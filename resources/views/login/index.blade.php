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
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="{{(asset('doctor'))}}/js/modernizr.js"></script>
  <link href="/css/login.css" rel="stylesheet">
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="text-center">
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

    
    <!-- Custom styles for this template -->

 <div class="row justify-center">
   <div class="col-md-5">
      <main class="form-signin">
         <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
         <form>
            <div class="form-floating">
               <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
               <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
               <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
               <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
         </form>

         <small class="d-blocktext-center mt-3">Belum Registrasi? <a href="/register">Registrasi Sekarang!</a></small>
      </main>
   </div>
</div>
  



    
  </body>
</html>
