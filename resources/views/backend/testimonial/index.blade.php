  
@extends('layouts.backend')
@section('title', 'Testimonial Index')
@section('content')
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">All Testimonial Items</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Testimonial</li>
								<li class="breadcrumb-item active" aria-current="page">All Testimonial</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Testimonial Management</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example5" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Title</th>
								<th>Details</th>
								<th>Image</th>
                                <th>Status</th>
								<th>Manage</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($allData as $key => $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->designation }}</td>
                                <td><img src="{{ asset('uploads/testimonials/'.$data->image) }}" alt="Testimonial Image" width="100"></td>
                                <td>
                                    @if($data->is_active == 1)
                                        <span class="badge badge-success">Active</span>

                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>   
                                <td>
                                   @if($data->is_active == 1)
                                    <a href="{{ route('admin.testimonial.inactive', $data->id) }}" class="btn btn-danger">Inactive</a>
                                   @else    
                                    <a href="{{ route('admin.testimonial.active', $data->id) }}" class="btn btn-success">Active</a>
                                   @endif

                                    <a href="{{ route('admin.testimonial.edit', $data->id) }}" class="btn btn-info">Edit</a>
                                    <a id="delete" href="{{ route('admin.testimonial.delete', $data->id) }}" class="btn btn-danger" > Delete</a>
                                    
                                </td>
                            @endforeach
							

						</tbody>
				
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->      
			</div> 

		
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  @endsection