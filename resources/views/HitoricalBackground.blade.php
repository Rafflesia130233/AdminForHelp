@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Historical Background
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>About us
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Historical Background</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Historical Background
            </div>
        </div>
    </div>
@stop

@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="row">
            <!-- Left Heading Section Start -->
            <div class="col-md-7 col-sm-12 wow bounceInLeft" data-wow-duration="5s">
                <h2 style="background-color: #5ace72"><label>Historical Background of Helps </label></h2>
                <p style="color: black">
                    While the coastal area is disaster affected by the devastated cyclone SIDR stroke on November 15,2007 homes, crops, infrastructure, environment and ecosystem and the coastal preventive Sundarbans are destructed and all around posed hungry, poverty, scarcity of safe water, homeless people living under open sky, unendurable livings on dam, appreciation from this practical situation object to rehabilitate the helpless coastal people, a devoted young team dedicated to nature and human welfare established Human Environment and Livelihood Promotion Society (HELPS) on Sundarbans and Valentine day February 14, 2009 with a great object to serve.
                </p>
                <p style="color: black" >
                    It is emerged as a non political, non profitable and voluntary organization. Through participation of peoples in all tires, Organization continues its restless efforts to develop the life and livelihoods, environment and biodiversity conservation initiated poverty reduction, development of life and livelihoods, conservation of biodiversity and environment, education, health, nutrition, sanitation and various types of self employment programs and development for the poor and marginalized peoples, the neglected, the tortured, the deprived, the excluded, the orphan, the disable, the youth, the child and the backward women.
                </p>

            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider wow fadeInRightBig" data-wow-duration="5s">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="{{ asset('assets/images/image2.JPG') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_17.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image">
                    </div>
                </div>
            </div>
        </div>
    </div>



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