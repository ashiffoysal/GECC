@extends('layouts.frontend')
@section('title', 'About Us')
@section('meta_description', 'Learn')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>About</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>About</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->
        @include('frontend.include.about')
        @include('frontend.include.team')

@endsection