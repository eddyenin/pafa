<!DOCTYPE html>
<html lang="en">
<head>
	<title>PAFA | Blog </title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	{{-- <link rel="author" href="https://plus.google.com/u/0/104296509460513856975" /> --}}

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,700,600,800,400,300%7CMontserrat:400,700%7CRaleway:600,400' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:600,400%7CHind' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,700italic' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('revolution/css/settings.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/rev-slider.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/sliders.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/spacings.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/color.css') }}" />

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('img/logo/pafa_logo_white.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('img/logo/pafa_logo_white.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/logo/pafa_logo_white.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/logo/pafa_logo_white.png') }}">

</head>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top" style="font-family: Hind, sans-serif" class="onepage">

	<header class="nav-type-2 onepage-nav" id="home">

		<nav class="navbar navbar-static-top">
			<div class="navigation">
				<div class="container relative">

					<div class="row">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> <!-- end navbar-header -->

						<!-- Logo -->
						<div class="logo-container">
							<div class="logo-wrap local-scroll">
								<a href="#home">
									<img class="logo" src="{{ asset('img/logo/pafa_logo_dark.png') }}" width="50px" alt="logo">
								</a>
							</div>
						</div>

						<div class="col-md-9 nav-wrap right">
							<div class="collapse navbar-collapse" id="navbar-collapse">

								<ul class="nav navbar-nav local-scroll navbar-right">

									<li class="">
										<a href="#home">Home</a>
									</li>
									<li>
										<a href="#portfolio">Project</a>
									</li>
									<li>
										<a href="#services">Services</a>
									</li>
									<!-- <li>
										<a href="#about-us">Awards</a>
									</li>							             -->
									<li>
										<a href="#blog">Illustration</a>
									</li>
									<li>
										<a href="#contact">Contact</a>
									</li>
								</ul>
							</div>
						</div> <!-- end col -->

					</div> <!-- end row -->
				</div> <!-- end container -->
			</div> <!-- end navigation -->
		</nav> <!-- end navbar -->
	</header>

    @yield('content')

    <!-- Footer Type-2 -->
		<footer class="footer footer-type-2">
			<div class="container">
				<div class="footer-widgets">
					<div class="row">

						<div class="col-md-4 col-md-offset-4">

							<div class="footer-logo local-scroll text-center mb-20 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
								<h3 class="color-white uppercase">
									<a href="#home">PAFA</a>
								</h3>
							</div>

							<div class="footer-socials mt-mdm-10">
								<div class="social-icons text-center">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-youtube"></i></a>
									<!-- <a href="#"><i class="fa fa-google-plus"></i></a> -->
									{{-- <a href="#"><i class="fa fa-linkedin"></i></a> --}}
									<!-- <a href="#"><i class="fa fa-vimeo"></i></a> -->
								</div>
							</div>

						</div>

					</div>
				</div>
			</div> <!-- end container -->

			<div class="bottom-footer">
				<div class="container">
					<div class="row">

						<div class="col-sm-12 copyright text-center">
							<span>
								&copy; <script>document.querySelector(".copyright span").innerHTML += new Date().getFullYear();</script> PAFA  |  Made by <a href="https://eddyenin.com">PAFA Team</a>
							</span>
						</div>

					</div>
				</div>
			</div> <!-- end bottom footer -->
		</footer> <!-- end footer -->

		<div id="back-to-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</div>

    <!-- jQuery Scripts -->
    <script src="https://kit.fontawesome.com/0c94bff300.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/rev-slider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
</body>
</html>
