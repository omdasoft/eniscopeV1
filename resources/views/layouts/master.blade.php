<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css');?>">
   <!-- This core.css file contents all plugings css file. -->
   <link rel="stylesheet" href="<?php echo asset('css/core.css');?>">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?php echo asset('css/shortcode/shortcodes.css');?>">
    <!-- Nivo Slider -->
    <link rel="stylesheet" href="<?php echo asset('css/nivo-slider.css');?>">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="<?php echo asset('css/magnific-popup.css');?>">
    <!-- Material design iconic font Css -->
    <link rel="stylesheet" href="<?php echo asset('css/material-design-iconic-font.min.css');?>">
    <!-- Venubox Css -->
    <link rel="stylesheet" href="<?php echo asset('css/venobox.css');?>">
    <!-- Mean Menu Css -->
    <link rel="stylesheet" href="<?php echo asset('css/plugins/meanmenu.min.css');?>">
    
     <!-- User style -->
     <link rel="stylesheet" href="<?php echo asset('css/custom.css');?>">
     <!-- Theme main style -->
	<link rel="stylesheet" href="<?php echo asset('css/style.css');?>">
    
    <!-- Owl carsoul Css -->
    <link rel="stylesheet" href="<?php echo asset('css/plugins/owl.carousel.css');?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo asset('css/responsive.css');?>">
    <!-- arabic style -->
    <link rel="stylesheet" href="<?php 
    
        if(app()->getLocale() == 'ar'){
            echo asset('css/ar.css');
        }else{
            echo '';
        }
    
    ?>">
    
     <!-- Modernizr JS -->
     <script src="<?php echo asset('js/vendor/modernizr-2.8.3.min.js');?>"></script>
 
    @yield('styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">

    
     <!-- Body main wrapper start -->
    <div class="wrapper gray-bg">

        @include('inc.header')

        @yield('content')

        @include('inc.footer')
    </div>
   
     <!-- jquery latest version -->
     <script src="<?php echo asset('js/vendor/jquery-1.12.4.min.js');?>"></script>
    <!-- Bootstrap framework js -->
    <script src="<?php echo asset('js/bootstrap.min.js');?>"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?php echo asset('js/plugins.js');?>"></script>
	<!-- Nivo Slider -->
    <script src="<?php echo asset('js/jquery.nivo.slider.pack.js');?>"></script>
	<!-- Magnific Popup -->
    <script src="<?php echo asset('js/jquery.magnific-popup.min.js');?>"></script>
	<!-- Isotope Css -->
    <script src="<?php echo asset('js/isotope.pkgd.min.js');?>"></script>
	<!-- Venobox Css -->
    <script src="<?php echo asset('js/venobox.min.js');?>"></script>
	<!-- Style Customizer JS -->
	<script src="<?php echo asset('js/style-customizer.js');?>"></script>
	<!-- ajax mail js  -->
	<script src="<?php echo asset('js/ajax-mail.js');?>"></script>
	<!-- mail Chimp  -->
	<script src="<?php echo asset('js/jquery.ajaxchimp.min.js');?>"></script>
	<!-- Google Map js -->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<!-- Owl Carosel Js -->
    <script src="<?php echo asset('js/owl.carousel.min.js');?>"></script>
	<!-- Mean Menu js -->
    <script src="<?php echo asset('js/jquery.meanmenu.js');?>"></script>
	<!-- Imageloaded js -->
    <script src="<?php echo asset('js/imagesloaded.pkgd.min.js');?>"></script>
	<!-- Counter Up -->
    <script src="<?php echo asset('js/jquery.counterup.min.js');?>"></script>
	<!-- Waypoints js -->
    <script src="<?php echo asset('js/jquery.waypoints.min.js');?>"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?php echo asset('js/main.js');?>"></script>

    @yield('scripts')
   </body>
   </html>