@extends('layouts.backend')
@section('title', 'Blog Create')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Blog Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Create Blog Settings
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
                        <h4 class="box-title">Create Blog Item</h4>
           
                    </div>
                    <form action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_title" class="form-label">Blog Title</label>
                                            <input type="text" name="blog_title" id="blog_title" value="{{ old('blog_title') }}"
                                                class="form-control" placeholder="Enter Blog title">
                                                @error('blog_title')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_tags" class="form-label">Blog Tags</label>
                                            <input type="text" name="blog_tags" id="blog_tags" value="{{ old('blog_tags') }}"
                                                class="form-control" placeholder="Enter Blog tags">
                                                @error('blog_tags')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_category" class="form-label">Blog Category</label>
                                            <select name="blog_category" id="blog_category" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_description" class="form-label">Blog Description</label>
                                            <input type="text" name="blog_description" id="blog_description" value="{{ old('blog_description') }}"
                                                class="form-control" placeholder="Enter Blog description">
                                                @error('blog_description')
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
                                <button type="submit" class="btn btn-success pull-right">Submit</button>
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
