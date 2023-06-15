@extends('layout.partials')


@section('content')

    <div class="main-wrapper oh">
    	<!-- Page Title -->
		<section class="page-title text-center" style="background-image: url(/img/blog/blog_title_bg.jpg);">
			<div class="container relative clearfix">
				<div class="title-holder">
					<div class="title-text">
						<h1 class="uppercase">{{ $title }}</h1>
						<ol class="breadcrumb">
						</ol>
					</div>
				</div>
			</div>
		</section> <!-- end page title -->

		<!-- Blog Standard -->
		<section class="section-wrap blog-standard pb-50">
			<div class="container relative">
                <a href="{{ route('blog.index')  }}" class="btn btn-success btn-md mt-50">back</a>
                @if (Auth::check())
                <a href="{{ url('blog/'.$post->slug.'/edit')  }}" class="btn btn-success btn-md mt-50">edit</a>
                <a href="" class="btn btn-danger btn-md mt-50">delete</a>
                @endif

				<div class="row">

					<!-- content -->
					<div class="col-md-12 post-content mb-50 mt-50">

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

							<div class="entry">
								{{-- <h2 class="entry-title">
									<a href="blog-single.html">{{ $post->title }}.</a>
								</h2> --}}
								<ul class="entry-meta list-inline">
									<li class="entry-date">
										<i class="fa fa-clock-o"></i><a href="#">{{ $post->created_at }}</a>
									</li>

                                    <li class="entry-category">
                                         <i class="fa fa-folder-open"></i><span>{{$post->categories[0]['title']}}</span>
									</li>

									<li class="entry-author">
										<i class="fa fa-user"></i><a href="#">Admin</a>
									</li>
								</ul>
								<div class="entry-content">
									<p>{{ strip_tags($post->body) }}</p>
								</div>
							</div>
						</article> <!-- end standard post -->

					</div> <!-- end col -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end blog standard -->
    </div>
@endsection
