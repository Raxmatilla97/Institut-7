@extends('layouts.front.sayt-app')

@section('our-events')
    <!--event-section-->
    <section class="ttm-row event2-section bg-img1 ttm-bgcolor-darkgrey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h5>OUR EVENTS</h5>
                            <h2 class="title">Our Upcoming Events</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class="row slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 3, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":"300px", "infinite":true, "responsive": [{"breakpoint":991,"settings":{"slidesToShow": 1, "centerPadding":"0px","centerMode":false }} ]}'>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-event -->
                    <div class="featured-imagebox featured-imagebox-event">
                        <div class="ttm-event-thumbnail featured-thumbnail">
                            <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/event/event-img-one.jpg') }}" alt="image">
                            <div class="ttm-box-event-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2019-07-20T07:07:55+00:00">9<span class="entry-month">nov</span></time>
                                </span>
                            </div>
                        </div>
                        <div class="featured-content featured-content-event">
                            <div class="event-title featured-title">
                                <h5><a href="courses-single.html">Build Education Website Using WordPress</a></h5>
                            </div>
                            <div class="ttm-box-meta ttm-events-meta">
                                <div class="ttm-meta-details ttm-event-meta-details">
                                    <div class="ttm-event-meta-item ttm-event-date"> 
                                        <i class="fa fa-clock-o"></i> 8:00 am - 5:00 pm
                                    </div>
                                    <div class="ttm-event-meta-item ttm-event-vanue"> 
                                        <i class="fa fa-map-marker"></i>Manhamman, New York
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-eventbox-footer">
                                 <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor" href="home-3.html#">View Details<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-event end-->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-event -->
                    <div class="featured-imagebox featured-imagebox-event">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/event/event-img-two.jpg') }}" alt="image"> 
                            <div class="ttm-box-event-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2019-07-20T07:07:55+00:00">11<span class="entry-month">sep</span></time>
                                </span>
                            </div>
                        </div>
                        <div class="featured-content featured-content-event">
                            <div class="event-title featured-title">
                                <h5><a href="courses-single.html">Oraganized Science Fair Festival at Uniaro</a></h5>
                            </div>
                            <div class="ttm-box-meta ttm-events-meta">
                                <div class="ttm-meta-details ttm-event-meta-details">
                                    <div class="ttm-event-meta-item ttm-event-date"> 
                                        <i class="fa fa-clock-o"></i> 8:00 am - 5:00 pm
                                    </div>
                                    <div class="ttm-event-meta-item ttm-event-vanue"> 
                                        <i class="fa fa-map-marker"></i>Manhamman, New York
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-eventbox-footer">
                                 <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor" href="home-3.html#">View Details<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-event end-->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-event -->
                    <div class="featured-imagebox featured-imagebox-event">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/event/event-img-three.jpg') }}" alt="image"> 
                            <div class="ttm-box-event-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2019-07-20T07:07:55+00:00">19<span class="entry-month">aug</span></time>
                                </span>
                            </div>
                        </div>
                        <div class="featured-content featured-content-event">
                            <div class="event-title featured-title">
                                <h5><a href="courses-single.html">Cyber Security And Web App Seminar in 2020</a></h5>
                            </div>
                            <div class="ttm-box-meta ttm-events-meta">
                                <div class="ttm-meta-details ttm-event-meta-details">
                                    <div class="ttm-event-meta-item ttm-event-date"> 
                                        <i class="fa fa-clock-o"></i> 8:00 am - 5:00 pm
                                    </div>
                                    <div class="ttm-event-meta-item ttm-event-vanue"> 
                                        <i class="fa fa-map-marker"></i>Manhamman, New York
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-eventbox-footer">
                                 <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor" href="home-3.html#">View Details<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-event end-->
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-20 mb_25 text-center"><p>Don’t hesitate, contact us for better help and services. <u><a href="home-3.html#">View More Events.</a></u></p></div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--event-section-->
@endsection