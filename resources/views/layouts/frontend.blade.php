@php
$roles = DB::table('menu_models')->get();
$logo = DB::table('logo_models')->get();
$day = DB::table('day_models')->get();
$time = DB::table('time_models')->get();
$icon = App\IconModel::all();
$open = App\TimeModel::all()->first();
$user = auth()->user();
$ss= explode(",",$open->opentime);



$lo = App\LogoModel::all();
$ll= App\BannerModel::all();
$llw= App\AboutModel::all();

@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Mirrored from www.hassandesigns.top/html/megashine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 08:46:16 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'School') }}</title>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Settings CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/rs-plugin/css/settings.css') }}">
    <!-- Jquery Fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" media="screen" />
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" id="colors">
    <!-- Open Sans Family -->
    <link href="{{ asset('frontend/fonts/css0f7c.css') }}?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Roboto Family -->
    <link href="{{ asset('frontend/fonts/cssb1e5.css') }}?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>

    <!--Header Start-->
    <div class="header-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="logo">

              <a href="{{url('/')}}">

@foreach($lo as $key)
@if($key->status==1)
  <img src="{{asset($key->uploadlogo)}}">
@else
  <h2>{{$key->title}}</h2>

@endif
@endforeach
               </a>


            </div>
          </div>
          <div class="col-lg-8">

            <!--Navegation Start-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container"> <a class="navbar-brand" href="#">Menu</a>
                <div class="navbar-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                </div>


                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">


                       @foreach($roles as $key)
                       <li class="nav-item"> <a class="nav-link" href="contact-us.html">{{$key->name}}</a> </li>

@endforeach

<!--
                    <li class="nav-item active"> <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"> <a class="nav-link" href="about.html">About</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="classes.html">Classes</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="classes.html">Classes</a></li>
                        <li><a href="class-details.html">Singal Classes</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="gallery.html">Gallery</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#.">Pages</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="about.html">About</a> </li>
                        <li><a href="teachers.html">Our Teacher</a></li>
                        <li><a href="pricing-table.html">Our Pricing</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="typoghrapy.html">Typoghrapy</a></li>
                        <li><a href="404-page.html">404</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="teachers.html">Teachers</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="teachers.html">Teachers</a></li>
                        <li><a href="teacher-details.html">Teachers Details</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="blog.html">Blog</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="blog.html">Blog with Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="contact-us.html">Contact</a> </li>
-->
                  </ul>
                </div>



              </div>
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
            </nav>

            <!--Navegation End-->
          </div>
        </div>
      </div>
    </div>
    <!--Header End-->




























































        <main class="py-4">
            @yield('content')
        </main>


    <!--Footer Start-->
    <footer class="footer bg-style">
      <div class="container">
        <div class="footer-upper">
          <div class="row">
            <div class="col-lg-3 col-md-6" style="color:#bdbcc0">
              <div class="footer-widget about-widget"> <a href="{{url('/')}}"> @foreach($lo as $key)
              @if($key->status==1)
                <img src="{{asset($key->uploadlogo)}}">
              @else
                <h2>{{$key->title}}</h2>

              @endif
              @endforeach</a>
                @foreach($llw as $key)
                  @php

                     echo substr("$key->about",0,150)."<br>";
                  @endphp



                    @endforeach
                <ul class="social">
                  @foreach($icon as $key)

                    <li><a href="{{$key->link}}"> {!! $key->icon!!}</a> </li>
                  @endforeach



                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="footer-widget contact">
                <h3 class="title">Get in Touch</h3>
                <div class="widget-content">


                  <ul class="contact-info">
                    <li><span class="icon fa fa-home"></span>1234 Lorem street, dollor <br>
                      Avenue,</li>
                    <li><span class="icon fa fa-phone"></span>(777) 123 4567</li>
                    <li><span class="icon fa fa-envelope"></span>info@school.com</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="footer-widget quick-links">
                <h3 class="title">Useful Link</h3>
                <ul>
                  @foreach($roles as $key)
                  <li><a href="#">{{$key->name}}</a> </li>
                  @endforeach


                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-widget opening-hour">
                <h3 class="title">Oppening Hours</h3>
                <ul class="day-time">
                  @foreach($day as $day)
                  <li>{{$day->startday}}-{{$day->endday}}<span>{{$day->starttime}}-{{$day->endtime}}</span> </li>

                  @endforeach



                  @foreach($ss as $day)
                  <li>  {{$day}}<span> Closed</span> </li>

                  @endforeach




                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer End-->

    <!--Copyright Start-->
    <div class="footer-bottom text-center">
      <div class="container">
        <div class="copyright-text">Copyright © Kids School 2019. All Rights Reserved</div>
      </div>
    </div>
    <!--Copyright Start-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend/js/jquery-3.2.1.slim.min.js') }}"></script>
    <!-- Popper min -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!-- Bootstrap min file -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Revolution Slider file -->
    <script src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('frontend/js/isotope.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <!-- Jquery Fancybox -->
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('frontend/js/counter.js') }}"></script>
    <!-- general script file -->
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script>
        jQuery(document).ready(function($){  
            $('#result').html(function(){	
                var text= $(this).text().split(' ');
                var last = text.pop();
                return text.join(" ") + (text.length > 0 ? ' <span class="last">'+last+'</span>' : last);   
            });
             $('#result2').html(function(){	
                var text= $(this).text().split(' ');
                var last = text.pop();
                return text.join(" ") + (text.length > 0 ? ' <span class="last">'+last+'</span>' : last);   
            });
        });
    </script>
    </body>
</html>
