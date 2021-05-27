
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro-Nail Studio | Sales Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pro-Nails Studio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
				
					<!-- Logo -->
						<h1><a href="/">Pro-Nails</a></h1>
						<p>Studio</p>
            			<nav id="nav">
							<ul>
								<li><a href="/adminhome">Home</a></li>
								<li><a href="#">Services</a>
                                <ul>
									<li><a href="/serviceadd">Add Services</a></li>
									<li><a href="/serviceviews">View Services</a></li>
								</ul></li>
                                <li><a href="/readall">View bookings</a></li>
                                <li><a href="/perdayreport">Sales Report</a></li>
								<li><a href="/logout">Log out</a></li>
							</ul>
						</nav>            
                    
					<!-- Banner -->
						<section id="banner">

							<header>
              <div class="container">
              <div class="row">
              <div class="col">
              <table class="table table-borderless">
               
               <tr>
                   <th>Email id</th>
                   <th>Service name</th>
                   <th>Booking date</th>
                   <th>Amount</th>

               </tr>
               @foreach ($booking as $booking)
               <tr>
                   <td>{{$booking->email}}</td>
                   <td>{{$booking->sname}}</td>
                   <td>{{$booking->sdate}}</td>
                   <td>{{$booking->amount}}</td>
                   <td><button><a href="/booking/{{$booking->email}}/edit" class="button primary">Accept</a></button></td><td><button><a href="/booking/{{$booking->email}}/edit1" class="button primary">Reject</a></button></td>
               </tr>
               @endforeach
               
           </table>
           </div>
           </div>
           </div>
   </header>
</section>					
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
