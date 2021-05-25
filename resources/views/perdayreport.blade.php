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
                        <h1><a href="/">Sales Report</a></h1>
                    
                    <!-- Nav -->
                             
                    
					<!-- Banner -->
						<section id="banner">

							<header>
                            <div class="container">
        <div class="row">
            <div class="col">
            <form action="/payreport" method="post">
            {{csrf_field()}}
                <table class="table table-borderless">
               
                <div class="form-group">
                    <input type="date" class="form-control" name="serdate" placeholder="date" required="required"><button type="submit" class="btn btn-success btn-lg btn-block">Search</button>
                </div>
                    <tr>
                        <th>Booking date</th>
                        <th>Service name</th>
                        <th>Amount</th>
                        
                    </tr>
                    @php
                    $amount=0;
                    $count=0;
                    @endphp
                    @foreach ($booking as $booking)
                    <tr  style=" text-align:left;">
                        
                        <td>{{$booking->sdate}}</td>
                        <td>{{$booking->sname}}</td>
                        <td>{{$booking->amount}}</td>
                    </tr>
                    @php
                    $amount=$amount+$booking->amount;
                    $count=$count+1;
                    @endphp
                    @endforeach
                    <tr>
                        <th>Total Bookings</th> <td>{{$count}}</td>
                        <th>&nbsp</th>
                        <th>&nbsp</th>
                    </tr>
                    <tr>
                        <th>Total Amount</th> <td> {{$amount}}</td>
                        <th>&nbsp</th>
                        <th>&nbsp</th>
                    </tr>
                </table>
                
                    
                <a href="/adminhome"><img width="30" height="30" src="data:image/png;base64,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"></a>
                </form>
            </div>
        </div>
    </div>
   
							</header>
						</section>

                        <div class="col-12">


					
								
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>