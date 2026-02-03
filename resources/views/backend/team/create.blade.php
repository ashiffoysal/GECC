@extends('layouts.backend')
@section('title', 'Team Create')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Team Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Create Team Settings
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
                        <h4 class="box-title">Create Team Member</h4>
           
                    </div>
                    <form action="{{ route('admin.team.store') }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Team Member Name</label>
                                            <input type="text" name="name" id="name" value=""
                                                class="form-control" placeholder="Enter team member name">
                                                @error('name')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Team Member Email</label>
                                            <input type="text" name="email" id="email" value=""
                                                class="form-control" placeholder="Enter team member email">
                                                @error('email')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Team Member Phone</label>
                                            <input type="text" name="phone" id="phone" value=""
                                                class="form-control" placeholder="Enter team member phone">
                                                     @error('phone')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="position" class="form-label">Team Member Position</label>
                                            <input type="text" name="position" id="position" value=""
                                                class="form-control" placeholder="Enter team member position">
                                                     @error('position')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="facebook" class="form-label">Facebook</label>
                                            <input type="text" name="facebook" id="facebook" value=""
                                                class="form-control" placeholder="Enter team member facebook link">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="twitter" class="form-label">Twitter</label>
                                            <input type="text" name="twitter" id="twitter" value=""
                                                class="form-control" placeholder="Enter team member twitter link">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="linkedin" class="form-label">LinkedIn</label>
                                            <input type="text" name="linkedin" id="linkedin" value=""
                                                class="form-control" placeholder="Enter team member linkedin link">
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                        <div class="form-group">
                                            <label for="instagram" class="form-label">Instagram</label>
                                            <input type="text" name="instagram" id="instagram" value=""
                                                class="form-control" placeholder="Enter team member instagram link">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="is_active" id="status" class="form-select">
                                                <option value="">Select...</option>
                                                <option value="0">
                                                    Inactive
                                                </option>
                                                <option selected="" value="1">
                                                    Active
                                                </option>
                                            </select>
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
