
<!DOCTYPE html>
<html lang="en">
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
						<h1><a href="/">Pro-Nails</a></h1><p>Studio</p>

					<!-- Nav -->
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

							<header style="background:#000;border-radius:30px;">
								<h2>Welcome, {{ $LoggedUserinfo['email'] }}</h2>
								<p style="color: lightgreen"> Pro-Nails Studio</p>
							</header>
						</section>
							</div>
						</div>
					</div>
			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">
								<section>
									<header>
										<h2></h2>
									</header>
									<ul class="dates">
									
									@if( ! empty($booking))
									@foreach($booking as $b)
										<li>
											<span class="date"><a href="/booking/{{$b->email}}/today">CheckOut</a></span>
											<h3>{{$b->name}}</h3>
											<p>{{$b->sname}}</br>
											{{$b->sdate}}</br>
											{{$b->mobile}}</p>
										</li>
									@endforeach
									@else
										<h2>*No bookings left</h2>
									@endif
									</ul>
                                   </section>
							</div>
							<div class="col-4 col-12-medium">
								<section>
									<header>
										<h2>What's this all about?</h2>
									</header>
									<a href="#" class="image featured"><img src="data:image/png;base64,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" alt="" /></a>
									<p>Nail art is a creative way to paint, decorate, enhance, and embellish the nails. It is a type of artwork that can be done on fingernails and toenails, usually after</p>
									
								</section>
							</div>
							<div class="col-4 col-6-medium col-12-small">
								
							</div>
							<div class="col-4 col-6-medium col-12-small">
								
							</div>
							<div class="col-4 col-12-medium">
								<section>
									<header>
										<h2>Stay up to date</h2>
									</header>
									<ul class="social">
										<li><a class="icon brands fa-facebook-f" href="#"><span class="label">Facebook</span></a></li>
										<li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon brands fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
										<li><a class="icon brands fa-tumblr" href="#"><span class="label">Tumblr</span></a></li>
										<li><a class="icon brands fa-linkedin-in" href="#"><span class="label">LinkedIn</span></a></li>
									</ul>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<p>
												National Highway No.66<br />
												Near Oberon Mall,Edappaly<br />
												Ernakulam,  Kerala 682024
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">pronailstudio@gmail.com</a></p>
										</li>
										<li>
											<h3>Phone</h3>
											<p>(+91) 730 619 2113</p>
											<p>(+91) 790 795 8175</p>
										</li>
									</ul>
								</section>
							</div>
							<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Untitled. All rights reserved.</li><li>Pro-Nail Studio by Nisha Raju</a></li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
</body>
</html>