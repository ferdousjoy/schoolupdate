
<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'School') }}</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/fonts/flaticon.css') }}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/fullcalendar.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    
    
    
    
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    
    
    
    
    <!-- Modernize js -->
    <script src="{{ asset('dashboard/js/modernizr-3.6.0.min.js') }}"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="backend">
                        <img src="{{ asset('dashboard/img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                        <span></span>
                        <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                            </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">Stevne Zone</h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="{{ asset('dashboard/img/figure/admin.jpg') }}" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Steven Zone</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                    <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="javascript: submitform()"><i class="flaticon-turn-off"></i>Log Out<form name="logout" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></a>
                                    </li>
                                </ul> </div>
                            </div>
                    </li>
                    <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                            <span>5</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">05 Message</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Maria Zaman</span>
                                                <span class="item-time">18:30</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item. Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-yellow author-online">
                                        <img src="img/figure/student12.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Benny Roy</span>
                                                <span class="item-time">10:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item. Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-pink">
                                        <img src="img/figure/student13.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Steven</span>
                                                <span class="item-time">02:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item. Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-violet-blue">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Joshep Joe</span>
                                                <span class="item-time">12:35</span>
                                            </a>
                                        </div>
                                        <p>What is the reason of buy this item. Is it usefull for me.....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                            <span>8</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">03 Notifiacations</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Complete Today Task</div>
                                        <span>1 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Director Metting</div>
                                        <span>20 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Update Password</div>
                                        <span>45 Mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-language">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Spanish</a>
                            <a class="dropdown-item" href="#">Franchis</a>
                            <a class="dropdown-item" href="#">Chiness</a>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
            <!-- Header Menu Area End Here -->
            <!-- Page Area Start Here -->
            <div class="dashboard-page-one">
                <!-- Sidebar Area Start Here -->
                <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                    <div class="mobile-sidebar-header d-md-none">
                        <div class="header-logo">
                            <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="sidebar-menu-content">
                        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                            <li class="nav-item sidebar-nav-item">
                                <a href="backend" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link"><i class="fas fa-angle-right"></i>Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index3.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Students</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index4.html" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index5.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Teachers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item sidebar-nav-item">
                                <a href="setting" class="nav-link"><i class="flaticon-settings"></i><span>Setting</span></a>
                            </li>










                              <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-settings"></i><span>Company Setting</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('logo') }}" class="nav-link"><i class="fas fa-angle-right"></i>Logo</a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('addmenu') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Menu Add</a>
                                    </li>
                                      <li class="nav-item">
                                        <a href="{{ route('addsubmenu') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Sub Menu Add</a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="{{ route('address') }}" class="nav-link"><i
                                          class="fas fa-angle-right"></i>Address </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="{{ route('open') }}" class="nav-link"><i
                                        class="fas fa-angle-right"></i>Open/Close day </a>
                                </li>
                                <li class="nav-item">
                                  <a href="{{ route('about') }}" class="nav-link"><i
                                      class="fas fa-angle-right"></i>About Institution </a>
                              </li>


                                </ul>
                            </li>




                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-settings"></i><span>Banner Setting</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="{{url('banner')}}" class="nav-link"><i class="fas fa-angle-right"></i>Banner Add
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('lower')}}" class="nav-link"><i class="fas fa-angle-right"></i>Banner Character Add
                                        </a>
                                    </li>


                                </ul>
                            </li>



                      <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Page Section</span></a>
                                <ul class="nav sub-group-menu">
                                     
                                     
                                    <li class="nav-item">
                                        <a href="{{url('myself')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>About Page</a>
                                    </li>
                                    
                                </ul>
                            </li>





















                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="all-student.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Students</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="student-details.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="admit-form.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Admission Form</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="student-promotion.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Promotion</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="all-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Teachers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="teacher-details.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Teacher Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-teacher.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Teacher</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="teacher-payment.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Payment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="all-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Parents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="parents-details.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Parents Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Parent</a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                                <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Blog</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="all-parents.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('bloghead')}}" class="nav-link"><i class="fas fa-angle-right"></i>Blog head</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="parents-details.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Parents Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('blog')}}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        new blog</a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="all-book.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Book</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-book.html" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Book</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="all-fees.html" class="nav-link"><i class="fas fa-angle-right"></i>All Fees
                                        Collection</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="all-expense.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Expenses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-expense.html" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Expenses</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i
                                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="{{url('AH1')}}" class="nav-link"><i class="fas fa-angle-right"></i>Class Head</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('allclass')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Classes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('classs')}}" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Class</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="all-subject.html" class="nav-link"><i
                                    class="flaticon-open-book"></i><span>Subject</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="class-routine.html" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                                    Routine</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="student-attendence.html" class="nav-link"><i
                                    class="flaticon-checklist"></i><span>Attendence</span></a>
                            </li>
                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="exam-schedule.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Schedule</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="exam-grade.html" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Grades</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="transport.html" class="nav-link"><i
                                    class="flaticon-bus-side-view"></i><span>Transport</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="hostel.html" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="notice-board.html" class="nav-link"><i
                                    class="flaticon-script"></i><span>Notice</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="messaging.html" class="nav-link"><i
                                    class="flaticon-chat"></i><span>Messeage</span></a>
                            </li>
                            <li class="nav-item sidebar-nav-item">
                                <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                                <ul class="nav sub-group-menu">
                                    <li class="nav-item">
                                        <a href="button.html" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="grid.html" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tab.html" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="progress-bar.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Progress Bar</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('map')}}" class="nav-link"><i
                                    class="flaticon-planet-earth"></i><span>Map</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="account-settings.html" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Account</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar Area End Here -->
                <div class="dashboard-content-one">

                    <main class="py-4">
                        @yield('content')
                    </main>
                    <!-- Social Media Start Here -->
<!--
                    <div class="row gutters-20">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card dashboard-card-seven">
                                <div class="social-media bg-fb hover-fb">
                                    <div class="media media-none--lg">
                                        <div class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <h6 class="item-title">Like us on facebook</h6>
                                        </div>
                                    </div>
                                    <div class="social-like">30,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card dashboard-card-seven">
                                <div class="social-media bg-twitter hover-twitter">
                                    <div class="media media-none--lg">
                                        <div class="social-icon">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <h6 class="item-title">Follow us on twitter</h6>
                                        </div>
                                    </div>
                                    <div class="social-like">1,11,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card dashboard-card-seven">
                                <div class="social-media bg-gplus hover-gplus">
                                    <div class="media media-none--lg">
                                        <div class="social-icon">
                                            <i class="fab fa-google-plus-g"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <h6 class="item-title">Follow us on googleplus</h6>
                                        </div>
                                    </div>
                                    <div class="social-like">19,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card dashboard-card-seven">
                                <div class="social-media bg-linkedin hover-linked">
                                    <div class="media media-none--lg">
                                        <div class="social-icon">
                                            <i class="fab fa-linkedin-in"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <h6 class="item-title">Follow us on linked</h6>
                                        </div>
                                    </div>
                                    <div class="social-like">45,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
-->
                    <!-- Social Media End Here -->
                    <!-- Footer Area Start Here -->
                    <footer class="footer-wrap-layout1">
                        <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                    </footer>
                    <!-- Footer Area End Here -->
                </div>
            </div>
            <!-- Page Area End Here -->
        </div>
        <!-- jquery-->
        <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
        <!-- Plugins js -->
        <script src="{{ asset('dashboard/js/plugins.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
        <!-- Counterup Js -->
        <script src="{{ asset('dashboard/js/jquery.counterup.min.js') }}"></script>
        <!-- Moment Js -->
        <script src="{{ asset('dashboard/js/moment.min.js') }}"></script>
        <!-- Waypoints Js -->
        <script src="{{ asset('dashboard/js/jquery.waypoints.min.js') }}"></script>
        <!-- Scroll Up Js -->
        <script src="{{ asset('dashboard/js/jquery.scrollUp.min.js') }}"></script>
        <!-- Full Calender Js -->
        <script src="{{ asset('dashboard/js/fullcalendar.min.js') }}"></script>
        <!-- Chart Js -->
        <script src="{{ asset('dashboard/js/Chart.min.js') }}"></script>
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
  
    
    
        <!-- Custom Js -->
        <script src="{{ asset('dashboard/js/main.js') }}"></script>
        <script type="text/javascript">
          function submitform()
            {
              document.logout.submit();
            }
        </script>
      <script>
                    function myFunction() {
                        if (!confirm("Are You Sure to delete this"))
                            event.preventDefault();
                    }

                </script>


</body>

</html>
