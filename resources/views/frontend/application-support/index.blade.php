@extends('layouts.frontend')
@section('title', 'Application Support')
@section('meta_description', 'Learn about financial aid options and resources available to support your education and career goals.')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1" style="margin-bottom: 50px;">
			<div class="container">
				<div class="page-title-content">
					<h2>Application Support</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Application Support</li>
					</ul>
				</div>
			</div>
		</div>
<section class="about-us-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-title">
							<span>Application Support</span>
							<h2>{{ $application_support->title }}</h2>
							<p>{!! $application_support->details !!}</p>
							
							<a class="default-btn" href="{{ url('/contact') }}">Contact Us</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-us-img">
							{{-- <img src="{{ asset('frontend') }}/assets/img/about-1.png" alt="About Us"> --}}
							<div class="about-img-2">
								<img src="{{ asset($application_support->image) }}" alt="About Us">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        @include('frontend.include.team')
@endsection