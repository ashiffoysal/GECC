@extends('layouts.frontend')
@section('title', 'Events')
@section('meta_description', 'Learn')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>Our Team</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Our Team</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Team Area -->
		<section class="team-area pt-100 pb-70">
			<div class="container">
				<div class="row">
                    @foreach ($allTeams as $team)
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-team">
							<div class="team-img">
								<img src="{{ asset('uploads/team/'.$team->image) }}" alt="">
								<ul class="team-icon" >
									<li>
										<a href="{{ $team->facebook }}" target="_blank">
											<i class="fa-brands fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="{{ $team->twitter }}" target="_blank">
											<i class="fa-brands fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="{{ $team->instagram }}" target="_blank">
											<i class="fa-brands fa-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="team-text">
								<h3>{{ $team->name }}</h3>
								<span>{{ $team->position }}</span>
							</div>
						</div>
					</div>
                    @endforeach
				
				</div>
			</div>
		</section>
		<!-- End Team Area -->

@endsection