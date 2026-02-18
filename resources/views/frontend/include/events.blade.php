 <section class="team-area team-area-two pb-10" style="padding-top:50px;text-align: center !important;">
     <div class="container">
         <div class="section-title"  style="text-align: center !important;">
             <span>Our Events</span>
             <h2>Your Trusted Partner for Global Education Success</h2>
         </div>
     </div>
 </section>
<section class="financial-area owl-carousel owl-theme">
			<div class="container-fluid p-0">
           
				<div class="row m-0">
                    @php
                        $allEvents=App\Models\Event::where('is_active',1)->orderBy('id','DESC')->limit(2)->get();
                    @endphp
                    @foreach ($allEvents as $event)
					<div class="col-lg-3 col-sm-6 col-md-6 p-0">
						<div class="financial-image bg-1" style="background-image: url({{ asset($event->image) }})">
							<img src="{{ asset($event->image) }}" alt="image">
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 col-md-6 p-0">
						<div class="financial-text">
							<div class="icon">
								<i class="flaticon-development"></i>
							</div>
							<p>{!! Str::limit($event->description, 200) !!}</p>

							<a href="{{ route('frontend.event-detail', $event->id) }}" class="default-btn">Learn More <span></span></a>

							<div class="shape">
								<img src="{{ asset('frontend') }}/assets/img/shape/2.png" alt="image">
							</div>
						</div>
					</div>
                     @endforeach
					
				</div>
			</div>
		</section>