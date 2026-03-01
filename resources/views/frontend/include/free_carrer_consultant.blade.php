	<section class="best-services-area ptb-100">
			<div class="container">
				<div class="row">
                    @php
                        $career=App\Models\FreeCareerConsultant::first();
                    @endphp
					<div class="col-lg-12">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
								<div class="row align-items-center">
									<div class="col-lg-4">
										<div class="best-service-img">
											<img src="{{ asset($career->image) }}" alt="Service">
										</div>
									</div>

									<div class="col-lg-8">
										<div class="best-service-area">
											<h3>{{ $career->title }}</h3>
											<p>{!! Str::limit($career->description, 200) !!}</p>
											<ul>
												<li>
													<i class="flaticon-check-mark"></i>
													Discuss your academic background and future goals
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													Get guidance on entry requirements and application procedures
												</li>
												<li>
													<i class="flaticon-check-mark"></i>
													Ask any questions about studying abroad
												</li>
											</ul>
											<a class="default-btn" href="{{ url('free-career-consultant') }}">Discover More</a>
										</div>
									</div>
								</div>
							</div>

						
						</div>
					</div>
				</div>
				
			</div>
		</section>