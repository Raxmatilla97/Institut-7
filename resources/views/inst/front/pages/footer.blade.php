@extends('layouts.front.sayt-app')

@section('footer')
     <!--footer start-->
     <footer class="footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="second-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center lazyload" data-src="images/footer-logo.png" alt="">
                            </div>
                            <div class="textwidget widget-text">
                                <p class="pb-10 pr-30 res-575-pr-0">Uniaro University was established by J.H Merthon in 1920 for the public benefit. Afterwards, it is recognized globally</p>
                            </div>
                        </div>
                        <div class="widget widget_timing clearfix">
                            <h3 class="widget-title">Opening Hours</h3>
                            <div class="ttm-timelist-block-wrapper">
                                <ul class="ttm-timelist-block pr-15">
                                    <li>Mon - sat <span class="service-time">09am - 05pm</span></li>
                                    <li>Sunday<span class="service-time">Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Usefull Links</h3>
                            <ul id="menu-footer-quick-links">
                                <li><a href="home-3.html#">Physics & Astronomy</a></li>
                                <li><a href="home-3.html#">General Engineering</a></li>
                                <li><a href="home-3.html#">Departments Services</a></li>
                                <li><a href="home-3.html#">Geography & Geology</a></li>
                                <li><a href="home-3.html#">Campus Directions</a></li>
                                <li><a href="home-3.html#">Academic Solutions</a></li>
                                <li><a href="home-3.html#">About Our College</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget style2 widget-out-link clearfix">
                           <h3 class="widget-title">Recent Posts</h3>
                            <ul class="widget-post ttm-recent-post-list pr-5">
                                <li>
                                    <a href="blog-single.html"><img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-one-150x150.jpg') }}" alt="post-img"></a>
                                    <span class="post-date">August 12, 2019</span>
                                    <a href="blog-single.html">I Turned A Challenge Into A Positive Thing</a>
                                </li>
                                <li>
                                    <a href="blog-single.html"><img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-two-150x150.jpg') }}" alt="post-img"></a>
                                    <span class="post-date">september 28, 2019</span>
                                    <a href="blog-single.html">Choose The Right Place, At The Right Time</a>
                                </li>
                                <li>
                                    <a href="blog-single.html"><img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-three-150x150.jpg') }}" alt="post-img"></a>
                                    <span class="post-date">October 30, 2019</span>
                                    <a href="blog-single.html">Build Responsive Real World Websites</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Our Services</h3>
                            <ul id="menu-footer-services">
                                <li><a href="home-3.html#">Certification</a></li>
                                <li><a href="home-3.html#">Resources</a></li>
                                <li><a href="home-3.html#">E Learning</a></li>
                                <li><a href="home-3.html#">Book Store</a></li>
                                <li><a href="home-3.html#">Kids Courses</a></li>
                                <li><a href="home-3.html#">Admissions</a></li>
                                <li><a href="home-3.html#">Employment</a></li>
                                <li><a href="home-3.html#">Membership</a></li>
                            </ul>
                        </div>
                        <div class="widget widget-text clearfix">
                           <h3 class="widget-title">Newsletter</h3>
                            <form id="subscribe-form" method="post" action="home-3.html#" data-mailchimp="true">
                                <div class="ttm_subscribe_form">
                                    <input type="email" name="email" placeholder="Enter Email Address Here...." required="">
                                    <button class="btn" type="submit"> <i class="fa fa-paper-plane-o"></i> </button>
                                </div>
                                <div class="subscribe-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul id="menu-footer-menu" class="footer-nav-menu ttm-textcolor-white">
                            <li><a href="home-3.html#">Employees</a></li>
                            <li><a href="home-3.html#">Privacy Policy</a></li>
                            <li><a href="home-3.html#">Free Language Services</a></li>
                            <li><a href="home-3.html#">Terms Of Use</a></li>
                            <li><a href="home-3.html#">Contact</a></li>
                            <li><a href="home-3.html#">Webmaster Login</a></li>
                        </ul>
                        <div class="d-sm-flex flex-row align-items-center justify-content-center pt-35 pb-15">
                            <img data-src="images/footer-award-one.png" class="img-fluid lazyload" alt="award-one">
                            <div class="ml-30 pl-30 border-left res-575-ml-0 res-575-pl-0 res-575-mt-20">
                                <img data-src="images/footer-award-two.png" class="img-fluid lazyload" alt="award-two">
                            </div>
                        </div>
                        <div class="text-center pb-15">Copyright © 2019 Uniaro Theme by <a href="https://themetechmount.com/">ThemetechMount</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
@endsection