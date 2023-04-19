@extends('layout.partials')


@section('content')

    <div class="main-wrapper oh">
    	<!-- Page Title -->
		<section class="page-title text-center" style="background-image:  url({{ asset('img/blog/blog_title_bg.jpg') }});">
			<div class="container relative clearfix">
				<div class="title-holder">
					<div class="title-text">
						<h1 class="uppercase">{{ $title }}</h1>
						<ol class="breadcrumb">
							<li>
								<a href="{{ route('blog.index') }}">Back</a>
							</li>

							<li class="active">
								Add category
							</li>
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
                        @if ($errors)
                           @foreach ($errors->all() as $error )
                               <div class="alert alert-danger">
                                    <ul>
                                        <li>{{ $error }}</li>
                                    </ul>
                               </div>
                           @endforeach

                        @endif

                        <h2 class="">
                            <a href="Javascript:void()">{{ $title }}</a>
                        </h2>
						<form class="" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

							<div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
							</div>
                            <div class="form-group ">
                                <label for="">Photos</label>
                                <input type="file" class="" name="photos[]" placeholder="" multiple>
							</div>
                            <div class="form-group">
                                <label for="">Message</label>
                               <textarea name="info" id="" cols="30" rows="10"></textarea>
							</div>
                            <div class="form-group">
                               <button class="btn btn-success btn-md">submit</button>
							</div>
						</form> <!-- end standard post -->




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

                    </aside>
                </div>
            </div>
        </section>
    </div>
@endsection
