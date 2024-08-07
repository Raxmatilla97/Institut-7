@extends('layouts.front.sayt-app')

@section('popular-cource')
     <!--course-section-->
     <section class="ttm-row course-section ttm-bgcolor-grey clearfix">
        <div class="container" style="max-width: 1600px">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h5>OTM AXBOROT XIZMATI</h5>
                            <h2 class="title">OTM E'LONLARI</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                </div>
            </div><!-- row end -->
            <!-- slick_slider -->
            <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":777,"settings":{"slidesToShow": 2}},
            {"breakpoint":590,"settings":{"slidesToShow": 1}}]}'>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-course -->
                    <div class="featured-imagebox featured-imagebox-course">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/course/course-one-526x470.jpg') }}" alt="image"> 
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="featured-content-post-inner">
                                <div class="post-title featured-title">
                                    <h5><a href="courses-single.html">Complete Beginner to the Web Design</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Are you excited to learn the web design, but not start yet...</p>
                                </div>
                            </div>
                            <div class="ttm-course-box-meta">
                                <div class="ttm-enrolled">
                                    <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>78</span>
                                    <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                </div>  
                                <span class="ttm-lp-price"><ins>&#36;69.00</ins></span>                            
                            </div>
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-course -->
                    <div class="featured-imagebox featured-imagebox-course">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/course/course-two-526x470.jpg') }}" alt="image"> 
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="featured-content-post-inner">
                                <div class="post-title featured-title">
                                    <h5><a href="courses-single.html">Learn PHP Programming  From Scratch</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Now PHP is one of the best used programming languages...</p>
                                </div>
                            </div>
                            <div class="ttm-course-box-meta">
                                <div class="ttm-enrolled">
                                    <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>12</span>
                                    <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                </div>                
                                <span class="ttm-lp-price "><ins>&#36;85.00</ins></span>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-course -->
                    <div class="featured-imagebox featured-imagebox-course">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/course/course-three-526x470.jpg') }}" alt="image"> 
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="featured-content-post-inner">
                                <div class="post-title featured-title">
                                    <h5><a href="courses-single.html">Full Data Analysis Course For Beginner</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply rando...</p>
                                </div>
                            </div>
                            <div class="ttm-course-box-meta">
                                <div class="ttm-enrolled">
                                    <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>122</span>
                                    <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>4</span>
                                </div>  
                                <span class="ttm-lp-price"><del>&#36;69.00</del><ins>&#36;45.00</ins></span>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-course -->
                    <div class="featured-imagebox featured-imagebox-course">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/course/course-four-526x470.jpg') }}" alt="image"> 
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="featured-content-post-inner">
                                <div class="post-title featured-title">
                                    <h5><a href="courses-single.html">Masters Course in Adobe Photoshop</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Top-rated Photoshop courses are covers most of all important...</p>
                                </div>
                            </div>
                            <div class="ttm-course-box-meta">
                                <div class="ttm-enrolled">
                                    <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>27</span>
                                    <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                </div>  
                                <span class="ttm-lp-price ttm-free-course"><ins>Free</ins></span>                       
                            </div>
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
                <div class="ttm-box-col-wrapper col-lg-4">
                    <!-- featured-imagebox-course -->
                    <div class="featured-imagebox featured-imagebox-course">
                        <div class="ttm-post-thumbnail featured-thumbnail"> 
                            <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/course/course-two-526x470.jpg') }}" alt="image"> 
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="featured-content-post-inner">
                                <div class="post-title featured-title">
                                    <h5><a href="courses-single.html">Visual Basic Web Courses With Live Project</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Specially designed to gear up for students and job seekers...</p>
                                </div>
                            </div>
                            <div class="ttm-course-box-meta">
                                <div class="ttm-enrolled">
                                    <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>75</span>
                                    <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>2</span>
                                </div>  
                                <span class="ttm-lp-price "><ins>&#36;39.00</ins></span>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-course end-->
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-30 res-991-mt-20 mb_25 text-center"><p>Yanada ko'proq e'lonlar bilan tanishish uchun <u><a href="home-3.html#"><strong>BU YERGA BOSING.</strong></a></u></p></div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--course-section-->

@endsection