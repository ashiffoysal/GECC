@extends('layouts.frontend')
@section('title', 'Free Career Consultant')
@section('meta_description', 'Learn about financial aid options and resources available to support your education and career goals.')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1" style="margin-bottom: 50px;">
			<div class="container">
				<div class="page-title-content">
					<h2>Free Career Consultant</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Free Career Consultant</li>
					</ul>
				</div>
			</div>
		</div>
<section class="about-us-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-title">
							<span>Free Career Consultant</span>
							<h2>{{ $career->title }}</h2>
							<p>{!! $career->description !!}</p>
							
							<a class="default-btn" href="{{ url('/contact') }}">Book a Meeting</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-us-img">
							{{-- <img src="{{ asset('frontend') }}/assets/img/about-1.png" alt="About Us"> --}}
							<div class="about-img-2">
								<img src="{{ asset($career->image) }}" alt="About Us">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        @include('frontend.include.team')
@endsection