@extends('layouts.master')

@section('content')
<!-- Banner Area Start -->
<div class="banner-area pt-130 pb-120 bg-7 overlay-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-page text-center text-white text-uppercase">
							<h1>{{trans('lang.portfolio-details')}}</h1>
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
								<li class="active">{{trans('lang.portfolio-details')}}</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb Area End -->
			<!-- Portfolio Details Area Start -->
            <section class="portfolio-details ptb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="portfolio-details-content white-bg">
							<div class="portfolio-titel ptb-30 text-center text-uppercase">
								<h4>{{trans('lang.project-title')}}</h4>
							</div>
							<div class="portfolio-image">
								<img src="images/portfolio-details/1.jpg" alt="" />
							</div>
							<div class="project-area">
								<div class="project-details set-bg text-white">
									<h5>{{trans('lang.project-details')}}</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut dost rutrum nunc. Donec rhoncus lacus sed mauris feugiat ultrices. ism Mauris veles sapien sem. lovess uisque nec lectus sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum  fermentum est, it’ss laoreet congue nulla. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut dost rutrum nunc. </p>
								</div>
								<div class="project-details set-half-bg text-white">
									<h5>{{trans('lang.project-info')}}</h5>
									<div class="project-information">
										<ul>
											<li><span>{{trans('lang.project-name')}} : </span>Corporate Illustration</li>
											<li><span>{{trans('lang.company')}} :  </span>Centro Text Limited</li>
											<li><span>{{trans('lang.category')}} : </span>Print, App , Web design</li>
											<li><span>{{trans('lang.work-duration')}} :  </span>200 Weeks & 5 Days</li>
											<li><span>{{trans('lang.budget')}} :  </span>$8000</li>
										</ul>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Portfolio Details Area End -->





@endsection