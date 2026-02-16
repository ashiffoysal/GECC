@extends('layouts.backend')
@section('title', 'Testimonial Create')
@section('content')
    <div class="content-wrapper" style="min-height: 405px;">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">Testimonial Settings</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Create Testimonial Settings
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <section class="content" data-select2-id="select2-data-11-prc6">
                <div class="row">
                    <div class="col-lg-8 col-12" data-select2-id="select2-data-10-a2dv">
                        <div class="box" data-select2-id="select2-data-9-1wo6">
                            <div class="box-header with-border">
                                <h4 class="box-title">Create Testimonial Item</h4>

                            </div>
                            <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="post"
                                enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">

                                @csrf
                                <div data-select2-id="select2-data-7-06ld">
                                    <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                        <div class="row" data-select2-id="select2-data-5-na3v">
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" name="name" id="name" value="{{ $testimonial->name }}"
                                                        class="form-control" placeholder="Enter testimonial name">
                                                    @error('name')
                                                        <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label for="designation" class="form-label">Testimonial
                                                        Designation</label>
                                                    <input type="text" name="designation" id="designation" value="{{ $testimonial->designation }}"
                                                        class="form-control" placeholder="Enter testimonial designation">
                                                    @error('designation')
                                                        <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="box-body">
                                                    <div class="demo-radio-button">
                                                        <input name="is_video" type="radio" id="radio_1" value="0" {{ $testimonial->is_video == 0 ? 'checked' : '' }}>
                                                        <label for="radio_1">Is Text Review</label>

                                                        <input name="is_video" type="radio" id="radio_2" value="1" {{ $testimonial->is_video == 1 ? 'checked' : '' }}>
                                                        <label for="radio_2">Is Video Review</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Review Text Section -->
                                            <div class="col-lg-12 col-12" id="review_section" style="{{ $testimonial->is_video == 1 ? 'display: none;' : '' }}">
                                                <div class="form-group">
                                                    <label for="details" class="form-label">Testimonial Details</label>
                                                    <input type="text" name="review_text" id="details"
                                                        class="form-control" placeholder="Enter testimonial details" value="{{ $testimonial->review_text }}">
                                                    @error('review_text')
                                                        <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Video URL Section -->
                                            <div class="col-lg-12 col-12" id="video_section" style="{{ $testimonial->is_video == 0 ? 'display: none;' : '' }}">
                                                <div class="form-group">
                                                    <label for="video_url" class="form-label">Video URL</label>
                                                    <input type="text" name="video_url" id="video_url" class="form-control" value="{{ $testimonial->video_url }}">
                                                    @error('video_url')
                                                        <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="blog_image">Image</label>
                                                    <input type="file" accept="image/*" name="image"
                                                        id="blog_image" class="form-control">
                                                    @error('image')
                                                        <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <a href="{{ route('admin.testimonial.index') }}" class="btn btn-danger">Cancel</a>
                                        <button type="submit" class="btn btn-success pull-right">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
<script>

    const textRadio = document.getElementById('radio_1');
    const videoRadio = document.getElementById('radio_2');
    const videoSection = document.getElementById('video_section');
    const reviewSection = document.getElementById('review_section');

    function toggleSections() {
        if (videoRadio.checked) {
            videoSection.style.display = 'block';
            reviewSection.style.display = 'none';
        } else {
            videoSection.style.display = 'none';
            reviewSection.style.display = 'block';
        }
    }

    // Run on change
    textRadio.addEventListener('change', toggleSections);
    videoRadio.addEventListener('change', toggleSections);

    // Run on page load (important for edit page)
    window.onload = toggleSections;
</script>

@endsection
