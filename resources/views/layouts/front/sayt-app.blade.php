<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Academics and Education Html Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
<title>Uniaro &#8211; Academics and Education Html Template </title>

<!-- favicon icon -->
<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}"/>

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/themify-icons.css') }}"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.css') }}"/>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/prettyPhoto.css') }}">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/shortcodes.css') }}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/megamenu.css') }}"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}"/>


</head>


<body>

    <!--page start-->
    <div class="page">


        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
        

            @yield('fbar-main')

            @yield('top-bar')
            
            @yield('main-menyu')

        @yield('slider-banner') 

    <!--site-main start-->
    <div class="site-main">


        @yield('start-1')


        @yield('about-us')

        @yield('popular-cource')

        @yield('our-events')

        @yield('whay-choose')


        @yield('happy-students')

        @yield('team-tichers')


        @yield('admission')

        @yield('blog-section')

    </div><!--site-main end-->


        @yield('footer')
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="home-3.html#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/tether.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('frontend/js/jquery.easing.js') }}"></script>    
    <script src="{{ asset('frontend/js/jquery-waypoints.js') }}"></script>    
    <script src="{{ asset('frontend/js/jquery-validate.js') }}"></script> 
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/numinate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/lazysizes.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- Javascript end-->

</body>
</html>