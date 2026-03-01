@extends('layouts.backend')
@section('title', 'All Application Index')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Details</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">e-Commerce</li>
								<li class="breadcrumb-item active" aria-current="page">Details</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
			<div class="col-lg-12">
				<div class="box">
					<div class="box-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="box-title">Personal Info</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="390">Name</td>
                                                <td> {{ $application->first_name }} {{ $application->last_name }} </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td> {{ $application->email }} </td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td> {{ $application->phone }} </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h4 class="box-title mt-40">Education General Info</h4>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td width="390">Qualification</td>
												<td> {{ $application->qualification }} </td>
											</tr>
											<tr>
												<td>English</td>
												<td> {{ $application->english_test }} </td>
											</tr>
											<tr>
												<td>Preferred Country</td>
												<td> {{ $application->preferred_country }} </td>
											</tr>
											<tr>
												<td>Study Level</td>
												<td> {{ $application->study_level }} </td>
											</tr>
											<tr>
												<td>Preferred University</td>
												<td> {{ $application->preferred_university }} </td>
											</tr>

                                          

										</tbody>
									</table>
								</div>
							</div>
                            	<div class="col-lg-12 col-md-12 col-sm-12">
								<h4 class="box-title mt-40">Personal Statement</h4>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											
											<tr>
												<td>Personal Statement</td>
												<td> {{ $application->personal_statement }} </td>
											</tr>
                                            <tr>
												<td>Submit Date</td>
												<td> {{ $application->created_at }} </td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>

		</section>
		<!-- /.content -->
	  </div>
  </div>

@endsection