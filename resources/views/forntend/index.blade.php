@extends('layouts.frontend')


@section('content')
<!-- Revolution slider start -->
<div class="tp-banner-container sliderWraper">
    <div class="tp-banner">
        <ul>
            @foreach($attach as $key)
            <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="{{ asset($key->pic) }}" data-lazyload="{{ asset($key->pic) }}">
                <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="140" data-speed="600" data-start="1000"> {{$key->word1}}</div>
                <div class="caption lfl large-title tp-resizeme slidertext1" data-x="center" data-y="170" data-speed="600" data-start="1600">{{$key->word2}}</div>
                <div class="caption lft large-title tp-resizeme slidertext3" data-x="center" data-y="285" data-speed="600" data-start="2200">{{ $key->sentence}} </div>
                <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="350" data-speed="600" data-start="2800"><a href="#" class="slidebtn">Get Started <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </li>
            @endforeach


        </ul>
    </div>
</div>
<!-- Revolution slider end -->

<!-- Element Start -->
<div class="element-wrap">
    <div class="container">
        <ul class="row">
            @foreach($low as $key)
            <li class="col-lg-4">
                <div class="elementInfo">
                    <div class="element-icon"><img src="{{ asset('frontend/images/teacher.png') }}" alt=""></div>
                    <h3>{{$key->title}}</h3>
                    <p>{{$key->text}}</p>
                </div>
            </li>
            @endforeach
            @foreach($odd as $key)

            <li class="col-lg-4">
                <div class="elementInfo">
                    <div class="element-icon"><img src="{{ asset('frontend/images/graduation-icon.png') }}" alt=""></div>
                    <h3>{{$key->title}}</h3>
                    <p>{{$key->text}}</p>
                </div>
            </li>

            @endforeach


        </ul>
    </div>
</div>
<!-- Element Endt -->

<!--About Start-->
<div class="about-wrap">
    <div class="container">
        <div class="row">
            @foreach($my as $key)
            <div class="col-lg-6">
                <div class="title">
                    <h1>{{$key->title}} <span></span></h1>
                </div>
                <p><strong>{{$key->subhead}}.</strong></p>
                <p> {!!$key->detail !!} </p>
                <ul class="row iconsWrp">
                    <li class="col-lg-4 col-md-4">
                        <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-home" aria-hidden="true"></i></a>
                            <h6>Active Learning</h6>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4">
                        <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-university" aria-hidden="true"></i></a>
                            <h6>Books & Library</h6>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4">
                        <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-building" aria-hidden="true"></i></a>
                            <h6>Learning & Fun</h6>
                        </div>
                    </li>
                </ul>
                <div class="readmore"><a href="{{$key->link}}">Read More <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
            </div>
            <div class="col-lg-6">
                <div class="aboutImg"><img src="{{ asset($key->pic) }}" alt=""></div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!--About End-->
<!--About Enddddddddddddddddddddd-->

<!--Classes Start-->
<div class="classes class-wrap">
    <div class="container">
        @foreach($AHC as $key)

        <div class="section-header">
            <div class="title">
                <h1 id="result">{{$key->maintitle}}</h1>
            </div>
            <p>{{$key->txt}} </p>
        </div>
        @endforeach




        <ul class="owl-carousel classes-wrap">

            @foreach($schedule as $key)
            <li class="item">
                <div class="class-item">
                    <div class="image"> <img src="{{ asset($key->pic) }}" alt="class image" class="img-responsive">
                        <p><span>{{$key->time_head}}:</span> {{$key->starttime}} - {{$key->endtime}} </p>
                    </div>
                    <div class="content">
                        <h4><a href="class-single.html">{{$key->class_name}}</a></h4>
                        <p>{{$key->detail}}</p>
                    </div>
                    <ul class="schedule">
                        <li> <span>{{$key->size_head}}</span> <span>{{$key->size}}</span> </li>
                        <li> <span>{{$key->ageHead}}</span> <span>{{$key->agerange}}</span> </li>
                        <li> <span>{{$key->feeHead}}</span> <span>{{$key->feeAmount}}</span> </li>
                    </ul>
                </div>
                <!-- class item -->
            </li>
            @endforeach



        </ul>
        <!-- row -->

    </div>
    <!-- container -->
</div>
<!--Classes Start-->

<!--Counter Start-->
<div id="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
                <div class="counterbox">
                    <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <span class="counter-number" data-from="1" data-to="399" data-speed="1000">399</span> <span class="counter-text">Happy Client</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
                <div class="counterbox">
                    <div class="counter-icon"><i class="fa fa-code" aria-hidden="true"></i></div>
                    <span class="counter-number" data-from="1" data-to="8312" data-speed="2000">8312</span> <span class="counter-text">Code Line</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
                <div class="counterbox">
                    <div class="counter-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                    <span class="counter-number" data-from="1" data-to="1632" data-speed="3000">1632</span> <span class="counter-text">Project Finished</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 counter-item">
                <div class="counterbox">
                    <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                    <span class="counter-number" data-from="1" data-to="206" data-speed="4000">206</span> <span class="counter-text">Awards</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Counter End-->

<!--Project Start-->
<div class="project-wrap">
    <div class="container">
        <div class="project-heading">
            <div class="section-header">
                <div class="title">
                    <h1>Our <span>Gallery</span></h1>
                </div>
                <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Nulla felis ipsum, vestibulum quis sagittis lacinia, ultrices eu est. Vivamus vel egestas nibh. In tellus mauris, sodales ac dui in, condimentum dignissim dolor.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-4">
                    <div class="projectImg"><img src="{{ asset('frontend/images/portfolio1.jpg') }}" alt="">
                        <div class="service-overlay">
                            <div class="heading"><a href="#">Gallery Heading</a></div>
                            <p>Art Drawing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="projectImg"><img src="{{ asset('frontend/images/portfolio2.jpg') }}" alt="">
                        <div class="service-overlay">
                            <div class="heading"><a href="#">Gallery Heading</a></div>
                            <p>Art Drawing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="projectImg"><img src="{{ asset('frontend/images/portfolio3.jpg') }}" alt="">
                        <div class="service-overlay">
                            <div class="heading"><a href="#">Gallery Heading</a></div>
                            <p>Art Drawing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="projectImg"><img src="{{ asset('frontend/images/portfolio4.jpg') }}" alt="">
                        <div class="service-overlay">
                            <div class="heading"><a href="#">Gallery Heading</a></div>
                            <p>Art Drawing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="projectImg"><img src="{{ asset('frontend/images/portfolio5.jpg') }}" alt="">
                        <div class="service-overlay">
                            <div class="heading"><a href="#">Gallery Heading</a></div>
                            <p>Art Drawing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="projectImg"><img src="{{ asset('frontend/images/portfolio6.jpg') }}" alt="">
                <div class="service-overlay">
                    <div class="heading"><a href="#">Gallery Heading</a></div>
                    <p>Art Drawing</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="projectImg"><img src="{{ asset('frontend/images/portfolio7.jpg') }}" alt="">
                <div class="service-overlay">
                    <div class="heading"><a href="#">Gallery Heading</a></div>
                    <p>Art Drawing</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="projectImg"><img src="{{ asset('frontend/images/portfolio8.jpg') }}" alt="">
                <div class="service-overlay">
                    <div class="heading"><a href="#">Gallery Heading</a></div>
                    <p>Art Drawing</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="projectImg"><img src="{{ asset('frontend/images/portfolio9.jpg') }}" alt="">
                <div class="service-overlay">
                    <div class="heading"><a href="#">Gallery Heading</a></div>
                    <p>Art Drawing</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Project End-->

<!-- Team start -->
<div class="team-wrap">
    <div class="container">
        
        @foreach($att as $key)
        <div class="section-header">
            <div class="title">
                <h1>{{$key->maintitle}}</h1>
            </div>
            <p> {{$key->txt}}</p>
        </div>
        @endforeach
        
        <ul class="row">
            <li class="col-lg-3 col-md-6">
                <div class="team">
                    <div class="team-image"> <img src="{{ asset('frontend/images/team1.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="socials">
                                <ul class="experts">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-list">
                        <div class="team-info">
                            <h5><a href="#">Stella Roffin</a></h5>
                            <span>Drawing Teacher</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="team">
                    <div class="team-image"> <img src="{{ asset('frontend/images/team2.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="socials">
                                <ul class="experts">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-list">
                        <div class="team-info">
                            <h5><a href="#">Princy Flora</a></h5>
                            <span>English Tutor</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="team">
                    <div class="team-image"> <img src="{{ asset('frontend/images/team3.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="socials">
                                <ul class="experts">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-list">
                        <div class="team-info">
                            <h5><a href="#">Jesica Matt</a></h5>
                            <span>Art Teacher</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="team">
                    <div class="team-image"> <img src="{{ asset('frontend/images/team4.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="socials">
                                <ul class="experts">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-list">
                        <div class="team-info">
                            <h5><a href="#">Janaton Doe</a></h5>
                            <span>Math Teacher</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Attorney start -->

<!-- Our Blog -->
<section class="section-padding white-bg blog-wrap">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            @foreach($bg as $key)
                        <div class="section-header">
                <div class="title">
                    <h1 id="result2">{{$key->maintitle }}</h1>
                </div>
                <p> {{$key->txt }}</p>
            </div>
            @endforeach

        </div>
        <!-- Main Heading -->
        <style>
            .invisiblle {
                padding: 12px 10px;
                width: 100%;
                transform: translateX(-5%);
               box-shadow: 0px 0px 10px 0px #ccc;
                background: #ffffff;
                display: none;
                position: relative;
                border-radius: 4px;


            }
               .invisibllee {
                padding: 12px 10px;
                width: 100%;
                transform: translateX(-5%);
               box-shadow: 0px 0px 10px 0px #ccc;
                background: #ffffff;
                display: none;
                position: relative;
                border-radius: 4px;


            }

            .nn {

                line-height: 20px;
                border-radius: 50%;
                font-size: 20px;
                margin-left: 88%;
                top: 5%;
                right: 3%;
                color: green;
                
            }

            .joy {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                border: 1px solid #ccc;
            }

            .form-rounded {
                border-radius: 1rem;
                height: 40px;
                margin-top: 20px;
            }
            .comli{
                cursor: pointer;
            }
            .comli:hover{
               color: green;
                transition: .5s;
            }
        </style>
        <!-- Our Blogs -->
        <div class="our-blogs">

            <!-- Img Post -->

                    
                    @foreach($bgg as $key)
                        <div class="blog-post-holder">
                <div class="row no-gutters">

                    <!-- Post Img -->
                    <div class="col-lg-6">
                        <div class="post-img"> <img src="{{ asset('frontend/images/img-01.jpg') }}" alt="img-01"></div>
                    </div>
                    <!-- Post Img -->

                    <!-- Post Detail -->
                    <div class="col-lg-6 pull-right">
                        <div class="blog-post-detail holdercomment">

                            <h3>{{$key->maintitle}}</h3>
                            <ul class="meta-post">
                                <li><i class="fa fa-user"></i>My Admin</li>
                                <li><i class="fa fa-clock-o"></i>6 days ago</li>
                                <li class="btn2 comli"><i class="fa fa-comment"></i>10 Comments
                                </li>

                            </ul>

                            <div class="invisiblle">
                                <div class="btn1 btn nn"> &#9866;</div>


                                <div class="media-body">
                                    <div class="well well-lg">
                                        <div> <img src="{{ asset('frontend/images/img-01.jpg') }}" class="joy"> </div>

                                        <p class="media-comment">
                                            {{ $key->txt}}( 12.10am )
                                        </p>

                                    </div>
                                </div>
                                <textarea class="form-control form-rounded" placeholder="Add Comment"></textarea>

                            </div>
                            <p>Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat
                                viverra. Ut dictum sagittis finibus.</p>
                            <div class="readmore"><a href="#">read more</a></div> 
                        </div>
                    </div>
                    @endforeach

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $(".btn1").click(function() {
                                $(".invisiblle").hide();
                            });
                            
                            $(".btn2").click(function() {
                                $(".invisiblle").show();
                            });
                        });

                    </script>
                    <!-- Post Detail -->

                </div>
            </div>
          
            <!-- Img Post -->

            <!-- Slider Post -->
            @foreach($bggo as $key)
            <div class="blog-post-holder">
                <div class="row no-gutters">

                    <!-- Post Detail -->
                    <div class="col-lg-6 pull-right">
                        <div class="post-img"> <img src="{{ asset('frontend/images/img-02.jpg') }}" alt="img-03">
                            <div class="video-title-holder">
                                <div class="video-titel">
                                    <div class="youtube" id="lR4tJr7sMPM-2"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="blog-post-detail">
                            <h3>{{$key->maintitle}}</h3>
                            <ul class="meta-post">
                                <li><i class="fa fa-user"></i>My Admin</li>
                                <li><i class="fa fa-clock-o"></i>6 days ago</li>
                                <li class="btn22 comli"><i class="fa fa-comment"></i>10 Comments</li>
                            </ul>
                            
                            
                                 <div class="invisibllee">
                                <div class="btn11 btn nn"> &#9866;</div>


                                <div class="media-body">
                                    <div class="well well-lg">
                                        <div> <img src="{{ asset('frontend/images/img-01.jpg') }}" class="joy"> </div>

                                        <p class="media-comment">
                                            {{ $key->txt}}( 12.10am )
                                        </p>

                                    </div>
                                </div>
                                <textarea class="form-control form-rounded" placeholder="Add Comment"></textarea>

                            </div>
                            <p>Nunc ullamcorper augue nec accumsan porta. Ut lacinia fgiat
                                viverra. Ut dictum sagittis finibus.</p>
                            <div class="readmore"><a href="#">read more</a></div>
                        </div>
                    </div>

                    
                       
                           
                    <!-- Post Detail -->

                </div>
            </div>
           @endforeach
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script>
                        $(document).ready(function() {
                            $(".btn11").click(function() {
                                $(".invisibllee").hide();
                            });
                            
                            $(".btn22").click(function() {
                                $(".invisibllee").show();
                            });
                        });

                    </script>
            <!-- Slider Post -->

        </div>
        <!-- Our Blogs -->

    </div>
</section>


<!-- Our Blog -->

<style>
    .page-header {
        position: relative;
    }

    .reviews {
        color: #555;
        font-weight: bold;
        margin: 10px auto 20px;
    }

    .notes {
        color: #999;
        font-size: 12px;
    }

    .media .media-object {
        max-width: 120px;
    }

    .media-body {
        position: relative;
        padding-bottom: 10px;
        border-bottom: 1px dashed #ccc;
    }

    .media-date {
        position: absolute;
        right: 25px;
        top: 25px;
    }

    .media-date li {
        padding: 0;
    }

    .media-date li:first-child:before {
        content: '';
    }

    .media-date li:before {
        content: '.';
        margin-left: -2px;
        margin-right: 2px;
    }

    .media-comment {
        margin-bottom: 20px;
    }

    .media-replied {
        margin: 0 0 20px 50px;
    }

    .media-replied .media-heading {
        padding-left: 6px;
    }

    .btn-circle {
        font-weight: bold;
        font-size: 12px;
        padding: 6px 15px;
        border-radius: 20px;
    }

    .btn-circle span {
        padding-right: 6px;
    }

    .embed-responsive {
        margin-bottom: 20px;
    }

    .tab-content {
        padding: 50px 15px;
        border: 1px solid #ddd;
        border-top: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .custom-input-file {
        overflow: hidden;
        position: relative;
        width: 120px;
        height: 120px;
        background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');
        background-size: 120px;
        border-radius: 120px;
    }

    input[type="file"] {
        z-index: 999;
        line-height: 0;
        font-size: 0;
        position: absolute;
        opacity: 0;
        filter: alpha(opacity=0);
        -ms-filter: "alpha(opacity=0)";
        margin: 0;
        padding: 0;
        left: 0;
    }

    .uploadPhoto {
        position: absolute;
        top: 25%;
        left: 25%;
        display: none;
        width: 50%;
        height: 50%;
        color: #fff;
        text-align: center;
        line-height: 60px;
        text-transform: uppercase;
        background-color: rgba(0, 0, 0, .3);
        border-radius: 50px;
        cursor: pointer;
    }

    .custom-input-file:hover .uploadPhoto {
        display: block;
    }

</style>
@endsection
