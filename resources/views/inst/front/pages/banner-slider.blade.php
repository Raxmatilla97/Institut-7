

@extends('layouts.front.sayt-app')
@section('slider-banner')


<div class="banner-slider slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 1}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
    <!-- banner-slide -->
    <div class="banner-slide">
        <img class="img-fluid lazyload"  data-src="{{ asset('frontend/images/slides/tvchdpi.jpg') }}" alt="slider-image" />
        <div class="banner-caption">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-text ttm-textcolor-white text-center">
                                <div class="logo-icon slideInUp animated mx-auto">
                                    <img class="img-fluid d-inline-block lazyload "  data-src="{{ asset('frontend/images/oq_logo.png') }}" style="width: 200px;">
                                </div>
                                <div class="slideInUp animated text font-weight-normal mt-10"><strong>OLD SITE:institut saytining eski versiyasini quyidagi havola orqali ishlatishingiz mumkin. <a href="#" ><span class="ttm-textcolor-skincolor">BU YERGA!</span></a></strong>  </div>  
                                <div class="mt-10 mb-15">
                                    <h2 class="slideInUp animated">Toshkent viloyati <span class="ttm-textcolor-skincolor">Chirchiq davlat pedagogika</span> instituti</h2>
                                </div>
                                <h3 class="slideInUp animated font-weight-normal ttm-md-hide">SITE BETTA: 2020.05</h3>                        
                                <div class="slideInUp animated mt-50 res-991-mt-20">
                                    <a href="home-3.html#" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white">To'liqroq o'qish</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-slide -->
    <div class="banner-slide ">
        <img class="img-fluid lazyload " data-src="{{ asset('frontend/images/slides/korona_virus.jpg') }}" alt="slider-image"/>
        <div class="banner-caption">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-text ttm-textcolor-white text-center">
                                <div class="slideInUp animated ttm-shap ttm-bgcolor-skincolor pt-10 pl-20 pr-20 pb-10 ttm-textcolor-white d-inline-block">UYDA QOLING! TA'LIM OLING!</div>
                                <div class="mt-15 mb-15">
                                    <h2 class="slideInUp animated">COVID-19</h2>
                                    <h2 class="slideInUp animated">BILIM OLISHGA XALAQIT BERA OLMAYDI!</h2>
                                </div>
                                <div class="slideInUp animated text font-weight-normal mt-10"><strong> Toshkent viloyati Chirchiq davlat pedagogika instituti <span class="ttm-textcolor-skincolor">sirtqi taʼlim 1-bosqich talabalari diqqatiga!</span></a></strong> </div>   
                                <div class="slideInUp animated text">Institutning COVID-19 ga oid so'ngi eloni. </div>
                                <div class="slideInUp animated mt-50 res-991-mt-20">
                                    <a href="home-3.html#" class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white">O'qish uchun</a>
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