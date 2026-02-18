@extends('layouts.frontend')
@section('title', 'History')
@section('meta_description', 'Learn about our history')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1" style="margin-bottom: 50px;">
			<div class="container">
				<div class="page-title-content">
					<h2>History</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>History</li>
					</ul>
				</div>
			</div>
		</div>
<section class="about-us-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-title">
							<span>History</span>
							<h2>{{ $history->title }}</h2>
							<p>{!! $history->details !!}</p>
							
							<a class="default-btn" href="{{ url('/contact') }}">Contact Us</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-us-img">
							{{-- <img src="{{ asset('frontend') }}/assets/img/about-1.png" alt="About Us"> --}}
							<div class="about-img-2">
								<img src="{{ asset($history->image) }}" alt="About Us">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection