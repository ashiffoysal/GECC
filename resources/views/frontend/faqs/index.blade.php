@extends('layouts.frontend')
@section('title', 'FAQs')
@section('meta_description', 'Learn about our frequently asked questions.')
@section('content')
    <!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1" style="margin-bottom: 40px">
			<div class="container">
				<div class="page-title-content">
					<h2>FAQs</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>FAQs</li>
					</ul>
				</div>
			</div>
		</div>

        @include('frontend.include.faq')

@endsection