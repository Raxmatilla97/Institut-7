@extends('layouts.front.sayt-app')
@section('blog-section')
    

        <!--blog-section-->
        <section class="ttm-row blog-section bg-img2 ttm-bgcolor-grey ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container" style="max-width: 1600px">
                 <!-- row -->
                <div class="row align-items-center">
                    <div class="col-xl-10 col-lg-10 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <div class="title-header">
                                <h5>OTM AXBOROT XIZMATI</h5>
                                <h2 class="title">OTM YANGILIKLARI</h2>
                            </div>
                            <div class="title-desc">Institutda bo'layotgan so'ngi yangilik va tadbirlarni bu yerda o'qishingiz mumkin. Yanayam ko'proq yangiliklarni ko'rish uchun <strong>Barcha yangiliklar</strong> tugmasidan foydalaning.</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark mb-15 float-lg-right" href="index.html#">Barcha yangiliklar</a>
                    </div>
                </div><!-- row end -->
                <!-- slick_slider -->
                <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1300,"settings":{"slidesToShow": 3}},{"breakpoint":950,"settings":{"slidesToShow": 2}}, {"breakpoint":540,"settings":{"slidesToShow": 1}}]}'>
                   
                    
                    @foreach ($article as $item)
                    <div class="ttm-box-col-wrapper col-lg-4">
                                                   
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="ttm-post-thumbnail featured-thumbnail"> 
                                <img class="img-fluid lazyload" data-src="{{ route('index.site') }}/{{ $item->image }}" alt="image">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-08-12T08:47:17+00:00">{{ $item->created_at }}</time>
                                    </span>
                                </div>
                                <div class="post-meta">
                                    <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                                    <span class="ttm-meta-line cat-link"><i class="fa fa-tag"></i>General Knowledge</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="blog-single.html">{{ $item->title }}</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>{{ Str::limit($item->description, 5, 10)  }}</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                        
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!--blog-section end-->

@endsection