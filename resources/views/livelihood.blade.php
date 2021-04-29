@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Livelihood
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/news.css') }}">
    <link href="{{ asset('assets/vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/aboutus.css') }}">
    <link href="{{ asset('assets/vendors/animate/animate.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon-colors.css') }}">

    <!--end of page level css-->
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Program
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Livelihood</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Livelihood
            </div>
        </div>
    </div>
    @stop

    @section('content')
    @if($programs)       <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="row">
            <!-- Left Heading Section Start -->
            <div class="col-md-7 col-sm-12 wow bounceInLeft" data-wow-duration="5s" style="display:block; overflow:hidden;color:black;font-size: 15px">

                <h3 class="primary">{!! $programs->title !!}</h3>

                <h5><strong>Description</strong></h5>
                <p>
                    {!! $programs->description !!}
                </p>
                <h5><strong>Objective</strong></h5>
                <p>
                    {!! $programs->objective !!}
                </p>
                <h5><strong>Approach</strong></h5>
                <p>
                    {!! $programs->approach !!}
                </p>
                <h5><strong>Outcomes</strong></h5>
                <p>
                    {!! $programs->outcomes !!}
                </p>


            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider wow fadeInRightBig" data-wow-duration="5s">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_17.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @stop



    {{-- page level scripts --}}
    {{-- page level scripts --}}
    @section('footer_scripts')
            <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->

@stop