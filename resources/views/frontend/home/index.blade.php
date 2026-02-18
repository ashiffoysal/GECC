@extends('layouts.frontend')
@section('title', 'Home ')
@section('meta_description', 'Learn')
@section('content')

<!-- Start Hero Slider Area -->
		<section class="hero-slider-area">
			<div class="hero-slider owl-carousel owl-theme">
				@foreach ($allSliders as $slider)

					<div class="hero-slider-item slider-item-bg-{{ $slider->id }}" style="
    background-image: url({{ asset('uploads/slider/'.$slider->image) }});">
						<div class="d-table">
							<div class="d-table-cell">
								<div class="container">
									<div class="hero-slider-text">
										<span>{{ $slider->title }}</span>
										<h1>{{ $slider->title }}</h1>
										<p>{{ $slider->description }}</p>	
										<div class="banner-button">
											<a class="default-btn" href="{{ $slider->button_url }}">
												Let's Start
											</a>
										</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			
			
			</div>
			<div class="shape shape-1">
				<img src="{{ asset('frontend') }}/assets/img/shape/1.png" alt="Shape">
			</div>
			<div class="shape shape-3">
				<img src="{{ asset('frontend') }}/assets/img/shape/3.png" alt="Shape">
			</div>
			<div class="shape shape-4">
				<img src="{{ asset('frontend') }}/assets/img/shape/4.png" alt="Shape">
			</div>
			<div class="shape shape-5">
				<img src="{{ asset('frontend') }}/assets/img/shape/5.png" alt="Shape">
			</div>
			<div class="shape shape-6">
				<img src="{{ asset('frontend') }}/assets/img/shape/6.png" alt="Shape">
			</div>
			<div class="shape shape-7">
				<img src="{{ asset('frontend') }}/assets/img/shape/7.png" alt="Shape">
			</div>
			<div class="shape shape-8">
				<img src="{{ asset('frontend') }}/assets/img/shape/1.png" alt="Shape">
			</div>
		</section>
		<!-- End Hero Slider Area -->

		<!-- Start Box Area -->
		<section class="box-area pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-box bg-1">
							<i class="flaticon-statistics"></i>
							<h3>University Admission Support</h3>
							<p>We help you choose the right university and course based on your academic background and career goals.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-box bg-2">
							<i class="flaticon-creativity"></i>
							<h3>Visa & Immigration Guidance</h3>
							<p>Our experienced team provides complete visa assistance, including documentation review, financial preparation, and interview guidance</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-box bg-3">
							<i class="flaticon-mortarboard"></i>
							<h3>Career & Scholarship Counseling</h3>
							<p>We offer personalized career advice and scholarship guidance to help you make informed decisions.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Box Area -->

		<!-- Start About Us Area -->
        @include('frontend.include.about')
		<!-- End About Us Area -->

		<!-- Start Best Service Area -->
        @include('frontend.include.service')
		<!-- End Best Service Area -->

		<!-- Start Choose Area -->

		<!-- End Choose Area -->
        @include('frontend.include.whychoiceus')
		<!-- Start Financial Area -->
		@include('frontend.include.events')
		<!-- End Financial Area -->

		<!-- Start Partner Area -->
        @include('frontend.include.partner')
		<!-- End Partner Area -->

		<!-- Start Team Area -->
        @include('frontend.include.team')
		<!-- End Team Area -->

		<!-- Start Client Area -->
		@include('frontend.include.review')
		<!-- End Client Area -->

		<!-- Start Blog Area -->
        @include('frontend.include.blog')
		<!-- End Blog Area -->

		<!-- Start FAQ Area -->
		@include('frontend.include.faq')
		<!-- End FAQ Area -->

@endsection