@extends('layouts.frontend')
@section('title', 'Contact Us')
@section('meta_description', 'Learn')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact Us</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Box Area -->
		<section class="contact-box pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-map-marker"></i>
							<div class="content-title">
								<h3>Address</h3>
								<p>{{ $company_information->address }}</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-envelope"></i>
							<div class="content-title">
								<h3>Email</h3>
								<a href="mailto:{{ $company_information->email }}">{{ $company_information->email }}</a>
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-contact-box">
							<i class="fa fa-phone"></i>
							<div class="content-title">
								<h3>Phone</h3>
								<a href="tel:+{{ $company_information->phone }}">{{ $company_information->phone }}</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Box Area -->
		<section class="contact-area pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Drop us a message for any query</h2>
					<p>If you have an idea, we would love to hear about it.</p>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="contact-form">
							<form id="" accept="{{ url('/contact') }}" method="post">
								<div class="row">
									@csrf
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12">
										<button type="submit" class="default-btn btn-two">
											<span class="label">Send Message</span>
											<i class='bx bx-plus'></i>
										</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="map">
							{!! $company_information->maps !!}
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection