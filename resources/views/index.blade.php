@extends('layouts.master')

@section('content')
 <!-- Start of slider area -->
 <div class="slider-area">
			<div id="slider" class="nivoSlider">
				<img style ="display:none" src="images/slider/home-1/1.jpg"  data-thumb="images/slider/1.jpg"  alt="" title="#htmlcaption1"/>      
				<img style ="display:none" src="images/slider/home-1/2.jpg"  data-thumb="images/slider/2.jpg"  alt="" title="#htmlcaption2"/>
			</div>
			<div id="htmlcaption1" class="pos-slideshow-caption nivo-html-caption nivo-caption">
				<div class="timing-bar"></div>
				<div class="pos-slideshow-info pos-slideshow-info1">
					<div class="container">
						<div class="pos_description hidden-xs">
							<div class="title2"><span class="txt">{{trans('lang.eniscop-slider-title')}}</span></div>
							<div class="title1"><span class="txt"><b>{{trans('lang.specilized-in')}}</b></span></div>
							<div class="title1"><span class="txt">{{trans('lang.specilize-title')}}</span></div>
						</div>
					</div>
				</div>
			</div>
			<div id="htmlcaption2" class="pos-slideshow-caption nivo-html-caption nivo-caption">
				<div class="timing-bar"></div>
				<div class="pos-slideshow-info pos-slideshow-info2">
					<div class="container">
							<div class="pos_description hidden-xs">
									<div class="title1"><span class="txt"><b>{{trans('lang.ourgoal')}}</b></span></div>
									<div class="title2"><span class="txt">{{trans('lang.ourgoal-title')}}</span></div>
							</div>
					</div>
				</div>
			</div>
		</div>
        <!-- End of slider area -->

          <!-- About Area Start -->
          <section class="about-area pt-100">
			<div class="container">
				<!-- Section Titel -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h1>{{trans('lang.about')}}</h1>
							<p>
								{{trans('lang.about-summary')}}
							</p>
						</div>
					</div>
				</div>
				<!-- Section Titel -->
				<!-- About Content -->
				<div class="row pt-50">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Speciality Single -->
						<div class="specialty-single pb-50">
							<div class="icon-titel">
								<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
								<h6>{{trans('lang.message')}}</h6>
							</div>
							<div class="spe-discribe">
								<p> {{trans('lang.message-summary')}} </p>
							</div>
						</div>
						<!-- Speciality Single -->
						<!-- Speciality Single -->
						<div class="specialty-single hidden-xs">
							<div class="icon-titel">
								<i class="fa fa-bullseye" aria-hidden="true"></i>
								<h6>{{trans('lang.strategic-goals')}}</h6>
							</div>
							<div class="spe-discribe">
								<p> {{trans('lang.strategic-goals-summary')}} </p>
							</div>
						</div>
						<!-- Speciality Single -->
					</div>
					<!-- Speciality Area -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Speciality Single -->
						<div class="specialty-single pb-50">
							<div class="icon-titel">
								<i class="fa fa-eye" aria-hidden="true"></i>
								<h6>{{trans('lang.vision')}}</h6>
							</div>
							<div class="spe-discribe">
								<p> {{trans('lang.vision-summary')}} </p>
							</div>
						</div>
						<!-- Speciality Single -->
						<!-- Speciality Single -->
						<div class="specialty-single hidden-xs">
							<div class="icon-titel">
								<i class="fa fa-cubes" aria-hidden="true"></i>
								<h6>{{trans('lang.mission')}}</h6>
							</div>
							<div class="spe-discribe">
								<p> {{trans('lang.mission-summary') }} </p>
							</div>
						</div>
						<!-- Speciality Single -->
					</div>
					<!-- Speciality Area -->
					<!-- Speciality Image -->
					<div class="col-md-6 col-sm-12">
						<div class="specialty-image">
							<img src="images/other/about.jpg" alt="" />
						</div>
					</div>
					<!-- Speciality Image -->
				</div>
				<!-- About Content -->
				<!-- Video Area Start -->
				<div class="row pt-100 res-pt-xs-50">
					<div class="col-md-6 col-sm-6">
						<div class="video-area">
							<div class="img">
								<img src="images/other/video-bg.png" alt="" />
								<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
									<i class="zmdi zmdi-play-circle-outline"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="video-content res-pt-xs-20">
							<h6>a little bit of corplex story</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
							<p>Pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
						</div>
						<!-- Social Icon -->
						<div class="social-rotate pt-30 res-pt-10">
							<ul>
								<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
								<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
								<li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>
								<li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
							</ul>
						</div>
						<!-- Social Icon -->
					</div>
				</div>
				<!-- Video Area End -->
			</div>
        </section>
        <!-- About Area End -->
		<!-- Our Service Area Start -->
		<section class="oursevice-area ptb-100">
			<div class="container">
				<!-- Section Titel -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h4>{{trans('lang.services')}}</h4>
							<p> {{trans('lang.service-title')}} </p>
						</div>
					</div>
				</div>
				<!-- Section Titel -->
				<!-- Service Row Area Start -->
				<div class="row pt-70 pb-60 broder-bottom">
					<!-- Service Single -->
					<div class="col-md-4 col-sm-6">
						<div class="ourservice-single text-center">
							<div class="srvc-icon mb-40">
								<a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
							</div>
							<div class="srvc-content">
								<h6>{{trans('lang.apps-services')}}</h6>
								
							</div>
						</div>
					</div>
					<!-- Service Single -->
					<!-- Service Single -->
					<div class="col-md-4 col-sm-6 hidden-xs">
						<div class="ourservice-single text-center">
							<div class="srvc-icon mb-40">
								<a href="{{url('/man-service')}}"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></a>
							</div>
							<div class="srvc-content">
								<h6>{{trans('lang.admin-services')}}</h6>
								
							</div>
						</div>
					</div>
					<!-- Service Single -->
					<!-- Service Single -->
					<div class="col-md-4 hidden-sm hidden-xs">
						<div class="ourservice-single text-center">
							<div class="srvc-icon mb-40">
								<a href="{{url('/tech-service')}}"><i class="fa fa-laptop" aria-hidden="true"></i></a>
							</div>
							<div class="srvc-content">
								<h6>{{trans('lang.tech-services')}}</h6>
							
							</div>
						</div>
					</div>
					<!-- Service Single -->
				</div>
				<!-- Service Row Area End -->
				<!-- Service Row Area Start -->
				<div class="row pt-70">
					<!-- Service Single -->
					<div class="col-md-4 col-sm-6">
						<div class="ourservice-single text-center">
							<div class="srvc-icon mb-40">
								<a href="{{url('forensic-analysis-service')}}"><i class="fa fa-unlock" aria-hidden="true"></i></a>
							</div>
							<div class="srvc-content">
								<h6>{{trans('lang.forensic-analysis-services')}}</h6>
								
							</div>
						</div>
					</div>
					<!-- Service Single -->
					<!-- Service Single -->
					<div class="col-md-4 col-sm-6 hidden-xs">
						<div class="ourservice-single text-center">
							<div class="srvc-icon mb-40">
								<a href="{{url('/hr-service')}}"><i class="fa fa-male" aria-hidden="true"></i></a>
							</div>
							<div class="srvc-content">
								<h6> {{trans('lang.hr-services')}} </h6>
							
							</div>
						</div>
					</div>
					<!-- Service Single -->
					<!-- Service Single --> 
					<div class="col-md-4 hidden-sm hidden-xs">
						<div class="ourservice-single text-center">
							<div class="srvc-icon mb-40">
								<a href="{{url('/power-waste-service')}}"><i class="fa fa-battery-1" aria-hidden="true"></i></a>
							</div>
							<div class="srvc-content">
								<h6>{{trans('lang.waste-electric-services')}}</h6>
								
						</div>
					</div>
					<!-- Service Single -->
				</div>
				<!-- Service Row Area End -->
			</div>
		</section>
		<!-- Our Service Area End -->
		 <!-- Our Succesful Area Start -->
		 <section class="successful-area bg-4 pt-115 pb-100 overlay">
			<div class="container-fluid">
				<!-- Successful Single -->
				<div class="successful-single">
					<div class="sucs-icon">
						<a href="#"><i class="zmdi zmdi-male-female"></i></a>
					</div>
					<div class="sucs-count text-uppercase text-white">
						<h3><span class="counter">150</span></h3>
						<h3>{{trans('lang.our-clients')}}</h3>
					</div>
				</div>
				<!-- Successful Single -->
				<!-- Successful Single -->
				<div class="successful-single hidden-sm">
					<div class="sucs-icon">
						<a href="#"><i class="zmdi zmdi-check-all"></i></a>
					</div>
					<div class="sucs-count text-uppercase text-white">
						<h3><span class="counter">100</span></h3>
						<h3>{{trans('lang.successful-projects')}}</h3>
					</div>
				</div>
				<!-- Successful Single -->
				<!-- Successful Single -->
				<div class="successful-single">
					<div class="sucs-icon">
						<a href="#"><i class="zmdi zmdi-windows"></i></a>
					</div>
					<div class="sucs-count text-uppercase text-white">
						<h3><span class="counter">50</span></h3>
						<h3>{{trans('lang.awards')}}</h3>
					</div>
				</div>
				<!-- Successful Single -->
			</div>
		</section>
		<!-- Our Succesful Area End -->
		<!-- Our Blog Area Start -->
		<section class="ourblog-area pb-100 pt-115">
			<div class="container">
				<!-- Section Titel -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h1>{{trans('lang.last-news')}}</h1>
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
								<a href="{{url('/blog-details')}}"><img src="images/blog/2.jpg" alt="" /></a>
							</div>
							<div class="blog-content">
									<h6><a href="{{url('/blog-details')}}">عنون اخر الاخبار</a></h6>
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
										<a href="{{url('/blog-details')}}"><i class="zmdi zmdi-time"></i> Aug 19, 2014 </a>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Blog -->
				</div>
				<!-- Blog Content Area End -->
			</div>
		</section>
		<!-- Our Blog Area End -->
		<!-- Brand Logo Area Start -->
		<div class="brandlogo-area pb-100">
			<div class="container">
				<div class="row">
					<div class="brand-carsoul">
						<!-- Brand Single -->
						<div class="col-md-12">
							<div class="brand-single">
								<a href="#"><img src="images/brand/1.jpg" alt="" /></a>
							</div>
						</div>
						<!-- Brand Single -->
						<!-- Brand Single -->
						<div class="col-md-12">
							<div class="brand-single">
								<a href="#"><img src="images/brand/2.jpg" alt="" /></a>
							</div>
						</div>
						<!-- Brand Single -->
						<!-- Brand Single -->
						<div class="col-md-12">
							<div class="brand-single">
								<a href="#"><img src="images/brand/3.jpg" alt="" /></a>
							</div>
						</div>
						<!-- Brand Single -->
						<!-- Brand Single -->
						<div class="col-md-12">
							<div class="brand-single">
								<a href="#"><img src="images/brand/4.jpg" alt="" /></a>
							</div>
						</div>
						<!-- Brand Single -->
						<!-- Brand Single -->
						<div class="col-md-12">
							<div class="brand-single">
								<a href="#"><img src="images/brand/5.jpg" alt="" /></a>
							</div>
						</div>
						<!-- Brand Single -->
						<!-- Brand Single -->
						<div class="col-md-12">
							<div class="brand-single">
								<a href="#"><img src="images/brand/6.jpg" alt="" /></a>
							</div>
						</div>
						<!-- Brand Single -->
						<!-- Brand Single -->
						<div class="col-md-12">
							<div class="brand-single">
								<a href="#"><img src="images/brand/4.jpg" alt="" /></a>
							</div>
						</div>
						<!-- Brand Single -->
					</div>
				</div>
			</div>
		</div>
		<!-- Brand Logo Area End -->



@endsection




