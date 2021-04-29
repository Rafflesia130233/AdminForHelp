@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Objectives
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
                    <a href="#">Objectives</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Objectives
            </div>
        </div>
    </div>
@stop




@section('content')
        <!-- Container Section Start -->
<div class="container">
    <div class="row news">
        <div class="col-md-8">
            <h2>Objectives<h2>
            <div class="featured-post-wide thumbnail"style="height: 500px;width: 1200px">
                <ul style="list-style-type:circle;color: black;font-size: 20px">
                        <li>To ensure the safety of life and livelihood for the poor and climate vulnerable people and poverty reduction. </li>
                        <li>Establishment of social justice and empowerment of disadvantaged and backward community.</li>
                        <li>Development of women, children, adolescents, youths, olds, orphans and disables.</li>
                        <li>Conservation of nature, environment, natural resources, biodiversity and wildlife.</li>
                        <li>Take steps for adaptation of climate change and risk reduction of natural disaster.</li>
                        <li>Conduct survey and research for different programs</li>
                        <li>Take steps for development of education, health, nutrition, agriculture, fisheries and livestock for self employment. </li>
                </ul>
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