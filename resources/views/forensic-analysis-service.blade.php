@extends('layouts.master')

@section('content')
	<!-- Banner Area Start -->
    <div class="banner-area pt-130 pb-120 bg-7 overlay-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-page text-center text-white text-uppercase">
							<h1>{{trans('lang.services')}}</h1>
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
								<li><a href="index.html">{{trans('lang.home')}}</a><span class="divider"> // </span></li>
								<li class="active">{{trans('lang.forensic-analysis-services')}}</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb Area End -->
		<!-- Mission Vission Area Start -->
		<section class="mission-vission ptb-100">
			<div class="container">
				<!-- Section Titel -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h4>{{trans('lang.forensic-analysis-title')}}</h4>
						</div>
					</div>
				</div>
				<!-- Section Titel -->
				<div class="row pt-55">
					<div class="col-md-6 col-sm-6">
						<div class="video-content">
							<p>{{trans('lang.forensic-analysis-intro')}}</p>
							<h6> {{trans('lang.Secure-active')}} :</h6>
							<p>
								{{trans('lang.secure-active-sum')}}
                            </p>
                            <h6> {{trans('lang.securing-infra')}} :</h6>
                            <p>
								{{trans('lang.securing-infra-sum')}}
                            </p>

                            <h6> {{trans('lang.securing-account')}}:</h6>
                            <p>
								{{trans('lang.securing-account-sum')}}
                            </p>

						</div>
					</div>
					<div class="col-md-6 col-sm-6 res-pt-xs-20">
						<div class="msn-vsn text-center">
							<img src="images/other/digital-forensics.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Mission Vission Area End -->


@endsection