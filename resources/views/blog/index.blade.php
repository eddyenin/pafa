@extends('layout.partials')


@section('content')

    <div class="main-wrapper oh">
    	<!-- Page Title -->
		<section class="page-title text-center" style="background-image: url(img/blog/blog_title_bg.jpg);">
			<div class="container relative clearfix">
				<div class="title-holder">
					<div class="title-text">
						<h1 class="uppercase">Blog</h1>
						<ol class="breadcrumb">
							<li>
								<a href="{{ url('') }}">Home</a>
							</li>

						</ol>
					</div>
				</div>
			</div>
		</section> <!-- end page title -->

		<!-- Blog Standard -->
		<section class="section-wrap blog-standard pb-50">
			<div class="container relative">
                @if (Auth::check())
                <a href="{{ route('category.create')  }}" class="btn btn-success btn-md mt-50">Add Category</a>
                <a href="{{ route('blog.create')  }}" class="btn btn-success btn-md mt-50">Add Post</a>
                @endif

                @if ($posts)
                <div class="row mt-20">
                    {{-- @if (Auth::check()) --}}

                    {{-- @endif --}}
					<!-- content -->
					<div class="col-md-8 post-content mb-50">
                      @foreach ($posts as $post )
                          <!-- standard post -->
						<article class="entry-item">

                            <div class="">

                                <div class="swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        @foreach ($post->blogImages as $img)
                                        <div class="swiper-slide">
                                            <a href="#">
                                                <img src="{{ asset('img/photos/'. $img->filename) }}" style="width:100%;display:flex;justify-content:center;align-items:center;flex-direction:row"alt="images">
                                            </a>
                                        </div>
                                        @endforeach

                                    </div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev" style="color: #000;"></div>
                                    <div class="swiper-button-next" style="color: #000"></div>

								</div>
							</div> <!-- end slider -->

                            {{-- <div class="entry-img hover-scale">
								<a href="blog-single.html">

								</a>
							</div> --}}

							<div class="entry">
								<h2 class="entry-title">
									<a href="blog-single.html">{{ $post->title }}</a>
								</h2>
								<ul class="entry-meta list-inline">
									<li class="entry-date">
										<i class="fa fa-clock-o"></i><a href="#">{{ $post->created_at }}</a>
									</li>
                                    {{-- @foreach ($post->categories as $cat)
                                    <li class="entry-category">
										<i class="fa fa-folder-open"></i><a href="#">{{ $cat->title}} </a>
									</li>
                                    @endforeach --}}

									<li class="entry-author">
										<i class="fa fa-user"></i><a href="#">Admin</a>
									</li>
									{{-- <li class="entry-comments">
										<i class="fa fa-comments"></i><a href="blog-single.html">15</a>
									</li> --}}
								</ul>
								<div class="entry-content">
									<p>{{ implode(' ', array_slice(explode(' ',strip_tags($post->body)  ), 0, 50));}}</p>
									<a href="{{ url('blog/'. $post->slug) }}" class="read-more dark-link">
										Read More <i class="fa fa-angle-right"></i>
									</a>
								</div>
							</div>
						</article> <!-- end standard post -->
                      @endforeach



						<!-- Pagination -->
						<nav class="pagination clear">
                            <span class="page-numbers">{{ $po->links() }}</span>
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
                                @foreach ($categories as $cat)
                                <li>
                                    <a href="#">{{ $cat->title }}</a>
                                </li>
                                @endforeach
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
                @endif
			</div> <!-- end container -->
		</section> <!-- end blog standard -->
    </div>
@endsection
