@extends('layouts.backend')
@section('title', 'Prerequisites Edit')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Prerequisites Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Edit Prerequisites Settings
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
                        <h4 class="box-title">Prerequisites Settings Update</h4>
           
                    </div>
                    <form action="{{ route('admin.setting.prerequisites.update') }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="financial_aid_title" class="form-label">Prerequisites Page Title</label>
                                            <input type="text" name="title" id="financial_aid_title" value="{{ $prerequisite->title }}"
                                                class="form-control" placeholder="Enter Prerequisites title">

                                            <input type="hidden" name="id" id="financial_aid_id" value="{{ $prerequisite->id }}"
                                                class="form-control" placeholder="Enter Prerequisites title">

                                                @error('financial_aid_title')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                              
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="financial_aid_description" class="form-label">Prerequisites Description</label>
                                         		<textarea id="editor1" name="details" rows="10" cols="80">
													{{ $prerequisite->details }}
						                    </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="financial_aid_image" class="form-label">Prerequisites Image</label>
                                            <input type="file" name="image" id="financial_aid_image" value="{{ old('financial_aid_image') }}"
                                                class="form-control">
                                                @error('financial_aid_image')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                             
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
