
@extends('layouts.backend')
@section('title', 'SEO Settings')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">SEO Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Update SEO Settings
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('admin.seo-settings.update') }}" method="post" enctype="multipart/form-data">
                <!-- /.box-header -->
               @csrf
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Update SEO Settings</h4>
                            </div>

                            <div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Meta Title</label>
                                                <input type="text" name="meta_title" id="name"
                                                    value="{{ $data->meta_title }}" class="form-control"
                                                    placeholder="Enter meta title">
                                                <input type="hidden" name="id" id="" value="{{ $data->id }}" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Meta Description</label>
                                                <input type="text" name="meta_description" id="email"
                                                    value="{{ $data->meta_description }}" class="form-control"
                                                    placeholder="Enter meta description">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="phone" class="form-label">Meta Keywords</label>
                                                <input type="text" name="meta_keywords" id="phone"
                                                    value="{{ $data->meta_keywords }}" class="form-control"
                                                    placeholder="Enter meta keywords">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="fax" class="form-label">Meta Author</label>
                                                <input type="text" name="meta_author" id="meta_author" value="{{ $data->meta_author }}"
                                                    class="form-control" placeholder="Enter meta author">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <label for="address" class="form-label">Meta Tags</label>
                                                <textarea type="text" name="meta_tags" rows="4" class="form-control" placeholder="Enter meta tags"
                                                    id="meta_tags">{{ $data->meta_tags }}</textarea>
                                            </div>
                                        </div>
                                            

                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="phone" class="form-label">Google Analytics</label>
                                                <input type="text" name="google_analytics" id="google_analytics"
                                                    value="{{ $data->google_analytics }}" class="form-control"
                                                    placeholder="Enter google analytics">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="fax" class="form-label">Google Verification</label>
                                                <input type="text" name="google_verification" id="google_verification" value="{{ $data->google_verification }}"
                                                    class="form-control" placeholder="Enter google verification">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="fax" class="form-label">Faceboook Verification</label>
                                                <input type="text" name="facebook_verification" id="facebook_verification" value="{{ $data->facebook_verification }}"
                                                    class="form-control" placeholder="Enter facebook verification">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="fax" class="form-label">Bing Verification</label>
                                                <input type="text" name="bing_verification" id="bing_verification" value="{{ $data->bing_verification }}"
                                                    class="form-control" placeholder="Enter bing verification">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <a href="{{ route('admin') }}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </form>
        </section>
    </div>
</div>
@endsection
