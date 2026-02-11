@extends('layouts.backend')
@section('title', 'Event Edit')
@section('content')
<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Event Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Edit Event Settings
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
                        <h4 class="box-title">Edit Event Item</h4>
           
                    </div>
                    <form action="{{ route('admin.event.update', $event->id) }}" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                   
                        @csrf
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="event_title" class="form-label">Event Title</label>
                                            <input type="text" name="title" id="event_title" value="{{ $event->title }}"
                                                class="form-control" placeholder="Enter Event title">
                                                @error('title')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="event_tags" class="form-label">Event Tags</label>
                                            <input type="text" name="tags" id="event_tags" value="{{ $event->tags }}"
                                                class="form-control" placeholder="Enter Event tags">
                                                @error('tags')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="event_category" class="form-label">Event Category</label>
                                            <select name="category" id="event_category" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $event->category == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="event_description" class="form-label">Event Description</label>
                                         		<textarea id="editor1" name="description" rows="10" cols="80">
													{{ $event->description }}
						                    </textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="event_image" class="form-label">Event Image</label>
                                            <input type="file" name="image" id="event_image" value="{{ old('event_image') }}"
                                                class="form-control">
                                                @error('event_image')
                                                <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('admin.event.index') }}"
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
