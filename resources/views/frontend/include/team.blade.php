		<section class="team-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>Team Member</span>
					<h2>Our Expert Team</h2>
				</div>
				<div class="row">
					@php
						$allTeam=App\Models\OurTeam::where('is_active',1)->where('is_deleted',1)->get();
					@endphp
					@foreach ($allTeam as $team)	
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-team">
							<div class="team-img">
								<img src="{{ asset('uploads/team/'.$team->image) }}" alt="">
								<ul class="team-icon" >
									<li>
										<a href="https://www.facebook.com/login/" target="_blank">
											<i class="fa-brands fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/login" target="_blank">
											<i class="fa-brands fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/accounts/login/" target="_blank">
											<i class="fa-brands fa-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="team-text">
								<h3>{{ $team->name }}</h3>
								<span>{{ $team->designation }}</span>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</section>