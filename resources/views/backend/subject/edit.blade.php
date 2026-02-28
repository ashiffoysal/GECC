@extends('layouts.backend')
@section('title', 'Subject Edit')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Subject Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Edit Subject Settings
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
                        <h4 class="box-title">Create Subject </h4>
           
                    </div>
                    <form action="{{ route('admin.subject.update', $data->id) }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Subject Name</label>
                                            <input type="text" name="name" id="name" value="{{ $data->name }}"
                                                class="form-control" placeholder="Enter subject name">
                                                @error('name')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="location" class="form-label">University </label>
                                            <select name="university" id="university" class="form-control">
                                                <option value="">Select University</option>
                                                @foreach($universities as $university)
                                                    <option value="{{ $university->id }}" {{ $data->university == $university->id ? 'selected' : '' }}>{{ $university->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="level" class="form-label">Level</label>
                                            <select name="level" id="level" class="form-control">
                                                <option value="">Select Level</option>
                                                @foreach($levels as $level)
                                                    <option value="{{ $level->id }}" {{ $data->Level == $level->id ? 'selected' : '' }}>{{ $level->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('level')
                                            <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                     <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="method_of_study" class="form-label">Method Of Study</label>
                                            <select name="method_of_study" id="method_of_study" class="form-control">
                                                <option value="">Select Method Of Study</option>
                                               
                                                    <option value="full_time" {{ $data->method_of_study == 'full_time' ? 'selected' : '' }}>Full Time</option>
                                                    <option value="part_time" {{ $data->method_of_study == 'part_time' ? 'selected' : '' }}>Part Time</option>
                                                    <option value="online" {{ $data->method_of_study == 'online' ? 'selected' : '' }}>Online</option>
                                            
                                            </select>
                                            @error('method_of_study')
                                            <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="description" class="form-label">Subject Description</label>
                                         		<textarea id="editor1" name="description" rows="10" cols="80">
												{{ $data->description }}
						                    </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="waiver" class="form-label">Subject Waiver</label>
                                            <input type="text" name="waiver" id="waiver" value="{{ $data->Waiver }}"
                                                class="form-control" placeholder="Enter subject waiver">
                                                @error('waiver')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="scholarship" class="form-label">Subject Scholarship</label>
                                            <input type="text" name="scholarship" id="scholarship" value="{{ $data->Scholarship }}"
                                                class="form-control" placeholder="Enter subject scholarship">
                                                @error('scholarship')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="course_duration" class="form-label">Course Duration</label>
                                            <input type="text" name="course_duration" id="course_duration" value="{{ $data->Course_Duration }}"
                                                class="form-control" placeholder="Enter course duration">
                                                @error('course_duration')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                       <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="course_credits" class="form-label">Course Credits</label>
                                            <input type="text" name="course_credits" id="course_credits" value="{{ $data->Course_Credits }}"
                                                class="form-control" placeholder="Enter course credits">
                                                @error('course_credits')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="total_semester" class="form-label">Total Semester</label>
                                            <input type="text" name="total_semester" id="total_semester" value="{{ $data->Total_Semester }}"
                                                class="form-control" placeholder="Enter total semester">
                                                @error('total_semester')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="total_students" class="form-label">Total Students</label>
                                            <input type="text" name="total_students" id="total_students" value="{{ $data->Total_Students }}"
                                                class="form-control" placeholder="Enter total students">
                                                @error('total_students')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="blog_image">Image</label>
                                            <input type="file" accept="image/*" name="image" id="blog_image"
                                                class="form-control">
                                                @error('image')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('admin.subject.index') }}"
                                    class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-success pull-right">update</button>
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
