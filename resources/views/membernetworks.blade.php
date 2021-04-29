@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Membership And Networking
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Membership And Networking
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Membership And Networking</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Membership And Networking
            </div>
        </div>
    </div>
@stop


@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <h2>Membership And Networking</h2>


            <div class="row">
                <div class="content">
                    <div class="col-md-8" >
                        @foreach ($membernetworks as $membernetwork)
                                <!-- BEGIN FEATURED POST -->
                        <div class="featured-post-wide thumbnail animated fadeInLeft"style="width:100%;color: black;font-size: 15px" >

                            <div class="featured-text relative-left">
                                <h3 class="primary">{!! $membernetwork->title !!}</h3>

                                <h5><strong>Position in Organization</strong></h5>
                                <p>
                                    {!! $membernetwork->positioninorganization !!}
                                </p>
                                <h5><strong>Purpose of Involvement</strong></h5>
                                <p>
                                    {!! $membernetwork->purposeinvolvement !!}
                                </p>

                                <h5><strong>Short Description</strong></h5>
                                <p>
                                    {!! $membernetwork->description !!}
                                </p>

                                <h5><strong>Email</strong></h5>
                                <p>
                                    {!! $membernetwork->email !!}
                                </p>

                                <hr>
                                <h5><strong>To learn More Please Visit</strong></h5>
                                <p>
                                    {!! $membernetwork->weblink !!}
                                </p>


                                <p class="text-right">
                                    <!--string={!! $membernetwork->weblink !!}-->
                                    <!--<a href="http://www.cap-net.org/about-cap-net/" class="btn btn-primary text-white">Learn more</a>-->
                                    <a href="{!! $membernetwork->weblink !!}" class="btn btn-primary text-white">Learn more</a>
                            </div>


                        </div>

                        @endforeach

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
                        <!-- //Slider End -->

                    </div>

                </div>
            </div>


    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop