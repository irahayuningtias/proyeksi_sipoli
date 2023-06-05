
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
	<title>SIPOLI - Schedule</title>
	<link rel="stylesheet" href="{{(asset('doctor'))}}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{(asset('doctor'))}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="user.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="{{(asset('doctor'))}}/js/modernizr.js"></script>
  <style>

    .schedule {
        text-align: center;
        padding: 20px;
        background-color: #f5f5f5;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }
   
      .schedule h2 {
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
      }
   
      .schedule table {
        width: 100%;
        border-collapse: collapse;
      }
   
      .schedule th, td {
        padding: 10px;
      }
   
      .schedule th {
        background-color: #f9f9f9;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        color: #555;
      }
   
      .schedule td {
        background-color: #fff;
        color: #333;
      }
   
      .schedule tr:nth-child(even) td {
        background-color: #fff;
      }
   
      .schedule tr:hover td {
        background-color: #fff;
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
					    <li><a class="menu active" href="schedule">Schedule</a></li>
				        <li><a class="menu" href="aboutus">About Us </a></li>
				        <li><a class="menu" href="contact">Contact</a></li>
				        <li><a class="menu" href="login.index"> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->

  <div class="container-schedule">
    <div class="schedule">
      <h2>Jadwal Praktek Dokter</h2>
      <table>
        <tr>
          <th>Dokter</th>
          <th>Hari</th>
          <th>Jam Praktek</th>
        </tr>
        <tr>
          <td rowspan="2">Dokter Umum</td>
          <td>Rabu</td>
          <td>08:00 - 11:00</td>
        </tr>
        <tr>
          <td>Jumat</td>
          <td>12:15 - 14:15</td>
        </tr>
        <tr>
          <td>Dokter Gigi</td>
          <td>Rabu</td>
          <td>08:00 - 11:00</td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>
