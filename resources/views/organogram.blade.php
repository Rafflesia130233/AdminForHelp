@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Organogram
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
                    <a href="#">Organogram</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Organogram
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <div class="row news">
            <div class="col-md-8">
                <!-- News1 Section Start -->
                <div class="blog thumbnail wow slideInLeft" data-wow-duration="3.5s">
                    <label>
                        <h3 class="primary news_headings">The Ogranogram of Helps</h3>
                    </label>

                    <!--<img src="{{ asset('assets/images/img_b2.jpg') }}" alt="image" class="img-responsive">-->
                    <img src="{{ URL::to('/uploads/crudfiles/orgaogram-chart.jpg')  }}" class="img-responsive" alt="Image">

                </div>

            </div>

            <!-- Tab-content End -->
        </div>
        <!-- //Tabbablw-line End -->
    </div>
    <!-- Tabbable_panel End -->

@stop
{{-- page level scripts --}}
@section('footer_scripts')

@stop