@extends('layouts.master')

@section('content')
<!-- Banner Area Start -->
<div class="banner-area pt-130 pb-120 bg-7 overlay-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-page text-center text-white text-uppercase">
							<h1>{{trans('lang.latest-shot')}}</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Banner Area End -->
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area ptb-25 broder-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-list text-center text-uppercase">
							<ul>
								<li><a href="{{url('/')}}">{{trans('lang.home')}}</a><span class="divider"> // </span></li>
								<li class="active">{{trans('lang.portfolio')}}</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb Area End -->
		<!-- Our Latest Shot Area Start -->
		<section class="latestshot-area ptb-100">
			<div class="container">
				<!-- Section Titel -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h4>{{trans('lang.latest-shot')}}</h4>
						</div>
					</div>
				</div>
				<!-- Section Titel -->
			</div>
			<!-- Latest Shot Main Area Start -->
			<div class="container-fluid">
				<div class="">
					<!-- Latest Shot/Portfolio Menu Tab -->
					<div class="latest-content">
						<ul class="text-center latestshot-menu mt-55 mb-60 bg-white">
							<li class="active" data-filter="*">{{trans('lang.all')}}</li>
							<li class="filter" data-filter=".c1">{{trans('lang.tech-services')}}</li>
							<li class="filter" data-filter=".c2">{{trans('lang.forensic-analysis-services')}}</li>
							<li class="filter" data-filter=".c3">{{trans('lang.hr-services')}}</li>
							<li class="filter" data-filter=".c4">{{trans('lang.waste-electric-services')}}</li>
							<li class="filter" data-filter=".c5">{{trans('lang.admin-services')}}</li>
						</ul>
					</div>
					<!-- Latest Shot/Portfolio Menu Tab -->
					<div class="grid img-full latestshot-box">
						<div class="latestshot-content">
							<div class="grid-sizer grid-item c1">
								<!-- Latest Shot/Portfolio Single -->
								<div class="single-portfolio">
									<div class="image-effect">
										<div class="portfolio-image">
											<a href="{{url('/portfolio-details')}}"><img src="images/portfolio-two/1.jpg" alt="" /></a>
											<div class="effect-titel text-uppercase text-center">
												<a href="{{url('/portfolio-details')}}"><i class="zmdi zmdi-link"></i></a>
												<h2>product branding</h2>
												<p>Illustration</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Latest Shot/Portfolio Single -->
								<!-- Latest Shot/Portfolio Single -->
								<div class="single-portfolio">
									<div class="image-effect">
										<div class="portfolio-image">
											<a href="{{url('/portfolio-details')}}"><img src="images/portfolio-two/2.jpg" alt="" /></a>
											<div class="effect-titel text-uppercase text-center two">
												<a href="{{url('/portfolio-details')}}"><i class="zmdi zmdi-link"></i></a>
												<h2>Branding design</h2>
												<p>Graphic design</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Latest Shot/Portfolio Single -->
							</div>
							<div class="grid-item grid-item--width2 c2 c4">
								<!-- Latest Shot/Portfolio Single -->
								<div class="single-portfolio">
									<div class="image-effect">
										<div class="portfolio-image">
											<a href="#"><img src="images/portfolio-two/3.jpg" alt="" /></a>
											<div class="effect-titel text-uppercase text-center three">
												<a href="#"><i class="zmdi zmdi-link"></i></a>
												<h2>development</h2>
												<p>Web design</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Latest Shot/Portfolio Single -->
								<!-- Latest Shot/Portfolio Single -->
								<div class="single-portfolio">
									<div class="image-effect">
										<div class="portfolio-image">
											<a href="#"><img src="images/portfolio-two/4.jpg" alt="" /></a>
											<div class="effect-titel text-uppercase text-center three">
												<a href="#"><i class="zmdi zmdi-link"></i></a>
												<h2>graphic design</h2>
												<p>Illustration</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Latest Shot/Portfolio Single -->
							</div>
							<div class="grid-item c1 c3 c5">
								<!-- Latest Shot/Portfolio Single -->
								<div class="single-portfolio">
									<div class="image-effect">
										<div class="portfolio-image">
											<a href="#"><img src="images/portfolio-two/5.jpg" alt="" /></a>
											<div class="effect-titel text-uppercase text-center two">
												<a href="#"><i class="zmdi zmdi-link"></i></a>
												<h2>development</h2>
												<p>Illustration</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Latest Shot/Portfolio Single -->
								<!-- Latest Shot/Portfolio Single -->
								<div class="single-portfolio">
									<div class="image-effect">
										<div class="portfolio-image">
											<a href="#"><img src="images/portfolio-two/6.jpg" alt="" /></a>
											<div class="effect-titel text-uppercase text-center">
												<a href="#"><i class="zmdi zmdi-link"></i></a>
												<h2>product branding</h2>
												<p>Web design</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Latest Shot/Portfolio Single -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Latest Shot Main Area End -->
		</section>
		<!-- Our Latest Shot Area End -->






@endsection