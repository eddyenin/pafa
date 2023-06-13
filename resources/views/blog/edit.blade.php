@extends('layout.partials')


@section('content')

    <div class="main-wrapper oh">
    	<!-- Page Title -->
		<section class="page-title text-center" style="background-image:  url({{ asset('img/blog/blog_title_bg.jpg') }});">
			<div class="container relative clearfix">
				<div class="title-holder">
					<div class="title-text">
						<h1 class="uppercase">{{ $title }}</h1>
						{{-- <ol class="breadcrumb">
							<li>
								<a href="{{ route('blog.index') }}">Back</a>
							</li>
                            @if (Auth::check())
                            <li class="active">
								<a href="{{ route('category.create') }}">Add category</a>
							</li>
                            @endif

						</ol> --}}
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
                       @include('inc.messages')

                        <h2 class="">
                            <a href="Javascript:void()">{{ $title }}</a>
                        </h2>
                        <span></span>
						<form class="mt-10" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="Title">Category</label>
                               <select name="category" id="" class="form-control" required>
                                    <option value="">select category...</option>
                                    @foreach ($categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                               </select>
							</div>
							<div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
							</div>
                            <div class="form-group ">
                                <label for="">Main photo</label>
                                <input type="file" class="" name="image" placeholder="">
							</div>
                            <div class="form-group ">
                                <label for="">Photos</label>
                                <input type="file" class="" name="photos[]" placeholder="" multiple>
							</div>
                            <div class="form-group">
                                <label for="">Message</label>
                               <textarea name="info" id="" cols="30" rows="10">{{ $post->body }}</textarea>
							</div>
                            <div class="form-group">
                               <button class="btn btn-success btn-md">submit</button>
                               <a href="{{ url('blog') }}" class="btn btn-success btn-md">back</a>
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
                                @foreach ($categories as $cat)
                                <li>
									<a href="#">{{ $cat->title }}</a>
								</li>
                                @endforeach
							</ul>
                            @if (Auth::check())
                            <a href="{{ route('category.create')  }}" class="btn btn-success btn-md mt-50">Add Category</a>
                            @endif
						</div>

                    </aside>
                </div>
            </div>
        </section>
    </div>
@endsection
