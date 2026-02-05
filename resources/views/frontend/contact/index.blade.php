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
								<p>32 st Kilda Road, Melbourne <br> VIC, 3004 Australia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-envelope"></i>
							<div class="content-title">
								<h3>Email</h3>
								<a href="mailto:hello@peru.com">hello@peru.com</a>
								<a href="mailto:info@peru.com">info@peru.com</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-contact-box">
							<i class="fa fa-phone"></i>
							<div class="content-title">
								<h3>Phone</h3>
								<a href="tel:+123(456)123">+123(456)123</a>
								<a href="tel:+123(456)124">+123(456)124</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Box Area -->

@endsection