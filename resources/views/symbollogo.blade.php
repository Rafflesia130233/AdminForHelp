@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Symbol OR Logo
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>About Us
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Symbol OR Logo</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Symbol OR Logo
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
                <h2 style="background-color: #5ace72"><label>The Helps Logo </label></h2>
                <p style="color: black">
                    The Human, Environment and Livelihood Promotion Society (HELPS) is a voluntary, nonprofit, nonpolitical development organization. The organization has taken a small scale initiative in the southwest coastal region of Bangladesh, an area which is natural hazard-porn for climate change. On 14 February, 2009, a voluntary group of young people with their great effort formed this organization with a view to helping the SIDR affected people in the region so that they could upgrade their life and livelihood.
                </p>
                <p style="color: black" >
                    To work for the welfare of the poor, landless, disadvantaged, orphan, disable, women, children, old, marginal farmers, Bawalis who depend on the Sundarbans, Mawali (honey collector), fishermen and the people who are at risk due for climate change.
                </p>
                <p style="color: black" >
                    To work for removing poverty, hunger, deprivation, corruption; to build Bangladesh by enhancing merit of young people; to initiate science and technology based education in primary, secondary and college level for creating ideal, skilled and moral human being; to work for creating conscious citizen, eradicating unemployment; to work for strong leadership, human development, education development, sanitation development, human right, good governance, environment conservation, biodiversity, Sundarbans and wildlife conservation; to work for forestation, extension of sustainable agriculture for the saline area; to work for training arrangement for the farmers and income generation for others marginal people; to work for fisheries and animal resource development; to work for adaptation in the risk of climate change; to conduct research for finding new knowledge to fight against disaster, natural hazards, relief and rehabilitations.
                </p>
                <p style="color: black" >
                    Strategy for implementation of these is to emphasize local people’s participation, their collaboration, networking, women’s participation, service decentralization; strengthen the civil society, practice of democratic culture, fix sustainable approach in the face of climate change.
                </p>

            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider wow fadeInRightBig" data-wow-duration="5s" style="height: 200px;width: 200px">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="{{ asset('assets/images/logo.png') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/logo12.png') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/logo.png') }}" alt="slider-image">
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
@stop