@extends('layouts.backend')
@section('title', 'FAQ Edit')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">FAQ Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Edit FAQ Settings
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
                        <h4 class="box-title">Edit FAQ Item</h4>
           
                    </div>
                    <form action="{{ route('admin.faqs.update', $faq->id) }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="faq_question" class="form-label">FAQ Question</label>
                                            <input type="text" name="faq_question" id="faq_question" value="{{ $faq->faq_question }}"
                                                class="form-control" placeholder="Enter FAQ item name">
                                                @error('faq_question')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="faq_answer" class="form-label">FAQ Answer</label>
                                            <input type="text" name="faq_answer" id="faq_answer" value="{{ $faq->faq_answer }}"
                                                class="form-control" placeholder="Enter FAQ item answer">
                                                @error('faq_answer')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('admin.faqs.index') }}"
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
