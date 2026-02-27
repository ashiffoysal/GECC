@extends('layouts.frontend')
@section('title', 'Studey Options Details')
@section('meta_description', 'Learn about financial aid options and resources available to support your education and career goals.')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>{{ $level->title }}</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>{{ $level->title }}</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Details Area -->
        <section class="shop-details-area ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
						<div class="product-details-image">
							<img src="{{ asset('images/'.$level->image) }}" alt="Image">
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="product-details-desc">
							<h3>{{ $level->title }}</h3>



							<p>{!! Str::limit($level->description, 150) !!}</p>

							<div class="product-add-to-cart">
								
								
							</div>

							<div class="buy-checkbox-btn">
								<div class="item">
									<a href="#" class="default-btn">Book Course!</a>
								</div>
							</div>

							
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="tab products-details-tab">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<ul class="tabs">
										<li>
											<a href="#">
											<div class="dot"></div> Description
										</a>
									</li>
									<li>
										<a href="#">
											<div class="dot"></div> Additional information
										</a>
									</li>
									
									</ul>
								</div>

								<div class="col-lg-12 col-md-12">
									<div class="tab_content">
										<div class="tabs_item">
											<div class="products-details-tab-content">
												<p>{!! $level->description !!}</p>
											</div>
										</div>

										<div class="tabs_item">
											<div class="products-details-tab-content">
												<ul class="additional-information">
													<li><span>Total Students:</span> {{ $level->total_students }}</li>
													<li><span>Course Duration:</span> {{ $level->course_duration }}</li>
													<li><span>Course Credits:</span> {{ $level->course_credits }}</li>
													<li><span>Total Semester:</span> {{ $level->total_semester }}</li>
													
												</ul>
											</div>
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Details Area -->
		
		<!-- Start Footer Top Area -->
		<section class="footer-top-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-widget">
							<a href="index.html">
								<img src="assets/img/white-logo.png" alt="White-Logo">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt aliqua. Quis ipsum suspendisse ultrices gravida.</p>
							<ul class="address">
								<li>
									<i class="fa fa-map-marker"></i>
									32 st Kilda Road, Melbourne VIC, 3004 Australia
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<a href="tel:+123(456)123">+123(456)123</a>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<a href="mailto:hello@peru.com">hello@peru.com</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6">
						<div class="single-widget">
							<h3>Links</h3>
							<ul class="links">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="service.html">Service</a>
								</li>
								<li>
									<a href="about.html">About Us</a>
								</li>
								<li>
									<a href="testimonial.html">Testimonial</a>
								</li>
								<li>
									<a href="blog.html">Blog</a>
								</li>
								<li>
									<a href="contact.html">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6">
						<div class="single-widget">
							<h3>Support</h3>
							<ul class="links">
								<li>
									<a href="contact.html">Contact Us</a>
								</li>
								<li>
									<a href="service-details.html">Submit To Ticket</a>
								</li>
								<li>
									<a href="service-details.html">Visit Knowledge Base</a>
								</li>
								<li>
									<a href="service-details.html">Refund Policy</a>
								</li>
								<li>
									<a href="service-details.html">Professional Service</a>
								</li>
								<li>
									<a href="service-details.html">Refund Policy</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-widget">
							<h3>Instagram</h3>
							<ul class="instragram">
								<li>
									<a href="https://www.instagram.com/accounts/login/" target="_blank">
										<img src="assets/img/inst/1.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/accounts/login/" target="_blank">
										<img src="assets/img/inst/2.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/accounts/login/" target="_blank">
										<img src="assets/img/inst/3.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/accounts/login/" target="_blank">
										<img src="assets/img/inst/4.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/accounts/login/" target="_blank">
										<img src="assets/img/inst/5.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/accounts/login/" target="_blank">
										<img src="assets/img/inst/6.jpg" alt="">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Footer Top Area -->
@endsection