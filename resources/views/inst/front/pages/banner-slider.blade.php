

@extends('layouts.front.sayt-app')
@section('slider-banner')
<div class="banner-slider slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 1}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
    <!-- banner-slide -->
    <div class="banner-slide">
        <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/slides/slider-mainbg-005.jpg') }}" alt="slider-image"/>
        <div class="banner-caption">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-text ttm-textcolor-white text-center">
                                <div class="logo-icon slideInUp animated mx-auto">
                                    <img class="img-fluid d-inline-block lazyload" data-src="{{ asset('frontend/images/slides/slider-logo-icon.png') }}">
                                </div>
                                <div class="slideInUp animated text font-weight-normal mt-10">UNIARO SCHOOLS</div>     
                                <div class="mt-10 mb-15">
                                    <h2 class="slideInUp animated">Celebrate <span class="ttm-textcolor-skincolor">Uniaro</span> School Week</h2>
                                </div>
                                <h3 class="slideInUp animated font-weight-normal ttm-md-hide">2019 Jan 09 - Feb 03 </h3>                        
                                <div class="slideInUp animated mt-50 res-991-mt-20">
                                    <a href="home-3.html#" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white">Find Out More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-slide -->
    <div class="banner-slide">
        <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/slides/slider-mainbg-006.jpg') }}" alt="slider-image"/>
        <div class="banner-caption">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-text ttm-textcolor-white text-center">
                                <div class="slideInUp animated ttm-shap ttm-bgcolor-skincolor pt-10 pl-20 pr-20 pb-10 ttm-textcolor-white d-inline-block">LEARN. SERVE. LEAD. SUCCEED.</div>
                                <div class="mt-15 mb-15">
                                    <h2 class="slideInUp animated">Own Your  Future By</h2>
                                    <h2 class="slideInUp animated">Learning Skills</h2>
                                </div>
                                <div class="slideInUp animated text">Experience the education revolution. <a href='home-3.html#' class="ttm-textcolor-skincolor">Apply now</a> and start in July. </div>
                                <div class="slideInUp animated mt-50 res-991-mt-20">
                                    <a href="home-3.html#" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white">View All Courses</a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </div>
    </div>
</div>
</div>

@endsection