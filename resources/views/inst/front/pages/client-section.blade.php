@extends('layouts.front.sayt-app')
@section('client-section')

  
  <!--client-section-->
  <div class="ttm-row client2-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row ttm-vertical_sep slick_slider" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1199,"settings":{"slidesToShow": 5}} , {"breakpoint":800,"settings":{"slidesToShow": 3}}, {"breakpoint":430,"settings":{"slidesToShow": 2}}]}'>
            <div class="col">
                <div class="client-box">
                    <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                        <div class="ttm-client-logo-tooltip-inner">
                            <div class="client-thumbnail">
                                <img class="lazyload" data-src="{{ asset('frontend/images/client/client-01.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="client-box">
                    <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                        <div class="ttm-client-logo-tooltip-inner">
                            <div class="client-thumbnail">
                                <img class="lazyload" data-src="{{ asset('frontend/images/client/client-02.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="client-box">
                    <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                        <div class="ttm-client-logo-tooltip-inner">
                            <div class="client-thumbnail">
                                <img class="lazyload" data-src="{{ asset('frontend/images/client/client-03.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="client-box">
                    <div class="ttm-client-logo-tooltip" data-tooltip="client-04">
                        <div class="ttm-client-logo-tooltip-inner">
                            <div class="client-thumbnail">
                                <img class="lazyload" data-src="{{ asset('frontend/images/client/client-04.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="client-box">
                    <div class="ttm-client-logo-tooltip" data-tooltip="client-05">
                        <div class="ttm-client-logo-tooltip-inner">
                            <div class="client-thumbnail">
                                <img class="lazyload" data-src="{{ asset('frontend/images/client/client-01.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="client-box">
                    <div class="ttm-client-logo-tooltip" data-tooltip="client-06">
                        <div class="ttm-client-logo-tooltip-inner">
                            <div class="client-thumbnail">
                                <img class="lazyload" data-src="{{ asset('frontend/images/client/client-02.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="client-box">
                    <div class="ttm-client-logo-tooltip" data-tooltip="client-07">
                        <div class="ttm-client-logo-tooltip-inner">
                            <div class="client-thumbnail">
                                <img class="lazyload" data-src="{{ asset('frontend/images/client/client-03.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div><!-- row end -->
    </div>
</div>
<!--client-section end-->

@endsection