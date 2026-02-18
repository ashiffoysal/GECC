@extends('layouts.backend')
@section('title', 'Mission Edit')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Mission Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Edit Mission Settings
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    <section class="content" data-select2-id="select2-data-11-prc6">
        <div class="row">
            <div class="col-lg-6 col-6" data-select2-id="select2-data-10-a2dv">
                <div class="box" data-select2-id="select2-data-9-1wo6">
                    <div class="box-header with-border">
                        <h4 class="box-title">Mission, Vision & Values of GECC Update</h4>
           
                    </div>
                    <form action="{{ route('admin.setting-mission.update') }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="mission_title" class="form-label">Mission Page Title</label>
                                            <input type="text" name="title" id="mission_title" value="{{ $mission->title }}"
                                                class="form-control" placeholder="Enter Mission title">

                                            <input type="hidden" name="id" id="mission_id" value="{{ $mission->id }}"
                                                class="form-control" placeholder="Enter Mission title">

                                                @error('mission_title')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                              
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="mission_description" class="form-label">Mission Description</label>
                                         		<textarea id="editor1" name="details" rows="10" cols="80">
													{{ $mission->details }}
						                    </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="mission_image" class="form-label">Mission Image</label>
                                            <input type="file" name="image" id="mission_image" value="{{ old('mission_image') }}"
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
                                <a href="{{ route('admin.blog.index') }}"
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
