@extends('layouts.frontend')
@section('title', 'Success')
@section('meta_description', 'Learn')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1" style="margin-bottom: 50px;">
			<div class="container">
				<div class="page-title-content">
					<h2>Our Success</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Our Success</li>
					</ul>
				</div>
			</div>
		</div>
<section class="about-us-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="about-title">
							<span>Our Success</span>
							<h2>{{ $success->title }}</h2>
							<p>{!! $success->details !!}</p>
							
							{{-- <a class="default-btn" href="{{ url('/contact') }}">Contact Us</a> --}}
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-us-img">
						
						</div>
					</div>
				</div>
			</div>
		</section>
        @include('frontend.include.review')
        @include('frontend.include.team')

@endsection