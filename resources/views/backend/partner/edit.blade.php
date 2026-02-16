@extends('layouts.backend')
@section('title', 'Partner Edit')
@section('content')
    <div class="content-wrapper" style="min-height: 405px;">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">Partner Settings</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Edit Partner Settings
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
                                <h4 class="box-title">Edit Partner Item</h4>

                            </div>
                            <form action="{{ route('admin.partner.update', $partner->id) }}" method="post" enctype="multipart/form-data"
                                data-select2-id="select2-data-8-mhk5">

                                @csrf
                                <div data-select2-id="select2-data-7-06ld">
                                    <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                        <div class="row" data-select2-id="select2-data-5-na3v">
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label for="title" class="form-label">Partner Name</label>
                                                    <input type="text" name="title" id="title" value="{{ old('title', $partner->title) }}"
                                                        class="form-control" placeholder="Enter partner item name">
                                                    @error('title')
                                                        <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label for="details" class="form-label">Partner
                                                        Description</label>
                                                    <textarea id="editor1" name="details" rows="10" cols="80">
                                                        {{ old('details', $partner->details) }}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label for="site_link" class="form-label">Partner Site Link</label>
                                                    <input type="text" name="site_link" id="site_link" value=" {{ old('site_link', $partner->site_link) }}"
                                                        class="form-control" placeholder="Enter partner site link">
                                                    @error('site_link')
                                                        <div class="alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="blog_image">Image/logo</label>
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
                                        <a href="{{ route('admin.partner.index') }}" class="btn btn-danger">Cancel</a>
                                        <button type="submit" class="btn btn-success pull-right">UPDATE</button>
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
