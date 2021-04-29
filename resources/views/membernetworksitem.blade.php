@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Membership And Networking List
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
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="{{ route('membernetworksitem') }}">Membership And Networking List</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Membership And Networking link
            </div>
        </div>
    </div>
    @stop


    @section('content')
            <!-- Container Section Start -->
    <div class="container">
        <h2>Membership And Networking</h2>


        <div class="row">
            <div class="content" style="color: black">

                <div class="col-md-8 " >
                    @foreach ($membernetworks as $membernetwork)
                            <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail wow fadeInLeft" data-wow-duration="2.5s">

                        <div class="featured-text relative-left">
                            <h3 class="primary">{!! $membernetwork->title !!}</h3>

                            <h5>Email</h5>
                            <p>
                                {!! $membernetwork->email !!}
                            </p>

                            <hr>
                            <h5>To learn More Please Visit</h5>
                            <p>
                                {!! $membernetwork->weblink !!}
                            </p>
                            <p class="text-right">
                                <a href="{!! $membernetwork->weblink !!}" class="btn btn-primary text-white">Learn more</a>



                        </div>

                    </div>
                    @endforeach

                </div>

            </div>
        </div>


    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop