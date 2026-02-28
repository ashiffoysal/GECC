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
                <p>{!! Str::limit($course->description, 150) !!}</p>
                <a href="{{ route('frontend.course.apply', $course->id) }}" class="default-btn">Apply</a>
            </div>
        </div>
    </div>
@endforeach

<div class="col-12">
    {{ $allCourses->links('vendor.pagination.bootstrap-5') }}
</div>
