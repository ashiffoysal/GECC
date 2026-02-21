@extends('layouts.frontend')
@section('title', 'Partners')
@section('meta_description', 'Learn')
@section('content')

		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1" style="margin-bottom: 50px;">
			<div class="container">
				<div class="page-title-content">
					<h2>Partners</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Partners</li>
					</ul>
				</div>
			</div>
		</div>
        @include('frontend.include.partner')
        @include('frontend.include.team')

@endsection