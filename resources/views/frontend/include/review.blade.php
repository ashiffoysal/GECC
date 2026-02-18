<section class="client-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Press Coverage</span>
					<h2>What Our Client Say</h2>
				</div>
				@php
					$allReview=App\Models\Testimonial::where('is_active',1)->get();
				@endphp
				<div class="row align-items-center client-bg">
					<div class="col-lg-6 p-0">
						<div class="client-img">
							<img src="{{ asset('frontend') }}/assets/img/client-img/client-img.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-6 p-0">
						<div class="client-details-wrap owl-carousel owl-theme">
							
							@foreach ($allReview as $review)
							<div class="client-details">
								<img src="{{ asset('uploads/testimonial/'.$review->image) }}" alt="">
								<h3>{{ $review->name }}</h3>
								<span>{{ $review->designation }}</span>
								<i class="flaticon-quote"></i>
								<p>{{ $review->description }}</p>
								<ul>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
								</ul>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>