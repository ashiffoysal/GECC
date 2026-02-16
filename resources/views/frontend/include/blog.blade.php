 <section class="blog-area pb-100">
			<div class="container">
				<div class="section-title">
					<span>News</span>
					<h2>Latest News</h2>
				</div>

				@php
					$allBlogs=App\Models\Blog::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->get();
				@endphp
				<div class="row">
					<div class="blog-wrap owl-carousel owl-theme">
						@foreach ($allBlogs as $blogs)
							<div class="single-blog-post">
								<div class="post-image">
									<a href="{{ route('frontend.blog-detail', $blogs->id) }}">
									<img src="{{ asset($blogs->blog_image) }}" alt="image">
								</a>
							</div>
							<div class="post-content">
								<div class="date">
									<i class="fa fa-calendar"></i> 
									<span>{{ $blogs->created_at->format('d M Y') }}</span>
								</div>
								<h3>
									<a href="{{ route('frontend.blog-detail', $blogs->id) }}">{{ $blogs->title }}</a>
								</h3>
								<p>{!! Str::limit($blogs->description, 100) !!}</p>
								<a href="{{ route('frontend.blog-detail', $blogs->id) }}" class="default-btn">Read More</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>