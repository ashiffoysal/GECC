@extends('layouts.frontend')
@section('title', 'Course Finder')
@section('meta_description', 'Learn')
@section('content')
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

   <div class="container mt-5 mb-5">

    <!-- 🔍 Search Form -->
    <form id="courseSearchForm" class="row g-4 align-items-end">

        <div class="col-md-4">
            <select name="level_id" class="form-control">
                <option value="">Level Select</option>
                @foreach ($allLevels as $level)
                    <option value="{{ $level->id }}">{{ $level->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <select name="study_method" class="form-control">
                <option value="">Method of Study</option>
                <option value="full_time">Full Time</option>
                <option value="part_time">Part Time</option>
                <option value="online">Online</option>
            </select>
        </div>

        <div class="col-md-4">
            <select name="start_date" class="form-control">
                <option value="">Start Date</option>
                <option value="january">January 2026</option>
                <option value="may">May 2026</option>
                <option value="september">September 2026</option>
            </select>
        </div>

        <div class="col-md-4">
            <select name="subject_id" class="form-control">
                <option value="">Subjects</option>
                @foreach ($allSubjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <select name="university_id" class="form-control">
                <option value="">University</option>
                @foreach ($allUniversities as $university)
                    <option value="{{ $university->id }}">{{ $university->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <button type="submit" class="default-btn">SEARCH NOW</button>
        </div>

    </form>

    <hr>

    <!-- 📚 Course Result -->
    <div class="row" id="courseResult">
        @include('frontend.course-finder.partials.course_list')
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {

    // Search Submit
    $('#courseSearchForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: "{{ route('course.search') }}",
            type: "GET",
            data: $(this).serialize(),
            success: function(data){
                $('#courseResult').html(data);
            }
        });
    });

    // Pagination
    $(document).on('click', '.pagination a', function(e){
        e.preventDefault();

        let url = $(this).attr('href');

        $.ajax({
            url: url,
            success: function(data){
                $('#courseResult').html(data);
            }
        });
    });

});
</script>

@endsection
