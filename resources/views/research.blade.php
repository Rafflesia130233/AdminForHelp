@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Research
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Program
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Research</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Research
            </div>
        </div>
    </div>
    @stop

    @section('content')
            <!-- Container Section Start -->
    <div class="container">
        <h2>Research</h2>


        <div class="row">
            <div class="content">
                <div class="col-md-8">
                    @foreach ($programs as $program)
                            <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail">

                        <div class="featured-text relative-left">
                            <h3 class="primary">{!! $program->title !!}</h3>
                            <hr>

                            <h5>Over All Research</h5>
                            <p>
                                {!! $program->overall !!}
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