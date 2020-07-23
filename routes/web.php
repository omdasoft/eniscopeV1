<?php
view()->share('public',url('/').'/');

//index page
Route::get('/', function(){
  return view('index');
});

//about us page
Route::get('/about', function(){
  return view('about');
});

//blogs page route 
Route::get('/blogs', function(){
  return view('blogs');
});

//blog details page 
Route::get('/blog-details', function(){
  return view('blog-details');
});

//contact us page
Route::get('/contact-us', function(){
  return view('contact-us');
});

//tech service page
Route::get('/tech-service', function(){
  return view('tech-service');
});

//managment service page
Route::get('/admin-service', function(){
  return view('admin-service');
});

//managment service page
Route::get('/forensic-analysis-service', function(){
  return view('forensic-analysis-service');
});

//hr service page
Route::get('/hr-service', function(){
  return view('hr-service');
});

//power waste service page
Route::get('/power-waste-service', function(){
  return view('power-waste-service');
});


//image show
Route::get('/imageshow', function(){
  return view('imageshow');
});

//portfolio projects
Route::get('/portfolio', function(){
  return view('portfolio');
});

//portfolio details
Route::get('/portfolio-details',function(){
  return view('portfolio-details');
});

//admin resource route
Route::resource('/admins','AdminController');


//language controller
Route::get('/lang/{lang}','langController@lang');

Auth::routes();

  //display admin login form 
  Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  //submit admin login data
  Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  //logout admin
  Route::get('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  //return admin dashboard
  Route::get('/admin', 'AdminController@index')->name('admin.dashboard');


 











