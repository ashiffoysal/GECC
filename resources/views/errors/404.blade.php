@extends('layouts.frontend')

@section('content')
    <div class="error-area">
			<div class="d-table">
				<div class="d-table-cell">
                    <div class="error-contant-wrap">
                        <img src="{{ asset('frontend') }}/assets/img/404.jpg" alt="404">
                        <h3>Oops! Page Not Found</h3>
                        <p>The page you were looking for could not be found.</p>
                        <a href="{{ url('/') }}" class="default-btn">
                            Return Home page
                            <i class="flaticon-right"></i>
                        </a>
                    </div>
				</div>
            </div>
		</div>
@endsection