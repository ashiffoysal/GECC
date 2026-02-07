<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
        <!-- Bootstrap Min CSS --> 
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
        <!-- Owl Theme Default Min CSS --> 
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.theme.default.min.css">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
        <!-- Animate Min CSS --> 
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">
        <!-- Flaticon CSS --> 
		<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css">
        <!-- Nice Select Min CSS --> 
		<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nice-select.min.css">
        <!-- Font Awesome Min CSS --> 
		<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome.min.css">
        <!-- Imagelightbox Min CSS --> 
		<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/imagelightbox.min.css">
        <!-- Meanmenu Min CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
		<!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/img/favicon.png">
        <!-- Title -->
        <title>Peru - Consulting HTML Template</title>
    </head>
    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
        <!-- End Preloader Area -->
		<!-- Start Navbar Area -->
        @include('frontend.include.header')
		<!-- End Navbar Area -->
		@yield('content')
		<!-- Start Footer Top Area -->
        @include('frontend.include.footer')
		<!-- End Footer Bottom Area -->
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="fa fa-angle-double-up"></i>
			<i class="fa fa-angle-double-up"></i>
		</div>
		<!-- End Go Top Area -->        
        <!-- Jquery Min JS -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu Min JS -->
		<script src="{{ asset('frontend') }}/assets/js/meanmenu.min.js"></script>
        <!-- Wow Min JS -->
        <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
        <!-- Owl Carousel Min JS -->
		<script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
        <!-- Imagelightbox Min JS -->
		<script src="{{ asset('frontend') }}/assets/js/imagelightbox.min.js"></script>
        <!-- Mixitup Min JS -->
		<script src="{{ asset('frontend') }}/assets/js/mixitup.min.js"></script>
		<!-- Nice Select Min JS -->
		<script src="{{ asset('frontend') }}/assets/js/nice-select.min.js"></script>
		<!-- Form Validator Min JS -->
		<script src="{{ asset('frontend') }}/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="{{ asset('frontend') }}/assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{ asset('frontend') }}/assets/js/ajaxchimp.min.js"></script>
        <!-- Custom JS -->
        <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>
    </body>
</html>