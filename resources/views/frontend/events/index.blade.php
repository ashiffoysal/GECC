@extends('layouts.frontend')
@section('title', 'Events')
@section('meta_description', 'Learn')
@section('content')
    <!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>Events</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Events</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Blog Area -->
        <section class="blog-area blog-page ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Events</span>
					<h2>Latest Events</h2>
				</div>

				<div class="row">
                    @foreach ($allEvents as $event)
					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="post-image">
								<a href="{{ url('event-detail/'.$event->id) }}">
									<img src="{{ asset($event->image) }}" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i> 
									<span>{{ date('d M Y', strtotime($event->created_at)) }}</span>
								</div>
								<h3>
									<a href="{{ url('event-detail/'.$event->id) }}">{{ $event->title }}</a>
								</h3>
								<p>{!! Str::limit($event->description, 100) !!}</p>
								<a href="{{ url('event-detail/'.$event->id) }}" class="default-btn">Read More</a>
							</div>
						</div>
					</div>
                    @endforeach
					
					<div class="col-lg-12">
                        {{ $allEvents->links('vendor.pagination.bootstrap-5') }}
					</div>
				</div>
			</div>
		</section>
        @endsection