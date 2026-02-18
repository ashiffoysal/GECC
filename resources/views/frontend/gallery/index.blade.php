
@extends('layouts.frontend')
@section('title', 'Gallery')
@section('meta_description', 'Learn')
@section('content')
  
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>Gallery</h2>
					<ul>
						<li>
							<a href="{{ route('frontend.index') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Gallery</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!--  Start Project Area -->
		<div class="project-area pt-100 pb-70">
			<div class="container">
				{{-- <div class="sorting-menu">
					<ul> 
						<li class="filter active" data-filter="all">All</li>
						<li class="filter" data-filter=".one">Business</li>
						<li class="filter" data-filter=".two">Development</li>
						<li class="filter" data-filter=".three">Finance</li>
						<li class="filter" data-filter=".four">Growth</li>
						<li class="filter" data-filter=".five">Marketing</li>
					</ul>
				</div> --}}
				<!-- /.sorting-menu -->
				<div id="Container" class="row">
					<div class="col-12">
						<div class="row">
                           @foreach ($allGallery as $gallery)
                               <div class="single-portfolio-item col-lg-4 col-sm-6 one five mix">
                                   <div class="portfolio-inner">
                                       <img class="portfolio-img" src="{{ asset('uploads/gallery/'.$gallery->image) }}" alt="portfolio-img">
									<div class="portfolio-hover">
										<div class="hover-text">
											<a href="">
												<h4>{{ $gallery->title }}</h4>
									
											</a>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--  End Project Area -->
        @endsection