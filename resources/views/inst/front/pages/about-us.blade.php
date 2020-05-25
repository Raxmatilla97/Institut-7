@extends('layouts.front.sayt-app')

@section('about-us')


<style>
    @media (max-width:980px) {
      img#optionalstuff {
        display: none;
      }
    } 
   
    
    
    </style>
    <!--introduction-section-->
    <section class="ttm-row introduction-section clearfix">
        <div class="container" style="max-width: 1600px">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h5>Institut haqida qisqacha</h5>
                            <h2 class="title">OTM TARIXI</h2>
                        </div>
                        <div class="heading-seperator"><span></span></div>
                    </div><!-- section title end -->
                    <p>Institut 0‘zbekiston Respublikasi Prezidentining <strong>2017-yil 27-iyuldagi PQ-3152 </strong>sonli <strong>"Toshkent viloyati Chirchiq davlat pedagogika institutini tashkil etish to`g`risida"</strong>gi Qaroriga asosan maktabgacha, maktab va maktabdan tashqari taʼlim muassasalarining tarbiyachilar, boshlanglch sinf ayniqsa aniq fanlar va chet tillari bo‘yicha o'qituvchilarga bo‘lgan ehtiyojlarini qondirish, tumanlar va qishloq joylaridagi taʼlim muassasalarini yuqori malakali pedagog kadrlar bilan ta'minlash hamda xalqaro standartlar darajasiga mos oliy maʼIumotli pedagogik kadrlar tayyorlash tizimini joylarda tashkil etishni yanada takomillashtirish va ta'lim sifatini yaxshilash maqsadida tashkil etildi.</p>
                   
                    <!-- <h5 class="text-center">Institut haqida qisqacha</h5> -->
                    <div class="row mt-25 mb-10">
                        

                        <div class="col-lg-6 col-md-5 col-sm-6">
                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content"><a href="#">OTM tarixi info suratlarda</a></div></li>
                                <!--<li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Guaranted career grow security</div></li>
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Experienced faculty and teachers</div></li>-->
                            </ul>
                        </div>
                        <!--<div class="col-lg-6 col-md-5 col-sm-6">
                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Books and Library available</div></li>
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Easy to learn every time wherever</div></li>
                                <li><i class="fa fa-arrow-circle-right"></i><div class="ttm-list-li-content">Flexible fee and payment methods</div></li>
                            </ul>
                        </div> -->
                    </div> 
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <div class="mt-30 res-991-mt-15">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark" href="#">Ko'proq o'qish</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-6">
                            <div class="mt-30 res-991-mt-15 res-991-mb-30">
                                <h6 class="ttm-textcolor-skincolor mb-2">+99870 716-68-05 </h6>
                                <h6 class="font-weight-normal">Qabulhona telefon raqami</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper">
                        <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/ikkinchi.png') }}" alt=""  id="optionalstuff">
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--introduction-section end-->

@endsection