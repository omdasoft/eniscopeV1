@extends('layouts.master')

@section('content')
        <div class="banner-area pt-120 pb-120 bg-7 overlay-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-page text-center text-white text-uppercase">
							<h1>{{trans('lang.about')}}</h1>
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
								<li class="active">{{trans('lang.about')}}</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb Area End -->
		<!-- Drubo Story Start -->
		<section class="story-coreplex gray-bg ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="video-area">
							<div class="img">
								<img src="images/other/video-bg-2.png" alt="" />
								<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
									<i class="zmdi zmdi-play-circle-outline"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="story-content pt-15">
							<div class="video-content two">
								<h6>{{trans('lang.about-eniscope')}}</h6>
							</div>
							<!-- Social Icon -->
							<div class="about-menu pt-15">
								{{trans('lang.about-summary')}}
							</div>
							<!-- Social Icon -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Drubo Story End -->
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
		<!-- Mission Vission Area Start -->
		<section class="mission-vission pb-100 pt-115">
			<div class="container">
				<!-- Section Titel -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h4>{{trans('lang.vision-and-message')}}</h4>
						</div>
					</div>
				</div>
				<!-- Section Titel -->
				<div class="row pt-55">
					<div class="col-md-6 col-sm-6">
						<div class="video-content pt-90">
							<h6>{{trans('lang.vision')}}</h6>
							<p>
								{{trans('lang.vision-full')}}
                            </p>
                            <h6>{{trans('lang.message')}}</h6>
                            <p>
								{{trans('lang.message-full')}}
                            </p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 res-pt-xs-20">
						<div class="msn-vsn text-center">
							<img src="images/other/right.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Mission Vission Area End -->

@endsection