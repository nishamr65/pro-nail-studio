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
                     <!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="/customerhome">Home</a></li>
								<li>
									<a href="/servicesall">Book Appointment</a>
								</li>
                                
                                <li><a href="/feedback">Feedback</a></li>
								<li><a href="/logout">Log out</a></li>
							</ul>
						</nav>   
                    
					<!-- Banner -->
						<section id="banner">

							<header>
                            <div class="container">
        <div class="row">
            <div class="col">
                <form action="/paymentsuccess" method="post">
                {{csrf_field()}}
                <table class="table table-borderless">
                    @foreach($res as $pai)
                        
					<tr>
                        <td>Account holder name</td>
                        <td><input type="text" name="cnum" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td>Card Number</td>
                        <td><input type="text" name="cnum" class="form-control" autocomplete="off" maxlength="16" pattern="\d{16}" title="16 Digit Credit card number" required=""
></td>
				    </tr>
					<tr>
					<td>Expire Date</td>
					<td>
					<div class="form-group row">

                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_mo" size="0">
                                            <option selected="true" disabled="disabled">- Month -</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
											<option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_yr" size="0">
                                            <option selected="true" disabled="disabled">- Year -</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>
                                            <option>2024</option>
                                            <option>2025</option>
                                            <option>2026</option>
											</select>
                                    </div>
                                   
                                </div>
</td>
                

					</tr>
                    
                    <tr>
                        <td>CVV</td>
                        <td><input type="password" name="cvv" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}"
></td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td><input name="amount" value="{{$pai->amount}}" class="form-control" readonly ></td>
                    </tr> 
                    <tr style="color: #fff;">
                        <td></td>
                        <td><button class="btn-success">Pay now</button></td>
                    </tr>
                   @endforeach
                </table></form>
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



<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>PRO-Nail Studio | Payment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
	</head>
   
	</body>
</html>