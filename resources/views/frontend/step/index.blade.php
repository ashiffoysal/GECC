  @extends('layouts.frontend')
  @section('title', 'Step by step process')
  @section('meta_description', 'Learn about financial aid options and resources available to support your education and
      career goals.')
  @section('content')
      <!-- Start Page Title Area -->
      <div class="page-title-area item-bg-1" style="margin-bottom: 50px;">
          <div class="container">
              <div class="page-title-content">
                  <h2>Step by step process to study abroad</h2>
                  <ul>
                      <li>
                          <a href="{{ url('/') }}">
                              Home
                              <i class="fa fa-chevron-right"></i>
                          </a>
                      </li>
                      <li>Step by step process</li>
                  </ul>
              </div>
          </div>
      </div>
      <section class="processing-areac ptb-100">
          <div class="container">
              <div class="section-title">
                  <span>Steps For Processing</span>
                  <h2>Take Some Easy Steps For Processing</h2>
              </div>
              <div class="row">
                  <div class="col-lg-12 col-sm-12 icon-color">
                      <div class="single-processing">
                          <span>1</span>
                          <div class="processing-icon">
                              <i class="fa fa-phone"></i>
                          </div>
                          <h3>Expert Consultation & Guidance</h3>
                          <p>At GECC (Global Education and Career Consultants), our experienced UK and European graduate consultants provide professional guidance for students who wish to study in the UK.
We work closely with trusted immigration visa specialists and authorised UK representatives to solve student queries and provide the right direction.</p>
                      </div>
                  </div>
                  <div class="col-lg-12 col-sm-12 icon-color">
                      <div class="single-processing">
                          <span>2</span>
                          <div class="processing-icon">
                              <i class="flaticon-interview"></i>
                          </div>
                          <h3>Student Profiling & Free Counselling</h3>
                          <p>We offer free counselling and personalised student profiling to understand each student’s academic background and career goals.</p>
                      </div>
                  </div>
                  <div class="col-lg-12 col-sm-12 icon-color">
                      <div class="single-processing">
                          <span>3</span>
                          <div class="processing-icon">
                              <i class="flaticon-target"></i>
                          </div>
                          <h3>University Admission & Visa Support</h3>
                          <p>GECC provides complete support from admission to visa approval.
We help students apply to the right university, in the right country, at the right time — ensuring a smooth and stress-free process.</p>
                      </div>
                  </div>
                  <div class="col-lg-12 col-sm-12 icon-color">
                      <div class="single-processing">
                          <span>4</span>
                          <div class="processing-icon">
                              <i class="flaticon-money"></i>
                          </div>
                          <h3>Achieve Your Dream with GECC UK</h3>
                          <p>GECC UK (Global Education and Career Consultants) is committed to helping ambitious students achieve their study abroad dreams.
As a UK-based company, we provide trusted student recruitment services with affordable tuition guidance and professional support throughout the journey.</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
         @include('frontend.include.partner')
         @include('frontend.include.team')
         @include('frontend.include.review')
  @endsection
