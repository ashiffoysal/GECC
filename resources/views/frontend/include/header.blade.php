	<style>
		.navbar-light .navbar-brand, .navbar-light .navbar-brand:hover {

    width: 20%;
}
	</style>
	<div class="peru-nav">
			<div class="navbar-area fixed-top">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="{{ url('/') }}" class="logo">
						<img src="{{ asset('uploads/company/') }}/{{ $company_information->logo }}" alt="Peru Logo"  >
					</a>
				</div>

				<!-- Menu For Desktop Device -->
				<div class="main-nav peru-nav-style">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container">
							<a class="navbar-brand" href="{{ url('/') }}">
								<img src="{{ asset('uploads/company/') }}/{{ $company_information->logo }}" alt="peru Logo">
							</a>
	
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="{{ url('/') }}" class="nav-link  active">Home</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">About GECC</a>
										<ul class="dropdown-menu dropdown-style">
											<li class="nav-item">
												<a href="{{ url('/about') }}" class="nav-link">About Us</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/events') }}" class="nav-link">Events</a>
											</li>
											
											<li class="nav-item">
												<a href="{{ url('/team') }}" class="nav-link">Our Team</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/gallery') }}" class="nav-link">Gallery</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/faqs') }}" class="nav-link">FAQs</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/mission') }}" class="nav-link">Our Mission</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/history') }}" class="nav-link">Our History</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/success') }}" class="nav-link">Our Success</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/want-to-study-abroad') }}" class="nav-link">Want to Study Abroad</a>
											</li>
											


										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">Study Aboard</a>
										<ul class="dropdown-menu dropdown-style">
											<li class="nav-item">
												<a href="{{ url('/study') }}" class="nav-link">Study Option</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/course-finder') }}" class="nav-link">Course Finder</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/step') }}" class="nav-link">Step By Step Guideline</a>
											</li>
											<li class="nav-item">
												<a href="{{ url('/free-counselling') }}" class="nav-link">Free Online Counselling</a>
											</li>
											
										</ul>
									</li>
									<li class="nav-item">
										<a href="{{ url('/blogs') }}" class="nav-link">Blogs</a>
										
									</li>
									<li class="nav-item">
										<a href="{{ url('/partners') }}" class="nav-link">Partners</a>
										
									</li>
									<li class="nav-item">
										<a href="{{ url('/contact') }}" class="nav-link">Contact</a>
									</li>
								</ul>
								<div class="others-option">
									<a href="tel:+{{ $company_information->phone }}" class="contact-number">
										<i class="fa fa-phone"></i> 
										{{ $company_information->phone }}
									</a>
									<a class="default-btn" href="{{ url('/contact') }}">
										Free Consultation
									</a>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>