@extends('layouts.front.sayt-app')

@section('about-us')
    <!--introduction-section-->
    <section class="ttm-row introduction-section clearfix">
        <div class="container" style="max-width: 1600px">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h5>About Uniaro</h5>
                            <h2 class="title">Introduce <br>We Build Everything</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                    <p>Uniaro University was established by J.H Merthon in 1920 for the public benefit. After wards, it is recognized globally. Throughout our great history, Merthon has offered access to a wide range of academic opportunities. Like an international reputation for excellence across the&nbsp; sciences. The University has pioneered change in the sector. We are one of the largest with over 80,000 students. Learn from the experts and faculty who are always engaged in teaching to push the boundaries.</p>
                    <div class="row mt-25 mb-10">
                        <div class="col-lg-6 col-md-5 col-sm-6">
                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Popular online courses training</div></li>
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Guaranted career grow security</div></li>
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Experienced faculty and teachers</div></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-6">
                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Books and Library available</div></li>
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Easy to learn every time wherever</div></li>
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Flexible fee and payment methods</div></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <div class="mt-30 res-991-mt-15">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark" href="home-3.html#">More About Us</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-6">
                            <div class="mt-30 res-991-mt-15 res-991-mb-30">
                                <h6 class="ttm-textcolor-skincolor mb-2">+00-1800 -23456-78</h6>
                                <h6 class="font-weight-normal">Call Us For BCA & BBA Admission</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper">
                        <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/single-img-five.png') }}" alt="">
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--introduction-section end-->

@endsection