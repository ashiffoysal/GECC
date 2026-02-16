<section class="questions-area two pb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="questions-bg-area">
							<div class="section-title">
								<span>FAQ</span>
								<h2>Frequently Asked Questions</h2>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<div class="faq-accordion">
										<ul class="accordion">
											@php
												$allFaqs=App\Models\Faq::where('is_active',1)->where('is_deleted',1)->get();
											@endphp
											@foreach ($allFaqs as $key => $faq)
											<li class="accordion-item">
												<a class="accordion-title @if($key == 0) active @endif" href="javascript:void({{ $faq->id }})">
													<i class="fa fa-arrow-right"></i>
													{{ $faq->faq_question }}
												</a>
												<p class="accordion-content @if($key == 0) show @endif ">{{ $faq->faq_answer }}</p>
											</li>
											@endforeach
										
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="questions">
							<div class="contact-form">
								{{-- <form id="contactForm">
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label>Name</label>
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
	
										<div class="col-lg-12">
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
	
										<div class="col-lg-12">
											<div class="form-group">
												<label>Website</label>
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
												<div class="help-block with-errors"></div>
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label>Message</label>
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
								</form> --}}
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
					</div>
				</div>
			</div>
		</section>