

	<section class="team-area team-area-two pb-70" style="padding-top:100px ">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="section-title">
							<span>Team Member</span>
							<h2>Our Expart Team</h2>
							<p>Team GECC is composed of dedicated, experienced, and passionate professionals committed to guiding students toward a successful international education journey. Our team works with integrity, transparency, and personalized care to ensure every student receives the best support and accurate guidance. Together, we strive to maintain excellence, build trust, and create opportunities for a brighter future.</p>
							<a class="default-btn" href="#">Meet the team</a>
						</div>
					</div>
					@php
						$allTeam=App\Models\OurTeam::where('is_active',1)->where('is_deleted',1)->get();
					@endphp
						
					<div class="col-lg-8">
						<div class="row">
							<div class="team-wraps owl-carousel owl-theme">
								@foreach ($allTeam as $team)
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
										<h3 style="font-size: 12px;">{{ $team->name }}</h3>
										<span>{{ $team->designation }}</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>