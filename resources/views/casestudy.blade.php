@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Case Study
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Media
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Case Study</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Case Study
            </div>
        </div>
    </div>
@stop


@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <h2>Case Study</h2>


        <div class="row">
            <div class="content">
                <div class="col-md-12">
                    @foreach ($casestudies as $casestudy)
                            <!-- BEGIN FEATURED POST -->
                    {{--<div class="featured-post-wide thumbnail">
                        <div class="featured-text relative-left">
                            <h3 class="primary">{!! $casestudy->title !!}</h3>
                            <hr>
                            <h5>Short Description</h5>
                            <p>
                                {!! $casestudy->description !!}
                            </p>
                            <hr>
                            <h5>Over All</h5>
                            <p>
                            <div class="item">{!! $casestudy->overall !!}</div>
                            </p>
                        </div>
                    </div>--}}

                                <div class="featured-post-wide thumbnail col-md-4 panel-danger animated zoomIn" style="margin:10px;">
                                    <div class="">
                                        <div><a href="#"><img class="img img-responsive" style="width: 100%" src="{{ asset('assets/images/image_16.jpg') }}" width="290" height="200" alt="Reserach Findings" title="Reserach Findings"></a></div>
                                    </div>
                                    <div class="panel-heading" style="font-weight: bold; font-size: 22px; background-color:#571966 ; color:#ffffff;padding:10px; ">
                                      <a href="#">{!! $casestudy->title !!} <i class="livicon" data-name="angle-double-right" data-size="20" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                    </div>

                                    <div class="featured-text relative-left" style="min-height:250px; padding:25px;">
                                        <div>{!! $casestudy->description !!}</div>
                                    </div>
                                    <div class="pull-right">        <span><a href="" target="_parent" title="More about EPC Evidence-Based Reports"><span style="padding:5px;">More </span><i class="livicon" data-name="arrow-circle-right" data-size="20" data-loop="true" data-c="#571966" data-hc="#571966"></i> </a></span> </div>
                                </div>
                    @endforeach

                </div>

            </div>
        </div>


    </div>

    @stop

{{-- page level scripts --}}
@section('footer_scripts')
        <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->

@stop