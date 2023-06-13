@extends('layout.partials')


@section('content')

    <div class="main-wrapper oh">
    	<!-- Page Title -->
		<section class="page-title text-center" style="background-image: url(img/blog/blog_title_bg.jpg);">
			<div class="container relative clearfix">
				<div class="title-holder">
					<div class="title-text">
						<h1 class="uppercase">Blog Standard</h1>
						<ol class="breadcrumb">
							<li>
								<a href="index.html">Home</a>
							</li>
                            @if (Auth::check())
                            <li>
								<a href="{{ route('blog.create') }}">Add post</a>
							</li>
							<li class="">
								<a href="{{ route('category.create') }}">Add category</a>
							</li>
                            @endif
						</ol>
					</div>
				</div>
			</div>
		</section> <!-- end page title -->

		<!-- Blog Standard -->
		<section class="section-wrap blog-standard pb-50">
			<div class="container relative">
				<div class="row">

					<!-- content -->
					<div class="col-md-8 post-content mb-50">

						<!-- standard post -->
						<article class="entry-item">
							<div class="entry-img hover-scale">
								<a href="blog-single.html">
									<img src="img/blog/post_img_1.jpg" alt="">
								</a>
							</div>

							<div class="entry">
								<h2 class="entry-title">
									<a href="blog-single.html">4 Ways Advertising Agencies Can Protect Themselves From Click Fraud.</a>
								</h2>
								<ul class="entry-meta list-inline">
									<li class="entry-date">
										<i class="fa fa-clock-o"></i><a href="#">19 July, 2015</a>
									</li>
									<li class="entry-category">
										<i class="fa fa-folder-open"></i><a href="#">Fashion</a>
									</li>
									<li class="entry-author">
										<i class="fa fa-user"></i><a href="#">Admin</a>
									</li>
									<li class="entry-comments">
										<i class="fa fa-comments"></i><a href="blog-single.html">15</a>
									</li>
								</ul>
								<div class="entry-content">
									<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amadea is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur.</p>
									{{-- <a href="blog-single.html" class="read-more dark-link">
										Read More <i class="fa fa-angle-right"></i>
									</a> --}}
								</div>
							</div>
						</article> <!-- end standard post -->

						<!-- Pagination -->
						<nav class="pagination clear">
							<a href="#"><i class="fa fa-angle-left"></i></a>
							<span class="page-numbers current">1</span>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#"><i class="fa fa-angle-right"></i></a>
						</nav>

					</div> <!-- end col -->

					<!-- Sidebar -->
					<aside class="col-md-4 sidebar">

						<div class="widget search">
							<form class="relative">
								<input type="search" class="searchbox mb-0" placeholder="Search">
								<button type="submit" class="search-button"><i class="fa fa-search"></i></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="widget categories">
							<h3 class="widget-title heading relative heading-small uppercase bottom-line style-2 left-align">Categories</h3>
							<ul class="list-dividers">
								<li>
									<a href="#">Business<span>106</span></a>
								</li>
								<li class="active-cat">
									<a href="#">Science<span>77</span></a>
								</li>
								<li>
									<a href="#">Sport<span>68</span></a>
								</li>
								<li>
									<a href="#">Politics<span>57</span></a>
								</li>
								<li>
									<a href="#">Lifestyle<span>125</span></a>
								</li>
								<li>
									<a href="#">World<span>344</span></a>
								</li>
								<li>
									<a href="#">Travel<span>128</span></a>
								</li>
							</ul>
						</div>


						<!-- Galleries -->
						{{-- <div class="widget weather">
							<h3 class="widget-title heading relative heading-small uppercase bottom-line style-2 left-align">Galleries</h3>
							<ul class="gallery-list clearfix">
								<li>
									<article class="entry-img hover-scale">
										<a href="#">
											<img src="img/magazine/gallery_11.jpg" alt="">
										</a>
									</article>
								</li>
								<li>
									<article class="entry-img hover-scale">
										<a href="#">
											<img src="img/magazine/gallery_12.jpg" alt="">
										</a>
									</article>
								</li>
								<li>
									<article class="entry-img hover-scale">
										<a href="#">
											<img src="img/magazine/gallery_13.jpg" alt="">
										</a>
									</article>
								</li>
								<li>
									<article class="entry-img hover-scale">
										<a href="#">
											<img src="img/magazine/gallery_14.jpg" alt="">
										</a>
									</article>
								</li>
								<li>
									<article class="entry-img hover-scale">
										<a href="#">
											<img src="img/magazine/gallery_15.jpg" alt="">
										</a>
									</article>
								</li>
								<li>
									<article class="entry-img hover-scale">
										<a href="#">
											<img src="img/magazine/gallery_16.jpg" alt="">
										</a>
									</article>
								</li>
							</ul>
						</div> --}}
                         <!-- end galleries -->


						<!-- Tags -->
						{{-- <div class="widget tags clearfix">
							<h3 class="widget-title heading relative heading-small uppercase bottom-line style-2 left-align">Tags</h3>
							<a href="#">Multi-purpose</a>
							<a href="#">Creative</a>
							<a href="#">Elegant</a>
							<a href="#">Clean</a>
							<a href="#">Modern</a>
							<a href="#">Responsive</a>
							<a href="#">E-commerce</a>
							<a href="#">WordPress</a>
							<a href="#">Woocommerce</a>
							<a href="#">Store</a>
							<a href="#">Business</a>
						</div> --}}

					</aside> <!-- end sidebar -->

				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end blog standard -->
    </div>
@endsection
