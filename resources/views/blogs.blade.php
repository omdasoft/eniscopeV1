@extends('layouts.master')

@section('content')

	<!-- Banner Area Start -->
    <div class="banner-area pt-130 pb-120 bg-7 overlay-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-page text-center text-white text-uppercase">
							<h1>كل الاخبار</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner Area End -->
		<!-- Breadcrumb Area Start -->
		<div class="breadcrumb-area ptb-25 broder-bottom white-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list text-center text-uppercase">
							<ul>
								<li><a href="index.html">{{trans('lang.home')}}</a><span class="divider"> // </span></li>
								<li class="active">{{trans('lang.all-news')}}</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb Area End -->
			<!-- Our Blog Area Start -->
            <section class="ourblog-area pb-100 pt-115">
			<div class="container">
				<!-- Section Titel -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h1>{{trans('lang.all-news')}}</h1>
						</div>
					</div>
				</div>
				<!-- Section Titel -->
				<!-- Blog Content Area Start -->
				<div class="row pt-55">
					<!-- Single Blog -->
					<div class="col-md-4 col-sm-6 col-xs-12 res-pb-xs-30">
						<div class="single-blog">
							<div class="blog-img">
								<a href="{{url('/blog-details')}}">
									<img src="images/blog/1.jpg" alt="" />
								</a>
							</div>
							<div class="blog-content">
								<h6><a href="{{url('/blog-details')}}">عنون اخر الاخبار</a></h6>
								<div class="post-info">
									<span class="post-date">
										<a href="#"><i class="zmdi zmdi-time"></i> Jun 25, 2016 </a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
					<!-- Single Blog -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-blog">
							<div class="blog-img">
								<a href="#"><img src="images/blog/2.jpg" alt="" /></a>
							</div>
							<div class="blog-content">
									<h6><a href="#">عنون اخر الاخبار</a></h6>
								<div class="post-info">
									<span class="post-date">
										<a href="#"><i class="zmdi zmdi-time"></i> Feb 30, 2015 </a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
					<!-- Single Blog -->
					<div class="col-md-4 hidden-sm hidden-xs">
						<div class="single-blog">
							<div class="blog-img">
								<a href="{{url('/blog-details')}}"><img src="images/blog/3.jpg" alt="" /></a>
							</div>
							<div class="blog-content">
									<h6><a href="{{url('/blog-details')}}">عنون اخر الاخبار</a></h6>
								<div class="post-info">
									<span class="post-date">
										<a href="#"><i class="zmdi zmdi-time"></i> Aug 19, 2014 </a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
				</div>
                <!-- Blog Content Area End -->
                	<!-- Blog Content Area Start -->
				<div class="row pt-55">
					<!-- Single Blog -->
					<div class="col-md-4 col-sm-6 col-xs-12 res-pb-xs-30">
						<div class="single-blog">
							<div class="blog-img">
								<a href="#">
									<img src="images/blog/1.jpg" alt="" />
								</a>
							</div>
							<div class="blog-content">
								<h6><a href="#">عنون اخر الاخبار</a></h6>
								<div class="post-info">
									<span class="post-date">
										<a href="#"><i class="zmdi zmdi-time"></i> Jun 25, 2016 </a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
					<!-- Single Blog -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-blog">
							<div class="blog-img">
								<a href="#"><img src="images/blog/2.jpg" alt="" /></a>
							</div>
							<div class="blog-content">
									<h6><a href="#">عنون اخر الاخبار</a></h6>
								<div class="post-info">
									<span class="post-date">
										<a href="#"><i class="zmdi zmdi-time"></i> Feb 30, 2015 </a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
					<!-- Single Blog -->
					<div class="col-md-4 hidden-sm hidden-xs">
						<div class="single-blog">
							<div class="blog-img">
								<a href="#"><img src="images/blog/3.jpg" alt="" /></a>
							</div>
							<div class="blog-content">
									<h6><a href="#">عنون اخر الاخبار</a></h6>
								<div class="post-info">
									<span class="post-date">
										<a href="#"><i class="zmdi zmdi-time"></i> Aug 19, 2014 </a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
				</div>
                <!-- Blog Content Area End -->
                <!-- Pagination Count Area Strat -->
				<div class="row">
					<div class="col-md-12">
						<div class="pagination-count text-center broder ptb-15 mt-60 white-bg">
							<ul>
								<li><a href="#"><i class="zmdi zmdi-caret-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="zmdi zmdi-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Pagination Count Area End -->
			</div>
		</section>
		<!-- Our Blog Area End -->

@endsection