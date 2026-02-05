@extends('layouts.backend')
@section('title', 'Team Create')
@section('content')

<div class="content-wrapper" style="min-height: 405px;">
    <div class="container-full">

        <!-- Content Header -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Team Settings</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.team.index') }}">Team</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Team Member</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Edit Team Member</h4>
                        </div>

                        <form action="{{ route('admin.team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                   

                            <div class="box-body">
                                <div class="row">

                                    <!-- Name -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Team Member Name</label>
                                                     @csrf
                        
                                            <input type="text" name="name"
                                                   value="{{ old('name', $team->name) }}"
                                                   class="form-control">
                                            @error('name')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email"
                                                   value="{{ old('email', $team->email) }}"
                                                   class="form-control">
                                            @error('email')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone"
                                                   value="{{ old('phone', $team->phone) }}"
                                                   class="form-control">
                                            @error('phone')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Position -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="text" name="position"
                                                   value="{{ old('position', $team->position) }}"
                                                   class="form-control">
                                            @error('position')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Social Links -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook"
                                                   value="{{ old('facebook', $team->facebook) }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter"
                                                   value="{{ old('twitter', $team->twitter) }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>LinkedIn</label>
                                            <input type="text" name="linkedin"
                                                   value="{{ old('linkedin', $team->linkedin) }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" name="instagram"
                                                   value="{{ old('instagram', $team->instagram) }}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <!-- Status -->
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="is_active" class="form-select">
                                                <option value="1" {{ $team->is_active == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $team->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Image -->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control">

                                            @if($team->image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('uploads/teams/'.$team->image) }}"
                                                         width="80" height="80"
                                                         style="object-fit:cover;border-radius:6px;">
                                                </div>
                                            @endif

                                            @error('image')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="box-footer">
                                {{-- <a href="{{ route('admin.team.index') }}" class="btn btn-danger">Cancel</a> --}}
                                <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

@endsection
