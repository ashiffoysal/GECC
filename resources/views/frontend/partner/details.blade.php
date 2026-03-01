@extends('layouts.frontend')
@section('title', 'Partners Details')
@section('meta_description', 'Learn')
@section('content')

		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>Partners Details</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Partners Details</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start About Us Area -->
		<section class="about-us-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="about-title">
							<span>Partners Details</span>
							<h2>{{ $partner->title }}</h2>
							<p>{!! $partner->details !!}</p>
							
						</div>
					</div>
					<div class="col-lg-2">
						<div class="about-us-img">
							<a href="{{ $partner->site_link }}"><img src="{{ asset($partner->image) }}" alt="About Us"></a>
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection