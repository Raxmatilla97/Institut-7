@extends('layouts.front.sayt-app')

@section('happy-students')


        <!--testimonial-section-->
        <section class="ttm-row testimonial-section ttm-bgcolor-skincolor bg-img5 ttm-bg ttm-bgimage-yes clearfix"> 
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container" style="max-width: 1400px">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>YOSHLAR ITTIFOQI</h5>
                                <h2 class="title">Iqtidorli talabalar</h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div><!-- section title end -->
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false, "autoplay":true, "centerMode":false, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 1}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
                    <div class="ttm-box-col-wrapper col-lg-12">
                        <!-- testimonials -->
                        <div class="testimonials ttm-testimonial-box-view-style2"> 
                            <div class="testimonial-content">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-center lazyload" data-src="{{ asset('frontend/images/testimonial/01.jpg') }}" alt="testimonial-img">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h5>Albie Jackson</h5>
                                    <label>CEO at Themetechmount</label>
                                </div>
                                <blockquote>On the other hand, we denounce with righteous indig- nation and dislike men who are so beguiled and de- moralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble</blockquote>
                            </div>
                        </div><!-- testimonials end -->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-12">
                        <!-- testimonials -->
                        <div class="testimonials ttm-testimonial-box-view-style2"> 
                            <div class="testimonial-content">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-center lazyload" data-src="{{ asset('frontend/images/testimonial/02.jpg') }}" alt="testimonial-img">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h5>Sally Mathison</h5>
                                    <label>Student at Uniaro</label>
                                </div>
                                <blockquote>On the other hand, we denounce with righteous indig- nation and dislike men who are so beguiled and de- moralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble</blockquote>
                            </div>
                        </div><!-- testimonials end -->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-12">
                        <!-- testimonials -->
                        <div class="testimonials ttm-testimonial-box-view-style2"> 
                            <div class="testimonial-content">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-center lazyload" data-src="{{ asset('frontend/images/testimonial/03.jpg') }}" alt="testimonial-img">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h5>Braylin Rose</h5>
                                    <label>CEO At Founder</label>
                                </div>
                                <blockquote>On the other hand, we denounce with righteous indig- nation and dislike men who are so beguiled and de- moralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble</blockquote>
                            </div>
                        </div><!-- testimonials end -->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-12">
                        <!-- testimonials -->
                        <div class="testimonials ttm-testimonial-box-view-style2"> 
                            <div class="testimonial-content">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-center lazyload" data-src="{{ asset('frontend/images/testimonial/01.jpg') }}" alt="testimonial-img">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h5>Albie Jackson</h5>
                                    <label>CEO at Themetechmount</label>
                                </div>
                                <blockquote>On the other hand, we denounce with righteous indig- nation and dislike men who are so beguiled and de- moralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble</blockquote>
                            </div>
                        </div><!-- testimonials end -->
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial-section-->
    
@endsection