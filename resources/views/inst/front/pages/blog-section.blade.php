@extends('layouts.front.sayt-app')
@section('blog-section')
    
<section class="ttm-row blog-section bg-img2 ttm-bgcolor-grey ttm-bg ttm-bgimage-yes clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
         <!-- row -->
        <div class="row align-items-center">
            <div class="col-xl-10 col-lg-10 col-md-12">
                <!-- section-title -->
                <div class="section-title style2 clearfix">
                    <div class="title-header">
                        <h5>OUR ARTICLES</h5>
                        <h2 class="title">Latest News &amp; Blog</h2>
                    </div>
                    <div class="title-desc">A comprehensive summary of the day’s most trending blog posts &amp; news articles from the best Education websites on the web.</div>
                </div><!-- section-title end -->
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12">
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark mb-15 float-lg-right" href="index.html#">More News</a>
            </div>
        </div><!-- row end -->
        <!-- slick_slider -->
        <div class="row slick_slider slick-initialized slick-slider" data-slick="{&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;:false, &quot;autoplay&quot;:false, &quot;infinite&quot;:true, &quot;responsive&quot;: [{&quot;breakpoint&quot;:870,&quot;settings&quot;:{&quot;slidesToShow&quot;: 2}}, {&quot;breakpoint&quot;:540,&quot;settings&quot;:{&quot;slidesToShow&quot;: 1}}]}">
            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3800px; transform: translate3d(-1140px, 0px, 0px);" role="listbox"><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 380px;" tabindex="-1">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/blog/blog-two-720x544.jpg')}}" alt="image"> 
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-08-11T08:45:16+00:00">11 August 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line"><i class="fa fa-tag"></i>Web Design</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="-1">Choose The Right Place, At The Right Time</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>He found himself transformed in his bed into a horrible vermin.Ut enim ad minim veniam, quis nostrud exercitation ullamc...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 380px;" tabindex="-1">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyloaded" data-src="{{ asset('frontend/images/blog/blog-three-720x544.jpg')}}" alt="image" src="{{ asset('frontend/images/blog/blog-three-720x544.jpg')}}"> 
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-07-21T08:42:45+00:00">21 July 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line"><i class="fa fa-calendar"></i>Gmat Classes</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="-1">Build Responsive Real World Websites</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaq...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 380px;" tabindex="-1">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyloaded" data-src="{{ asset('frontend/images/blog/blog-four-720x544.jpg')}}" alt="image" src="{{ asset('frontend/images/blog/blog-four-720x544.jpg')}}"> 
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-07-15T08:33:17+00:00">15 July 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line"><i class="fa fa-tag"></i>General Knowledge</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="-1">Orientation Program For The New Students</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium voluptatum deleniti atque dolores etqw...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 380px;" tabindex="-1" role="option" aria-describedby="slick-slide50">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyloaded" data-src="{{ asset('frontend/images/blog/blog-one-720x544.jpg')}}" alt="image" src="{{ asset('frontend/images/blog/blog-one-720x544.jpg')}}">
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-08-12T08:47:17+00:00">12 August 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line cat-link"><i class="fa fa-tag"></i>General Knowledge</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="0">I Turned A Challenge Into A Positive Thing</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 380px;" tabindex="-1" role="option" aria-describedby="slick-slide51">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyloaded" data-src="{{ asset('frontend/images/blog/blog-two-720x544.jpg')}}" alt="image" src="{{ asset('frontend/images/blog/blog-two-720x544.jpg')}}"> 
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-08-11T08:45:16+00:00">11 August 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line"><i class="fa fa-tag"></i>Web Design</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="0">Choose The Right Place, At The Right Time</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>He found himself transformed in his bed into a horrible vermin.Ut enim ad minim veniam, quis nostrud exercitation ullamc...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 380px;" tabindex="-1" role="option" aria-describedby="slick-slide52">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyloaded" data-src="{{ asset('frontend/images/blog/blog-three-720x544.jpg')}}" alt="image" src="{{ asset('frontend/images/blog/blog-three-720x544.jpg')}}"> 
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-07-21T08:42:45+00:00">21 July 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line"><i class="fa fa-calendar"></i>Gmat Classes</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="0">Build Responsive Real World Websites</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaq...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide" data-slick-index="3" aria-hidden="true" style="width: 380px;" tabindex="-1" role="option" aria-describedby="slick-slide53">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyloaded" data-src="{{ asset('frontend/images/blog/blog-four-720x544.jpg')}}" alt="image" src="{{ asset('frontend/images/blog/blog-four-720x544.jpg')}}"> 
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-07-15T08:33:17+00:00">15 July 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line"><i class="fa fa-tag"></i>General Knowledge</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="-1">Orientation Program For The New Students</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium voluptatum deleniti atque dolores etqw...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 380px;" tabindex="-1">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyloaded" data-src="{{ asset('frontend/images/blog/blog-one-720x544.jpg')}}" alt="image" src="{{ asset('frontend/images/blog/blog-one-720x544.jpg')}}">
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-08-12T08:47:17+00:00">12 August 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line byline"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line cat-link"><i class="fa fa-tag"></i>General Knowledge</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="-1">I Turned A Challenge Into A Positive Thing</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 380px;" tabindex="-1">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/blog/blog-two-720x544.jpg')}}" alt="image"> 
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-08-11T08:45:16+00:00">11 August 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line"><i class="fa fa-tag"></i>Web Design</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="-1">Choose The Right Place, At The Right Time</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>He found himself transformed in his bed into a horrible vermin.Ut enim ad minim veniam, quis nostrud exercitation ullamc...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div><div class="ttm-box-col-wrapper col-lg-4 slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 380px;" tabindex="-1">
                <!-- featured-imagebox-post -->
                <div class="featured-imagebox featured-imagebox-post style1">
                    <div class="ttm-post-thumbnail featured-thumbnail"> 
                        <img class="img-fluid lazyload" data-src="{{ asset('frontend/images/blog/blog-three-720x544.jpg')}}" alt="image"> 
                    </div>
                    <div class="featured-content featured-content-post">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <time class="entry-date" datetime="2019-07-21T08:42:45+00:00">21 July 2019</time>
                            </span>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                            <span class="ttm-meta-line"><i class="fa fa-calendar"></i>Gmat Classes</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="blog-single.html" tabindex="-1">Build Responsive Real World Websites</a></h5>
                        </div>
                        <div class="post-desc featured-desc">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaq...</p>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div></div></div>
            
            
            
        </div>
    </div>
</section>

@endsection