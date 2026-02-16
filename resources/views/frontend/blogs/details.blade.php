@extends('layouts.frontend')
@section('title', 'Latest News')
@section('meta_description', 'Learn')
@section('content')
    <!-- Start Page Title Area -->
		<div class="page-title-area item-bg-2">
			<div class="container">
				<div class="page-title-content">
					<h2>{{ $blogs->title }}</h2>
					<ul>
						<li>
							<a href="{{ url('/') }}">
								Home 
								<i class="fa fa-chevron-right"></i>
							</a>
						</li>
						<li>News Details</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Blog Details Area -->
   <section class="blog-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="blog-details-desc">
							<div class="article-image">
								<img src="{{ asset($blogs->blog_image) }}" alt="image">
							</div>

							<div class="article-content">
								<div class="entry-meta">
									<ul>
										<li><span>Posted On:</span> <a href="">{{ $blogs->created_at->format('F j, Y') }}</a></li>
										<li><span>Posted By:</span> <a href="">GECC</a></li>
									</ul>
								</div>

								<h3>{{ $blogs->title }}</h3>

								<p>{!! $blogs->description !!}</p>
                            </div>
					
						</div>
					</div>

					<div class="col-lg-4 col-md-12">
						<aside class="widget-area" id="secondary">
							

							<section class="widget widget-peru-posts-thumb">
								<h3 class="widget-title">Popular Posts</h3>
                                @foreach ($popularBlogs as $blog)
                                    <article class="item">
                                        <a href="{{ route('frontend.blog-detail', $blog->id) }}" class="thumb">
                                            <span class="fullimage cover bg1" role="img" style="background-image: url({{ asset('/' . $blog->blog_image) }});"></span>
									</a>
									<div class="info">
										<time datetime="2024-06-30">{{ $blog->created_at->format('F j, Y') }}</time>
										<h4 class="title usmall">
											<a href="{{ route('frontend.blog-detail', $blog->id) }}">{{ $blog->title }}</a>
										</h4>
									</div>

									<div class="clear"></div>
								</article>
                                @endforeach

							</section>

					
							
							<section class="widget widget_categories">
								<h3 class="widget-title">Categories</h3>

								<ul>
                                    @foreach ($allCategories as $category)
                                        <li>
                                            <a>{{ $category->title }}</a>
                                        </li>
                                        
                                    @endforeach
									
									
								</ul>
							</section>

							<section class="widget widget_tag_cloud">
								<h3 class="widget-title">Tags</h3>

								<div class="tagcloud">
									<a href="">Education</a>
									
								</div>
							</section>
						</aside>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Details Area -->
        @endsection