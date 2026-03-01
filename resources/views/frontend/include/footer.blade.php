		<style>
			img.footlogo {
    max-width: 70%;
}
		</style>
		<section class="footer-top-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-widget">
							<a href="">
								<img src="{{ asset('uploads/company/') }}/{{ $company_information->logo }}" alt="White-Logo" class="footlogo">
							</a>
							<p>{{ $company_information->motto }}</p>
							<ul class="address">
								<li>
									<i class="fa fa-map-marker"></i>
									{{ $company_information->address }}
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<a href="tel:{{ $company_information->phone }}">{{ $company_information->phone }}</a>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<a href="mailto:{{ $company_information->email }}">{{ $company_information->email }}</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6">
						<div class="single-widget">
							<h3>Pages</h3>
							<ul class="links">
								<li>
									<a href="{{ url('/') }}">Home</a>
								</li>
								<li>
									<a href="{{ route('frontend.events') }}">Events</a>
								</li>
								<li>
									<a href="{{ route('frontend.about') }}">About Us</a>
								</li>
								<li>
									<a href="{{ route('frontend.partner') }}">Partners</a>
								</li>
								
								
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6">
						<div class="single-widget">
							<h3>Support</h3>
							<ul class="links">
							
								<li>
									<a href="{{ route('frontend.faq') }}">Faq's</a>
								</li>
								<li>
									<a href="{{ route('frontend.mission') }}">Our Mission</a>
								</li>
								<li>
									<a href="{{ route('frontend.course-finder') }}">Course Finder</a>
								</li>
								<li>
									<a href="{{ route('frontend.application-support') }}">Application Support</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-widget">
							<h3>Contact</h3>
							<ul class="links">
								<li>
									<a href="{{ route('frontend.contact') }}">Contact Us</a>
								</li>
									<li>
									<a href="{{ url('our-team') }}">Our Team</a>
								</li>
								<li>
									<a href="{{ url('/gallery') }}">Gallery</a>
								</li>
								<li>
									<a href="{{ route('frontend.blogs') }}">Blogs</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
        <footer class="footer-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div>
							<p>
                                Copyright <span>GECC</span> All Rights Reserved by <a href="#">Shovon</a>
                            </p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<ul class="social-icon">
							<li>
								<a href="{{ $company_information->facebook }}" target="_blank">
									<i class="fa-brands fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="{{ $company_information->twitter }}" target="_blank">
									<i class="fa-brands fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="{{ $company_information->linkedin }}" target="_blank">
									<i class="fa-brands fa-linkedin-in"></i>
								</a>
							</li>
							<li>
								<a href="{{ $company_information->googleplus }}" target="_blank">
									<i class="fa-brands fa-pinterest"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>