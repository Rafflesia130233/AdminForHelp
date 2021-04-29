@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Ongoing Projects
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
    <!--end of page level css-->
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Project
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Ongoing Projects</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Ongoing Projects
            </div>
        </div>
    </div>
@stop

@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <h2>Ongoing Projects</h2>


        <div class="row">
            <div class="content">
                <div class="col-md-8">
                    @foreach ($ongoingprojects as $ongoingproject)
                            <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail">

                        <div class="featured-text relative-left"style="width:100%;color: black;font-size: 15px">
                            <h3 class="primary">{!! $ongoingproject->title !!}</h3>
                            <hr>
                            <h5><strong>Short Description</strong></h5>
                            <p>
                                {!! $ongoingproject->description !!}
                            </p>

                            <h5><strong>Location</strong></h5>
                            <p>
                                {!! $ongoingproject->location !!}
                            </p>

                            <h5><strong>Funding source</strong></h5>
                            <p>
                                {!! $ongoingproject->fundingsource !!}
                            </p>

                            <h5><strong>Over All</strong></h5>
                            <p>
                                {!! $ongoingproject->overall !!}
                            </p>


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