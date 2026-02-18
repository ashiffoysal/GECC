@extends('layouts.frontend')
@section('title', 'Want to Study Abroad')
@section('meta_description', 'Learn')
@section('content')
		<!-- Start Page Title Area -->
		<div class="page-title-area item-bg-1" style="margin-bottom: 50px;">
			<div class="container">
				<div class="page-title-content">
					<h2>Want to Study Abroad</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>Want to Study Abroad</li>
					</ul>
				</div>
			</div>
		</div>
	<section class="contact-area pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Drop us a message for any query</h2>
					<p>If you have an idea, we would love to hear about it.</p>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="contact-form">
							<form accept="{{ route('frontend.want-to-study-abroad.submit') }}" method="post">
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
                                            <select name="country" class="form-control">
                                                <option value="">Select Country</option>
                                                <option value="USA">USA</option>
                                                <option value="UK">UK</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Australia">Australia</option>
											</select>
											{{-- <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject"> --}}
											<div class="help-block with-errors"></div>
										</div>
									</div>


                                    <div class="col-lg-12 mt-5">
										<div class="form-group">
											<input type="text" name="remarks" id="remarks" required data-error="Please enter your remarks" class="form-control" placeholder="Your Remarks">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="submit" class="default-btn btn-two">
											<span class="label">Submit form</span>
											<i class='bx bx-plus'></i>
										</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</form>
						</div>
					</div>

				
				</div>
			</div>
		</section>

@endsection