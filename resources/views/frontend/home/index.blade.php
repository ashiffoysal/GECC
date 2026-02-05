@extends('layouts.frontend')
@section('title', 'Home ')
@section('meta_description', 'Learn')
@section('content')

<!-- Start Hero Slider Area -->
		<section class="hero-slider-area">
			<div class="hero-slider owl-carousel owl-theme">
				<div class="hero-slider-item slider-item-bg-2">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="hero-slider-text">
									<span>Research More & More</span>
									<h1>We Are Happy To Build Your Best <span>Business</span></h1>
									<p>We help you for getting success</p>	
									<div class="banner-button">
										<a class="default-btn" href="contact.html">
											Let's Start
										</a>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item slider-item-bg-1">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="hero-slider-text">
									<span>Research More & More</span>
									<h1>Take Your Business To New <span>Heights</span></h1>
									<p>We help you for getting success</p>	
									<div class="banner-button">
										<a class="default-btn" href="contact.html">
											Let's Start
										</a>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
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
							<h3>Business Growth</h3>
							<p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-box bg-2">
							<i class="flaticon-creativity"></i>
							<h3>Strategy Process</h3>
							<p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-box bg-3">
							<i class="flaticon-mortarboard"></i>
							<h3>Finance Manage</h3>
							<p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod tempor incididunt labore.</p>
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
		<section class="financial-area owl-carousel owl-theme">
			<div class="container-fluid p-0">
				<div class="row m-0">
					<div class="col-lg-3 col-sm-6 col-md-6 p-0">
						<div class="financial-image bg-1">
							<img src="{{ asset('frontend') }}/assets/img/financial/1.jpg" alt="image">
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 col-md-6 p-0">
						<div class="financial-text">
							<div class="icon">
								<i class="flaticon-development"></i>
							</div>

							<h3>Project Management</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>

							<a href="projects-details.html" class="default-btn">Learn More <span></span></a>

							<div class="shape">
								<img src="{{ asset('frontend') }}/assets/img/shape/2.png" alt="image">
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 col-md-6 p-0">
						<div class="financial-image bg-2">
							<img src="{{ asset('frontend') }}/assets/img/financial/2.jpg" alt="image">
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 col-md-6 p-0">
						<div class="financial-text">
							<div class="icon">
								<i class="flaticon-interview"></i>
							</div>

							<h3>Financial Planning</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>

							<a href="projects-details.html" class="default-btn">Learn More <span></span></a>

							<div class="shape">
								<img src="{{ asset('frontend') }}/assets/img/shape/2.png" alt="image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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