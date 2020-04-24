@extends('layouts.front.sayt-app')
@section('main-menyu')
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row">
                            <!-- site-branding -->
                            <div class="site-branding mr-auto">
                                <a class="home-link" href="index.html" title="Uniaro" rel="home">
                                    <img id="logo-img" class="img-center lazyload" data-src="{{ asset('frontend/images/logo-img.png') }}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item active">
                                        <a href="home-3.html#" class="mega-menu-link">Home</a>
                                        <ul class="mega-submenu">
                                            <li><a href="index.html">Home School</a></li>
                                            <li><a href="home-2.html">Home University</a></li>
                                            <li class="active"><a href="home-3.html">Home Institute</a></li>
                                            <li><a href="home-4.html">Home College</a></li>
                                            <li><a href="home-shop.html">Home Shop</a></li>
                                            <li class="mega-menu-item">
                                                <a href="home-3.html#" class="mega-menu-link">Header Styles</a>
                                                <ul class="mega-submenu">
                                                    <li><a href="index.html">Header Style 01</a></li>
                                                    <li><a target="_blank" href="header-style-02.html">Header Style 02</a></li>
                                                    <li><a target="_blank" href="header-style-03.html">Header Style 03</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item megamenu-fw">
                                        <a href="home-3.html#" class="mega-menu-link">Pages</a>
                                        <ul class="mega-submenu megamenu-content" role="menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-menu col-md-4">
                                                        <h6 class="title">Page List 01</h6>
                                                        <div class="content">
                                                            <ul class="menu-col">
                                                                <li><a href="about-us.html">About Us</a></li>
                                                                <li><a href="about-us-2.html">About Us 2</a></li>
                                                                <li><a href="gallery.html">Gallery</a></li>
                                                                <li><a href="element.html">Element</a></li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- end col-3 -->
                                                    <div class="col-menu col-md-4">
                                                        <h6 class="title">Page List 02</h6>
                                                        <div class="content">
                                                            <ul class="menu-col">
                                                                <li><a href="instructors.html">Our Instructors</a></li>
                                                                <li><a href="instructor-profile.html">Instructor Profile</a></li>
                                                                <li><a href="faq.html">Faq</a></li>
                                                                <li><a href="error.html">Error Page</a></li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- end col-3 -->
                                                    <div class="col-menu col-md-4">
                                                        <h6 class="title">Page List 03</h6>
                                                        <div class="content">
                                                            <ul class="menu-col">
                                                                <li><a href="shop.html">Shop</a></li>
                                                                <li><a href="product-details.html">Single Product Details</a></li>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>    
                                                </div><!-- end row -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="home-3.html#" class="mega-menu-link">Courses</a>
                                        <ul class="mega-submenu">
                                            <li><a href="courses.html">Courses</a></li>
                                            <li><a href="courses-single.html">Course Single View</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="home-3.html#" class="mega-menu-link">Blog</a>
                                        <ul class="mega-submenu">
                                            <li><a href="blog.html">Blog Classic</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-single.html">Blog Single View</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="shop.html" class="mega-menu-link">Shop</a>
                                        <ul class="mega-submenu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-details.html">Single Product Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="home-3.html#" class="mega-menu-link">Contact Us</a>
                                        <ul class="mega-submenu">
                                            <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                            <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                <div class="header_search">
                                    <a href="home-3.html#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                    <div class="header_search_content">
                                        <form id="searchbox" method="get" action="home-3.html#">
                                            <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                            <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header_cart">
                                    <a href="home-3.html#" class="button-cart">
                                        <div class="cart_icon"><i class="fa fa-shopping-cart"></i></div>
                                        <div class="cart_count">0</div>
                                    </a>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header><!--header end-->
@endsection