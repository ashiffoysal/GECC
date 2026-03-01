 <section class="team-area team-area-two pb-10" style="padding-top:50px;text-align: center !important;">
     <div class="container">
         <div class="section-title"  style="text-align: center !important;">
             <span>Our Partner</span>
             <h2>Your Trusted Partner for Global Education Success</h2>
         </div>

         <div class="partner-area pt-10">
             <div class="container">
                 <div class="partner-wrap owl-carousel owl-theme">
                     @php
                         $allPartner = App\Models\Partner::where('is_active', 1)->get();
                     @endphp
                     @foreach ($allPartner as $partner)
                         <div class="single-logo">
                             <a href="{{ route('frontend.partner.details', $partner->id) }}" target="_blank">
                                 <img src="{{ asset($partner->image) }}" alt="Partner">
                             </a>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>

 </section>
