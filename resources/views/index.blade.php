<!DOCTYPE html>
<html lang="en">
<head>
	<title>PAFA | Precious Apparel Fashion Academy</title>

	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<link rel="author" href="https://plus.google.com/u/0/104296509460513856975" />

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:600,400%7CHind' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,600,800,400,300%7CMontserrat:400,700%7CRaleway:600,400' rel='stylesheet'>
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
	<link rel="shortcut icon" href="{{ asset('mg/favicon.ico') }}i">
	<link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}">

</head>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top" style="font-family: Hind, sans-serif" class="onepage">

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			"Loading..."
		</div>
	</div>

	<header class="nav-type-2 onepage-nav" id="home">
		<nav class="navbar navbar-fixed-top">
			<div class="navigation-overlay dark">
				<div class="container-fluid semi-fluid relative">
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
								<a href="{{ url('') }}">
									<img class="logo" src="{{ asset('') }}img/logo/pafa_logo_white.png" width="50px" alt="logo">
								</a>
							</div>
						</div>

						<div class="col-md-9 nav-wrap right">
							<div class="collapse navbar-collapse" id="navbar-collapse">

								<ul class="nav navbar-nav local-scroll navbar-right">

									<li class="active">
										<a href="{{ url('') }}">Home</a>
									</li>

									<li>
										<a href="#portfolio">Project</a>
									</li>
									<li>
										<a href="#services">Services</a>
									</li>
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

	<div class="main-wrapper oh">
		<!-- Text Rotator -->
		<section class="hero-wrap text-center" style="background: url('img/pafa/PAFA_BG_.jpg') no-repeat, center center/cover;">
			<div class="container container-full-height" >
				<div class="hero-holder">
					<div class="hero-message text-rotator">
						<h1><span class="rotate">Welcome to Precious Apparel, Your <i>Fashion</i> <br> Career Starts Here.</span></h1>
						<p>We are on a mission to teach one billion people how to <br> become professional fashion designers and make a living from their craft.</p>
						<div class="local-scroll">
							<a href="#intro" class="scroll-down">
								<i class="fa fa-angle-down"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

		</section> <!-- end text rotator -->
		<!-- Intro -->
		<section class="section-wrap intro" id="intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-6 col-md-6 intro-video">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/mprHfPZMnEo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

					</div> <!-- end col -->

					<div class="col-sm-6 col-6 col-md-6 intro-content">
						<h2 class="text-center">About us</h2>
						<p class="intro-text">
							Precious Apparel fashion academy is dedicated to educating aspiring fashion designers on the latest fashion trends, design techniques, and best industry practices.

							Whether you’re a beginner looking to learn more about the world of fashion or an experienced designer looking to refine your skills, our courses, lectures, and resources can help you every step of the way.

							Our Vision is to simply fashion design and make it easy / affordable for a road side tailor to have access to quality fashion design training and gain standard fashion knowledge.

							To reach and impart 1 billion fashion enthusiasts all over the world
						</p>
					</div>

				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end intro -->

		<!-- Portfolio Slider-->
		<section class="featured-works" id="portfolio">
			<div class="container-fluid">
				<div class="row heading">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="uppercase bottom-line">Students Project</h2>
						<p class="subheading style-2">Lorem ipsum dolor sit amet.</p>
					</div>
				</div>

				<div class="row">
					<div id="owl-featured-works" class="owl-carousel owl-theme">
						<div class="work-item hover-2">
							<div class="work-container">
								<div class="work-img">
									<a href="img/pafa/pic_1.jpg" class="lightbox-gallery" title="pafa">
										<img src="img/pafa/pic_1.jpg"  alt="">
										<div class="work-overlay">
											{{-- <div class="work-description">
												<h2 class="color-white">pafa</h2>
												<span>project</span>
											</div> --}}
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end work-item -->
						<div class="work-item hover-2">
							<div class="work-container">
								<div class="work-img">
									<a href="img/pafa/pic_2.jpg" class="lightbox-gallery" title="pafa">
										<img src="img/pafa/pic_2.jpg"  alt="">
										<div class="work-overlay">

										</div>
									</a>
								</div>
							</div>
						</div> <!-- end work-item -->

						<div class="work-item hover-2">
							<div class="work-container">
								<div class="work-img">
									<a href="img/pafa/pic_3.jpg" class="lightbox-gallery" title="pafa">
										<img src="img/pafa/pic_3.jpg"  alt="">
										<div class="work-overlay">

										</div>
									</a>
								</div>
							</div>
						</div> <!-- end work-item -->

						<div class="work-item hover-2">
							<div class="work-container">
								<div class="work-img">
									<a href="img/pafa/pic_4.jpg" class="lightbox-gallery" title="pafa">
										<img src="img/pafa/pic_4.jpg"  alt="">
										<div class="work-overlay">

										</div>
									</a>
								</div>
							</div>
						</div> <!-- end work-item -->
						<div class="work-item hover-2">
							<div class="work-container">
								<div class="work-img">
									<a href="img/pafa/pic_5.jpg" class="lightbox-gallery" title="pafa">
										<img src="img/pafa/pic_5.jpg"  alt="">
										<div class="work-overlay">

										</div>
									</a>
								</div>
							</div>
						</div> <!-- end work-item -->

						<div class="work-item hover-2">
							<div class="work-container">
								<div class="work-img">
									<a href="img/pafa/pic_6.jpg" class="lightbox-gallery" title="pafa">
										<img src="img/pafa/pic_6.jpg"  alt="">
										<div class="work-overlay">

										</div>
									</a>
								</div>
							</div>
						</div> <!-- end work-item -->

						<div class="work-item hover-2">
							<div class="work-container">
								<div class="work-img">
									<a href="img/pafa/pic_7.jpg" class="lightbox-gallery" title="pafa">
										<img src="img/pafa/pic_7.jpg"  alt="">
										<div class="work-overlay">

										</div>
									</a>
								</div>
							</div>
						</div> <!-- end work-item -->

						<div class="work-item hover-2">
							<div class="work-container">
								<div class="work-img">
									<a href="img/pafa/pic_4_copy.jpg" class="lightbox-gallery" title="pafa">
										<img src="img/pafa/pic_4_copy.jpg"  alt="">
										<div class="work-overlay">

										</div>
									</a>
								</div>
							</div>
						</div> <!-- end work-item -->

					</div>	<!-- end slider -->
				</div> <!-- end row -->
			</div>
		</section> <!-- end featured works -->


		<!-- Services -->
		<section class="section-wrap-lg icon-boxes pb-60 pb-mdm-80 style-2" id="services">
			<div class="container">

				<div class="row heading">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="uppercase bottom-line">Our Core Values</h2>
						<p class="subheading style-2">Fashion Upgrade is a must in pafa, we are fashion king makers.</p>
					</div>
				</div>

				<div class="row">

					<div class="col-md-4 mb-60 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".1s">
						<div class="service-item-box">
							<a href="#">
								<i class="fa-sharp fa-solid fa-tape"></i>
							</a>
							<h3>Integrity</h3>
							<p class="mb-0">Afela is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur. Fully Responsive Theme.</p>
						</div>
					</div> <!-- end service item -->

					<div class="col-md-4 mb-60 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".1s">
						<div class="service-item-box">
							<a href="#">
								<i class="fa-solid fa-wand-magic-sparkles"></i>
							</a>
							<h3>Creativity</h3>
							<p class="mb-0">Afela is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur. Fully Responsive Theme.</p>
						</div>
					</div> <!-- end service item -->

					<div class="col-md-4 mb-60 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".1s">
						<div class="service-item-box">
							<a href="#">
								<i class="fa-solid fa-scissors"></i>
							</a>
							<h3>Craftmanship</h3>
							<p class="mb-0">Afela is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur. Fully Responsive Theme.</p>
						</div>
					</div> <!-- end service item -->

					<div class="col-md-4 mb-60 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
						<div class="service-item-box">
							<a href="#">
								<i class="fa-solid fa-book-open"></i>
							</a>
							<h3>Accountability</h3>
							<p class="mb-0">Afela is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur. Fully Responsive Theme.</p>
						</div>
					</div> <!-- end service item -->

					<div class="col-md-4 mb-60 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
						<div class="service-item-box">
							<a href="#">
								<i class="fa-solid fa-magnifying-glass"></i>
							</a>
							<h3>Transparency</h3>
							<p class="mb-0">Afela is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur. Fully Responsive Theme.</p>
						</div>
					</div> <!-- end service item -->

					<div class="col-md-4 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
						<div class="service-item-box">
							<a href="#">
								<i class="fa-solid fa-crown"></i>
							</a>
							<h3>Expertise</h3>
							<p class="mb-0">Afela is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur. Fully Responsive Theme.</p>
						</div>
					</div> <!-- end service item -->

				</div>
			</div>
		</section> <!-- end icon boxes -->


		<!-- Testimonials -->
		<section class="section-wrap parallax-testimonials nopadding relative">

			<div class="relative">

				<h2 class="text-center uppercase color-white">Happy Customers</h2>
				<div id="owl-testimonials" class="owl-carousel owl-theme text-center">

					<div class="item">
						<div class="container testimonial">
							<div class="row">
								<div class="col-md-12">
									<p class="testimonial-text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented! I will work only with this agency.</p>
									<span>Sara Simpson, CEO of Company</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="container testimonial">
							<div class="row">
								<div class="col-md-12">
									<p class="testimonial-text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented! I will work only with enigma agency.</p>
									<span>John C. Marshall, Art Director</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="container testimonial">
							<div class="row">
								<div class="col-md-12">
									<p class="testimonial-text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented! I will work only with enigma agency.</p>
									<span>Clint Eastwood, Actor</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="parallax" data-stellar-background-ratio="0.5"></div>
		</section> <!-- end testimonials -->


		<!-- Our Team -->
		<section class="section-wrap-lg our-team pb-80" id="about-us">
			<div class="container">

				<div class="row heading">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="uppercase bottom-line">Awards and Recognition</h2>
						<!-- <p class="subheading style-2">Our Amazing Team</p> -->
					</div>
				</div>

				<div class="row">

					<div class="col-md-4 col-sm-6 team-wrap mb-40">
						<div class="team-member text-center">
							<div class="team-img" onclick="return true">
								<img src="img/pafa/award_1.jpg" alt="">
								<div class="overlay">
									{{-- <div class="team-details text-center">
										<div class="social-icons rounded">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-envelope"></i></a>
										</div>
									</div> --}}
								</div>
							</div>
							{{-- <h4 class="team-title">David Geller</h4>
							<span>CEO of Company</span> --}}
						</div>
					</div> <!-- end team member -->

					<div class="col-md-4 col-sm-6 team-wrap mb-40">
						<div class="team-member text-center">
							<div class="team-img">
								<img src="img/pafa/award_2.jpg" alt="">
								<div class="overlay">

								</div>
							</div>

						</div>
					</div> <!-- end team member -->

					<div class="col-md-4 col-sm-6 team-wrap">
						<div class="team-member last text-center">
							<div class="team-img">
								<img src="img/pafa/award_3.jpg" alt="">
								<div class="overlay">

								</div>
							</div>

						</div>
					</div> <!-- end team member -->

				</div>
			</div>
		</section> <!-- end our team -->


		<!-- Call to Action -->
		<section class="section-wrap call-to-action style-2 bg-dark">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 text-center">
						<h3 class="color-white">Are you ready to join our ONLINE tutorials? Now is a Great Opportunity</h3>
						<div class="cta-button">
							<a href="https://selar.co/m/preciousapparel" target="blank" class="btn btn-lg btn-transparent">Register Now</a>
						</div>
					</div>

				</div>
			</div>
		</section> <!-- end call to action -->


		<!-- From Blog -->
		<section class="section-wrap-lg pb-90 pb-mdm-50 from-blog" id="blog">
			<div class="container">
				<div class="row heading">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="uppercase bottom-line">Illustrations</h2>
						<p class="subheading style-2">We help our clients market to the world and inspire minds of people</p>
					</div>
				</div>
                @if ($post != false)
				<div class="row">
                    @foreach($post as $p)
                    <article class="col-4  col-md-4 col-xs-4 mb-20 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                        @if ($p->blogImages)
                        <div class="entry-img">
                            <a href="{{ url('blog') }}" class="hover-scale">
                                <img src="{{ asset('img/photos/'.$p->blogimages[0]['filename']) }}"style="width:100%" alt="">
                            </a>
                        </div>
                        @endif
                        <div class="entry">
                            <h4 class="entry-title"><a href="blog-single.html"></a>{{ $p->title }}</h4>
                            <div class="entry-content">
                                <p>{{ implode(' ', array_slice(explode(' ',strip_tags($p->body)  ), 0, 20));}}</p>
                                <a href="{{ url('blog') }}" class="read-more dark-link">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </article> <!-- end post -->
                    @endforeach
				</div>
                @else
                <div class="entry">
                    <div class="entry-content text-center">
                        <p>No posts yet!</p>
                        @if(Auth::check())
                        <a href="{{ route('blog.create')  }}" class="btn btn-success btn-md mt-50">Add Post</a>
                        @endif
                    </div>
                </div>

                @endif
                <!-- end row -->
			</div>
		</section> <!-- end from blog -->


		<!-- Partners -->
		<section class="section-wrap">
			<div class="row heading">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="uppercase bottom-line">Alumni</h2>
					<p class="subheading style-2">We help our clients market to the world and inspire minds of people</p>
				</div>
			</div>
			<div class="container-fluid  bg-dark">
				<div class="row">
					<div id="owl-partners" class="owl-carousel owl-theme">
						<div class="item">
							<a href="#">
								<img src="img/logo/logo5.png" alt="">
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="img/logo/logo4.png" alt="">
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="img/logo/logo3.png" alt="">
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="img/logo/logo2.png" alt="">
							</a>
						</div>
						<div class="item">
							<a href="#">
								<img src="img/logo/logo1.png" alt="">
							</a>
						</div>
					</div> <!-- end carousel -->
				</div>
			</div>
		</section> <!-- end partners -->


		<!-- Contact -->
		<section class="section-wrap-lg contact" id="contact">
			<div class="container">

				<div class="row heading">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="uppercase bottom-line">Contact</h2>
						<p class="subheading style-2">We help our clients market to the world and inspire minds of people</p>
					</div>
				</div>

				<div class="row">

					<div class="col-md-4 mb-40">
						<h5 class="uppercase">Information</h5>

						<div class="contact-item">
							<div class="contact-icon">
								<i class="fa-solid fa-house"></i>
							</div>
							<p>31 Road, opposite D-close<br>
							Gowon Estate, Egbeda<br>
							Lagos, Nigeria.</p>
						</div> <!-- end address -->

						<div class="contact-item">
							<div class="contact-icon">
								<i class="fa-solid fa-phone"></i>
							</div>
							<span> +2348071939239</span> <br>
							<span> +2348134954998</span>
						</div> <!-- end phone number -->

						<div class="contact-item">
							<div class="contact-icon">
								<i class="fa-solid fa-envelope"></i>
							</div>
							<a href="mailto:preciousapparelteam@gmail.com" class="dark-link">preciousapparelteam@gmail.com</a>
						</div> <!-- end email -->

					</div>

					<div class="col-md-8">
						<form id="contact-form" action="#">

							<div class="row row-16">
								<div class="col-md-6 contact-name">
									<input name="name" id="name" type="text" placeholder="Name*">
								</div>
								<div class="col-md-6 contact-email">
									<input name="mail" id="mail" type="email" placeholder="E-mail*">
								</div>
							</div>

							<textarea name="comment" id="comment" placeholder="Message" rows="9"></textarea>
							<input type="submit" class="btn btn-lg btn-color btn-submit" value="Send Message" id="submit-message">
							<div id="msg" class="message"></div>
						</form>
					</div> <!-- end col -->

				</div>
			</div>
		</section> <!-- end contact -->


		<!-- Google Map -->
		<div class="gmap-btn">Open Map</div>
		<div class="gmap gmap-hidden" id="map_canvas" data-address="V Tytana St, Manila, Philippines"></div>


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
									<a href="https://instagram.com/preciousapparel__" target="blank"><i class="fa fa-instagram"></i></a>
									<a href="https://facebook.com/preciousapparel" target="blank"><i class="fa fa-facebook"></i></a>
									<a href="https://youtube.com/preciousapparel" target="blank"><i class="fa fa-youtube"></i></a>
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

	</div> <!-- end main-wrapper -->

	<!-- jQuery Scripts -->
	<script src="https://kit.fontawesome.com/0c94bff300.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/rev-slider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

	<!-- Google Map -->
	<!--
    1. Generate your key here - https://developers.google.com/maps/documentation/javascript/get-api-key
    2. Paste your key in the script below.
  -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script>
	<script type="text/javascript">
		$(document).ready( function(){
			initGmap();

			function initGmap(){

				var maplocation = jQuery(".gmap").attr("data-address");

				jQuery(".gmap").gmap3({
					marker: {
						address: maplocation,
						options: {
							icon: "{{ asset('img/map_pin.png') }}"
						}
					},
					map:{
						options:{
							zoom: 16,
							zoomControl: true,
							mapTypeControl: false,
							scaleControl: false,
							scrollwheel: false,
							navigationControl: true,
							streetViewControl: false,
							draggable: true,
							styles: [
								{
								"featureType":"all",
								"elementType":"all",
									"stylers":[
										{ "saturation":"-50" }
									]
								}]
						}
					}
				});

			}


			$(".gmap-btn").on("click", function() {

				$(this).toggleClass("opened");
				$(".gmap").toggleClass("opened");

				if ($(this).text() == "Close Map")
				   $(this).text("Open Map")
				else
				   $(this).text("Close Map");

			});
		});
	</script>

</body>
</html>
