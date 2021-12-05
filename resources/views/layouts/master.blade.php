<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Phonix - Tax Service</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	{{-- <link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png"> --}}

	<!-- Google font (font-family: 'Josefin Sans', sans-serif;) -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->


	<div class="fakeloader"></div>

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<!-- Header -->
		<header id="header" class="header sticky--header">

			<!-- Header Top Area -->
			<div class="header__top bg--blue">
				<div class="container">
					<div class="header__top__inner">
						<ul class="header__top__info">
							<li>
								<a href="#">
									<i class="flaticon-old-typical-phone"></i> 01354 568 787</a>
							</li>
							<li>
								<a href="#">
									<i class="flaticon-black-back-closed-envelope-shape"></i> info@taxco.com</a>
							</li>
						</ul>
						{{-- <div class="header__top__button">
							<a class="cr-btn cr-btn--lg" href="#">
								<span>Make an appointment</span>
							</a>
						</div> --}}
					</div>
				</div>
			</div>
			<!--// Header Top Area -->

			<!-- Header Bottom Area -->
			<div class="header__bottom bg--white">
				<div class="container d-none d-lg-block">
					<div class="header__bottom__inner">
						<div class="header__logo">
							<a href="/">
								{{-- <img src="images/logo/logo-theme.png" alt="header logo"> --}}
                                <h3>PHONIX</h3>
							</a>
						</div>

						<!-- Main Navigation -->
						<nav id="main-navigation" class="header__menu main-navigation">
							<ul>
								<li>
									@if (session()->has('UserId'))
										<a href="/dashboard">DASHBOARD</a>
									@else
										<a href="/">HOME</a>
									@endif
								</li>
								<li>
									<a href="/about">ABOUT</a>
								</li>
								<li>
									<a href="/features">FEATURES</a>
								</li>
								<li class="cr-dropdown">
									<a href="#">SERVICE</a>
									{{-- <ul class="cr-dropdown-menu">
										<li>
											<a href="services.html">Services1</a>
										</li>
										<li>
											<a href="#">Services2</a>
										</li>
										<li>
											<a href="#">Services3</a>
										</li>
									</ul> --}}
								</li>
								<li>
									<a href="/contact">CONTACT</a>
								</li>
                                
								@if (session()->has('UserId'))
									<li class="cr-dropdown">
										<a href="#"> {{ session('UserName') }} </a>
										<ul class="cr-dropdown-menu">
											<li>
												<a href="/profile">Profile</a>
											</li>
											<li>
												<a href="/UserLogout">Logout</a>
											</li>
										</ul>
									</li>
								@else
								<li class="d-flex">
									<a class="text-danger" href="/UserLogin"><button class="btn btn-success">Login</button></a>
									<span>&nbsp;</span>
									<a class="text-danger" href="/UserRegister"><button class="btn btn-success">Signup</button></a>
								</li>
								@endif
							</ul>
						</nav>
						<!--// Main Navigation -->

					</div>
				</div>

				<!-- Mobile Menu -->
				<div class="container d-block d-lg-none">
					<div class="mobile-menu clearfix d-md-block d-lg-none">
						<a class="mobile-logo" href="index.html">
							<img src="images/logo/logo-theme.png" alt="logo">
						</a>
					</div>
				</div>
				<!-- //Mobile Menu -->

			</div>
			<!--// Header Bottom Area -->

		</header>
		<!-- //Header -->
        @yield('content')
		<!-- Footer Area -->
		<footer id="footer" class="footer-area fixed--footer">

			<!-- Footer Widgets Area -->
			<div class="footer-area__widgets section-padding--md bg--dark--light">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer-area__logo text-center">
								<a href="/">
									{{-- <img src="images/logo/logo-footer.png" alt="footer logo"> --}}
                                    <h3>PHONIX</h3>
								</a>
							</div>
						</div>
					</div>
					<div class="widget-area footer--widgets">

						<!-- Single Widget -->
						<section class="widget widget-about">
							<h5 class="widget-title">ABOUT Phonix</h5>
							<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium oloremque laudantium, totam rem onsectetur sires
								to obtain pain of itself because</p>
							<div class="social-icons social-icons--rounded">
								<ul>
									<li class="facebook">
										<a href="https://www.facebook.com/">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li class="twitter">
										<a href="https://twitter.com/">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li class="instagram">
										<a href="https://www.instagram.com/">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<li class="google-plus">
										<a href="https://plus.google.com/discover">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
								</ul>
							</div>
						</section>
						<!--// Single Widget -->

						<!-- Single Widget -->
						<section class="widget widget-quick-links">
							<h5 class="widget-title">QUICK LINKS</h5>
							<ul>
								<li>
									<a href="#">Our Services</a>
								</li>
								<li>
									<a href="#">Features</a>
								</li>
								<li>
									<a href="#">About Us</a>
								</li>
								<li>
									<a href="#">Help Centre</a>
								</li>
								<li>
									<a href="#">Contact Us</a>
								</li>
							</ul>
						</section>
						<!--// Single Widget -->

						<!-- Single Widget -->
						<section class="widget widget-contact-info">
							<h5 class="widget-title">Contact Info</h5>
							<ul>
								<li>
									<p>256 Notrh Tower, Western City Mid Town, Las Vagas, USA</p>
								</li>
								<li>
									<p>
										<a href="callto://+00812568987789">+008 12568 987 789</a>
									</p>
									<p>
										<a href="callto://+00835687567458">+008 35687 567 458</a>
									</p>
								</li>
								<li>
									<p>
										<a href="mailto://info@korde.com">info@korde.com</a>
									</p>
									<p>
										<a href="mailto://info@korde.com">www.korde.com</a>
									</p>
								</li>
							</ul>
						</section>
						<!--// Single Widget -->

					</div>
				</div>
			</div>
			<!--// Footer Widgets Area -->

			<!-- Footer Copyright Area -->
			<div class="footer-area__copyright bg--dark">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="copyright text-center">
								©COPYRIGHT, ALL RIGHTS RESERVED BY
								<a target="_blank" href="http://asvasolutions.com/">ASVA INFO SOLUTIONS</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--// Footer Copyright Area -->

		</footer>
		<!-- //Footer Area -->

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	{{-- <script src="js/vendor/jquery-3.2.1.min.js"></script> --}}
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="js/popper.min.js"></script>
	{{-- <script src="js/bootstrap.min.js"></script> --}}
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>