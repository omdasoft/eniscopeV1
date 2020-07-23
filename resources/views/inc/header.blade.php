<header class="header-area header-wrapper">
	<ul class="lang">
		<?php $lang = \App\lang::where('code','!=',app()->getLocale())->first(); $code = $lang['code']; ?>
		<li><a href="{{url('/lang/'.$code)}}"><image src ="{{$public}}images/flag/{{$code}}.png"></a></li>		
	</ul>
			<!-- Header Top Area Start -->
			<div class="header-top-area">
			   <div class="container">
					<div class="row">
						<!-- Header Top Left Start -->
						<div class="col-md-6 col-sm-7 col-xs-12">
							<div class="header-left ptb-15">
								<ul>
									<li><span><i class="zmdi zmdi-phone"></i></span><a href="#">0024912300040</a></li>
									<li><span><i class="zmdi zmdi-email"></i></span><a href="#">info@eist-sd.com</a></li>
								</ul>
							</div>
						</div>
						<!-- Header Top Left End -->
						<!-- Header Top Right Start -->
						<div class="col-md-6 col-sm-5 col-xs-12">
							<div class="header-right social-icon pull-right">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- Header Top Right End -->
					</div>
			   </div>
			</div>
			<!-- Header Top Area End -->
			<!-- Header Menu Area Start -->
			<div class="main-menu-area broder-top" id="sticky-header">


				<div class="container">
					<div class="row">
						<!-- Logo Area -->
						<div class="col-md-2 col-sm-12 col-xs-12">
							<div class="logo-area">
								<a href="{{url('/')}}"><img src="images/logo/logo.jpg" alt=""/></a>
							</div>
						</div>
						<!-- Logo Area -->
						<!-- Menu Area -->
						<div class="col-md-10 col-sm-12 hidden-xs">
							<div class="main-menu">
								<nav>
									<ul id="nav">
										<li class="active"><a href="{{url('/')}}">{{trans('lang.home')}}</a>
										</li>
										<li><a href="{{url('/about')}}">{{trans('lang.about')}}</a></li>
										<li><a href="#">{{trans('lang.services')}}</a>
												<ul>
													<li><a href="{{url('/tech-service')}}">{{trans('lang.tech-services')}}</a></li>
													<li><a href="{{url('/admin-service')}}">{{trans('lang.admin-services')}}</a></li>
													<li><a href="{{url('/forensic-analysis-service')}}">{{trans('lang.forensic-analysis-services')}}</a></li>
													<li><a href="{{url('/hr-service')}}">{{trans('lang.hr-services')}}</a></li>
													<li><a href="#">{{trans('lang.apps-services')}}</a></li>
													<li><a href="{{url('/power-waste-service')}}">{{trans('lang.waste-electric-services')}}</a></li>
												</ul>
										</li>
										
										<li><a href="{{url('/blogs')}}">{{trans('lang.news')}}</a></li>
										<li><a href="{{url('/imageshow')}}">{{trans('lang.imageshow')}}</a></li>
										<li><a href="{{url('/portfolio')}}">{{trans('lang.portfolio')}}</a></li>
										<li><a href="{{url('/contact-us')}}">{{trans('lang.contact')}}</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<!-- Menu Area -->
					</div>
				</div>
				<!-- MOBILE-MENU-AREA START --> 
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="mobile-area">
									<div class="mobile-menu">
										<nav id="mobile-nav">
											<ul id="nav">
											<li class="active"><a href="{{url('/')}}">{{trans('lang.home')}}</a>
											</li>
											<li><a href="{{url('/about')}}">{{trans('lang.about')}}</a></li>
											<li><a href="#">{{trans('lang.services')}}</a>
												<ul>
													<li><a href="{{url('/tech-service')}}">{{trans('lang.tech-services')}}</a></li>
													<li><a href="{{url('/admin-service')}}">{{trans('lang.admin-services')}}</a></li>
													<li><a href="{{url('/forensic-analysis-service')}}">{{trans('lang.forensic-analysis-services')}}</a></li>
													<li><a href="{{url('/hr-service')}}">{{trans('lang.hr-services')}}</a></li>
													<li><a href="#">{{trans('lang.apps-services')}}</a></li>
													<li><a href="{{url('/power-waste-service')}}">{{trans('lang.waste-electric-services')}}</a></li>
												</ul>
											</li>
											
											<li><a href="{{url('/blogs')}}">{{trans('lang.news')}}</a></li>
											<li><a href="{{url('/imageshow')}}">{{trans('lang.imageshow')}}</a></li>
											<li><a href="{{url('/portfolio')}}">{{trans('lang.portfolio')}}</a></li>
											<li><a href="{{url('/contact-us')}}">{{trans('lang.contact')}}</a></li>
										</ul>
									</nav>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MOBILE-MENU-AREA END  -->
			</div>
			<!-- Header Menu Area End -->
        </header>
        <!-- End of header area -->