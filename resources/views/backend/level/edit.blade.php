@extends('layouts.backend')
@section('title', 'Level Edit')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Level Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Edit Level Settings
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
                        <h4 class="box-title">Edit Level Item</h4>
           
                    </div>
                    <form action="{{ route('admin.level.update', $level->id) }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="level_title" class="form-label">Level Title</label>
                                            <input type="text" name="title" id="level_title" value="{{ old('title', $level->title) }}"
                                                class="form-control" placeholder="Enter Level title">
                                                @error('title')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="total_students" class="form-label">Total Students</label>
                                            <input type="text" name="total_students" id="total_students" value="{{ old('total_students', $level->total_students) }}"
                                                class="form-control" placeholder="Enter Total Students">
                                                @error('total_students')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="course_duration" class="form-label">Course Duration</label>
                                            <input type="text" name="course_duration" id="course_duration" value="{{ old('course_duration', $level->course_duration) }}"
                                                class="form-control" placeholder="Enter Course Duration">
                                                @error('course_duration')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                         <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="course_credits" class="form-label">Course Credits</label>
                                            <input type="text" name="course_credits" id="course_credits" value="{{ old('course_credits', $level->course_credits) }}"
                                                class="form-control" placeholder="Enter Course Credits">
                                                @error('course_credits')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                        <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="total_semester" class="form-label">Total Semester</label>
                                            <input type="text" name="total_semester" id="total_semester" value="{{ old('total_semester', $level->total_semester) }}"
                                                class="form-control" placeholder="Enter Total Semester">
                                                @error('total_semester')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_description" class="form-label"> Description</label>
                                         		<textarea id="editor1" name="description" rows="10" cols="80">
                                                {{ old('description', $level->description) }}
                                            </textarea>
						                  
                                        </div>
                                    </div>
                                        <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_image" class="form-label">Image</label>
                                            <input type="file" name="image" id="blog_image"
                                                class="form-control">
                                                @error('blog_image')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('admin.level.index') }}"
                                    class="btn btn-danger">Cancel</a>
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

@endsection
