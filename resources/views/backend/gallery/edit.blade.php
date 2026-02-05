@extends('layouts.backend')
@section('title', 'Gallery Edit')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Gallery Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Edit Gallery Settings
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
                        <h4 class="box-title">Edit Gallery Item</h4>
           
                    </div>
                    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="title" class="form-label">Gallery Item Name</label>
                                            <input type="text" name="title" id="title" value="{{ $gallery->title }}"
                                                class="form-control" placeholder="Enter gallery item name">
                                                @error('title')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                       
                                            <div class="form-group">
                                                <label class="form-label" for="image">Image</label>
                                                <input type="file" name="image" id="image" value="{{ $gallery->image }}"
                                                    class="form-control" placeholder="Enter image">
                                                @error('image')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            @if($gallery->image)
                                            <div class="form-group">
                                                <label class="form-label">Preview</label>
                                                <img src="{{ asset('uploads/gallery/'.$gallery->image) }}" alt="Gallery Image" class="img-fluid" style="max-width: 300px;">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('admin.team.index') }}"
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
