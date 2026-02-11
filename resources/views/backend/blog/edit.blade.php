@extends('layouts.backend')
@section('title', 'Blog Edit')
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
                                <li class="breadcrumb-item active" aria-current="page">Edit Blog Settings
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
                    <form action="{{ route('admin.blog.update', $blog->id) }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_title" class="form-label">Blog Title</label>
                                            <input type="text" name="blog_title" id="blog_title" value="{{ $blog->title }}"
                                                class="form-control" placeholder="Enter Blog title">
                                                @error('blog_title')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_tags" class="form-label">Blog Tags</label>
                                            <input type="text" name="blog_tags" id="blog_tags" value="{{ $blog->tags }}"
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
                                                    <option value="{{ $category->id }}" {{ $blog->category == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_description" class="form-label">Blog Description</label>
                                         		<textarea id="editor1" name="blog_description" rows="10" cols="80">
													{{ $blog->description }}
						                    </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="blog_image" class="form-label">Blog Image</label>
                                            <input type="file" name="blog_image" id="blog_image" value="{{ old('blog_image') }}"
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
