@extends('layouts.master')

@section('content')
<!-- Banner Area Start -->
<div class="banner-area pt-130 pb-120 bg-7 overlay-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-page text-center text-white text-uppercase">
							<h1>{{trans('lang.contact')}}</h1>
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
								<li class="active">{{trans('lang.contact')}}</li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcrumb Area End -->
	<!-- contact us area Start -->
    <section class="map-area-main two">
			<div class="container">
				<div class="row pb-100 pt-150">
					<!-- Contact Left Area Start -->
					<div class="col-md-6">
						<div class="help-contact-area white-bg shadow ptb-100">
							<div class="section-title text-center">
								<h4>{{trans('lang.send-message')}}</h4>
							</div>
							<form id="contact-form" class="form-group" method="POST" action="https://d29u17ylf1ylz9.cloudfront.net/drubo-preview/drubo-light/mail.php">
								<div class="form-single">
									<input type="text" name="name" required id="name" placeholder="{{trans('lang.name')}} *" class="form-control">
								</div>
								<div class="form-single">
									<input type="text" name="email" required id="email" placeholder="{{trans('lang.email')}} *" class="form-control">
								</div>
								<div class="form-textarea">
									<textarea name="message" required id="message" placeholder="{{trans('lang.message')}} *" rows="6" class="form-control"></textarea>
								</div>
								<div class="contact-button">
									<button class="contact-submit" type="submit">{{trans('lang.send')}}</button>
									<p class="form-messege"></p>
								</div>
							</form>
						</div>
					</div>
					<!-- Contact Left Area Start -->
					<!-- Contact Right Area Start -->
					<div class="col-md-6">
						<div class="cntct-right-adrs pl-80">
							<div class="section-title">
								<h4>{{trans('lang.contact')}}</h4>
							</div>
							<div class="adrs-details mt-60">
								<ul>
									<li>
										<a href="#"><i class="zmdi zmdi-pin"></i></a>
										<p>{{trans('lang.address')}}</p>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-email"></i></a>
										<p>0024912300040</p>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-phone"></i></a>
										<p>info@eist-sd.com</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Contact Right Area End -->
				</div>
			</div>
		</section>
		<!-- contact  Area End -->




@endsection