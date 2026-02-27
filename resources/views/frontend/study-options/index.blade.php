		@extends('layouts.frontend')
@section('title', 'prerequisites')
@section('meta_description', 'Learn about financial aid options and resources available to support your education and career goals.')
@section('content')
        <!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>Study Options</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Study Options</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Box Area -->
		<section class="box-area m-0 pt-100 pb-70">
			<div class="container">
				<div class="row">
                    @foreach ($allLevels as $levels)
					<div class="col-lg-4 col-md-6">
						<div class="single-box single-box-2 bg-4">
							<i class="flaticon-statistics"></i>
							<h3>{{ $levels->title }}</h3>
							<p>{!! Str::limit($levels->description, 150) !!}</p>
							<a class="default-btn" href="{{ route('frontend.study-options.show', $levels->id) }}">Read More</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- End Box Area -->	

		<!-- Start Best Service Area -->
	
		<!-- End Best Service Area -->
        @endsection