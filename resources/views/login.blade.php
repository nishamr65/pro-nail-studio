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
							<li><a href="/">Home</a></li>
							<li><a href="/login">Login</a></li>
							<li><a href="/register">Register</a></li>
						</ul>
					</nav>
					<!-- Banner -->
						<section id="banner">
							<header style="background:#000;border-radius:30px;">
                				<form action="/log" method="post">
                					{{csrf_field()}}
										@if(Session::get('fail'))
            							<div class="alert alert-danger">
            								{{Session::get('fail')}}
            							</div>
            							@endif
										<div style="text-align:center;">
											<table class="table borderless" align="center" style="width:100%" >
                								<tr >
													<td ><input type="text" class="form-control" name="lemail" placeholder="Email" required="required"></td>
												</tr>
												<tr>
													<td> <input type="password" class="form-control" name="lpass" placeholder="Password" required="required"></td>
												</tr>
												<tr>
													<td><button type="submit" class="btn-success btn-lg btn-block">Login</button> <a class="nav-link" href="/register">Register?</a></td>
												</tr>
											</table>
										</div>
								</form>
							</header>
						</section>
			<!-- Footer -->
				<section id="footer">
					<div class="col-12">
						<!-- Copyright -->
							<div id="copyright">
								<ul class="links">
									<li>&copy; Pro-Nail Studio by Nisha Raju</li>
								</ul>
							</div>
					</div>
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



