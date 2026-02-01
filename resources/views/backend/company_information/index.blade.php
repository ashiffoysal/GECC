
@extends('layouts.backend')
@section('title', 'Company Information')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Site Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#"><i class="mdi mdi-home-outline"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Update Site Settings
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('admin.site-settings.update') }}" method="post" enctype="multipart/form-data">
                <!-- /.box-header -->
               @csrf
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Update Site Settings</h4>
                            </div>

                            <div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Company Name</label>
                                                <input type="text" name="company_name" id="name"
                                                    value="{{ $data->company_name }}" class="form-control"
                                                    placeholder="Enter company name">
                                                <input type="hidden" name="id" id="" value="{{ $data->id }}" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Company Email</label>
                                                <input type="email" name="email" id="email"
                                                    value="{{ $data->email }}" class="form-control"
                                                    placeholder="Enter company email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="phone" class="form-label">Company Phone</label>
                                                <input type="text" name="phone" id="phone"
                                                    value="{{ $data->phone }}" class="form-control"
                                                    placeholder="Enter company phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="fax" class="form-label">Company Mobile</label>
                                                <input type="text" name="mobile" id="mobile" value="{{ $data->mobile }}"
                                                    class="form-control" placeholder="Enter company mobile">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <label for="address" class="form-label">Company Address</label>
                                                <textarea type="text" name="address" rows="4" class="form-control" placeholder="Enter company address"
                                                    id="address">{{ $data->address }}</textarea>
                                            </div>
                                        </div>
                                            

                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="phone" class="form-label">Facebook</label>
                                                <input type="text" name="facebook" id="facebook"
                                                    value="{{ $data->facebook }}" class="form-control"
                                                    placeholder="Enter company facebook">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="fax" class="form-label">Company twitter</label>
                                                <input type="text" name="twitter" id="twitter" value="{{ $data->twitter }}"
                                                    class="form-control" placeholder="Enter company twitter">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="fax" class="form-label">Company youtube</label>
                                                <input type="text" name="youtube" id="youtube" value="{{ $data->youtube }}"
                                                    class="form-control" placeholder="Enter company youtube">
                                            </div>
                                        </div>
                                          <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="fax" class="form-label">Company GooglePlus</label>
                                                <input type="text" name="googleplus" id="googleplus" value="{{ $data->googleplus }}"
                                                    class="form-control" placeholder="Enter company googleplus">
                                            </div>
                                        </div>



                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <label for="logo" class="form-label">Company Logo</label>
                                                <input type="file" name="logo" id="logo"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <label for="fab_icon" class="form-label">Company Favicon</label>
                                                <input type="file" name="fab_icon" id="fab_icon"
                                                    class="form-control">
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

                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Extra Settings</h4>
                            </div>
                            <div>
                                <div class="box-body">
                                    <style>
                                        .site-logo {
                                            width: 200px;
                                            /* set fixed width */
                                            height: 60px;
                                            /* set fixed height */
                                            object-fit: contain;
                                            /* keeps aspect ratio inside box */
                                            display: block;
                                            /* avoids inline spacing issues */
                                            margin: 0 auto;
                                            /* centers if needed */
                                        }
                                    </style>
                                    <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <label>Site Logo</label>
                                            <img class="site-logo"
                                                src="{{ asset('uploads/company/'.$data->logo) }}"
                                                alt="site logo">
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <label>Site Favicon</label>
                                            <img class="site-logo"
                                                src="{{ asset('uploads/company/'.$data->fav_icon) }}"
                                                alt="site favicon">
                                        </div>
                                    </div>
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
