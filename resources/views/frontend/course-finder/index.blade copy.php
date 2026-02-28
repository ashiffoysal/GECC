@extends('layouts.frontend')
@section('title', 'Course Finder')
@section('meta_description', 'Learn')
@section('content')
    <style>
        .course-search-wrapper {
            background: #f3f6f8;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
            border: 6px solid #9acb6b;
        }

        .course-search-wrapper label {
            font-weight: 600;
            color: #0d4f80;
            margin-bottom: 6px;
        }

        .course-search-wrapper .form-select {
            height: 48px;
            border-radius: 10px;
            border: 1px solid #dcdcdc;
            transition: all 0.3s ease;
        }

        .course-search-wrapper .form-select:focus {
            border-color: #0d4f80;
            box-shadow: 0 0 0 0.2rem rgba(13, 79, 128, 0.15);
        }

        .search-btn {
            height: 48px;
            border-radius: 12px;
            background: linear-gradient(135deg, #0d4f80, #1673b1);
            color: #fff;
            font-weight: 600;
            letter-spacing: 0.5px;
            border: none;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(13, 79, 128, 0.25);
        }
            .page-title-area {
        padding-top: 120px;
        padding-bottom: 50px;
    }
    </style>

    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-2">
        <div class="container">
            <div class="page-title-content">
                <h2>Course Finder</h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Course Finder</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 widget-area">
                    <div class="container my-5">
                        <div class="course-search-wrapper">
                            <form class="row g-4 align-items-end">

                                <div class="col-md-4">

                                    <select class="form-control">
                                        <option selected>Level Select</option>
                                        @foreach ($allLevels as $level)
                                            <option value="{{ $level->id }}">{{ $level->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4">

                                    <select class="form-control">
                                        <option selected>Method of Study</option>
                                        <option value="full_time">Full Time</option>
                                        <option value="part_time">Part Time</option>
                                        <option value="online">Online</option>
                                    </select>
                                </div>

                                <div class="col-md-4">

                                    <select class="form-control">
                                        <option selected>Start Date</option>
                                        <option value="january">January 2026</option>
                                        <option value="may">May 2026</option>
                                        <option value="september">September 2026</option>
                                    </select>
                                </div>

                                <div class="col-md-4">

                                    <select class="form-control">
                                        <option selected>Subjects</option>
                                        @foreach ($allSubjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                              
                                     
                                    </select>
                                </div>

                                <div class="col-md-4">

                                    <select class="form-control">
                                        <option selected>University</option>
                                        @foreach ($allUniversities as $university)
                                            <option value="{{ $university->id }}">{{ $university->name }}</option>
                                        @endforeach
                                    
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="default-btn">
                                        SEARCH NOW
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="row">
                            @foreach ($allCourses as $course)
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-blog-post">

                                        <div class="post-content">
                                            <div class="date">
                                                <i class="fa fa-calendar"></i>
                                                <span>{{ $course->alluniversity->name }}</span>

                                            </div>
                                            <h3>
                                                <a href="">{{ $course->name }}</a>
                                            </h3>
                                            <p>{!! Str::limit($course->description, 50) !!}</p>
                                            <a href="{{ route('frontend.course.apply', $course->id) }}" class="default-btn">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="col-lg-12">
                                  {{ $allCourses->links('vendor.pagination.bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">


                        <section class="widget widget_categories">
                            <h3 class="widget-title">University</h3>

                            <ul>

                                @foreach($allUniversities as $university)
    
                                <li>
                                
                                    <a href="blog-details.html">{{ $university->name }}  <span>({{ $university->subjects_count }})</span></a>
                                </li>
                                @endforeach

                                
                            </ul>
                        </section>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->

@endsection
