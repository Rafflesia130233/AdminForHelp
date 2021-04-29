@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Employed Projects
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
                    <a href="#">Employed Projects</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Employed Projects
            </div>
        </div>
    </div>
@stop


@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <h2>Employed Projects</h2>


        <div class="row">
            <div class="content">
                <div class="col-md-8">
                    @foreach ($employedprojects as $employedproject)
                            <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail"style="width:100%;color: black;font-size: 15px">
                        @if($employedproject->image)
                            <img src="{{ URL::to('/uploads/crudfiles/'.$employedproject->image)  }}" class="img img-responsive" alt="Image" style="max-height:400px">
                        @endif
                        <div class="featured-text relative-left">
                            <h2 class="primary">{!! $employedproject->title !!}</h2>
                            <hr>
                            <h3><strong>Short Description</strong></h3>
                            <p>
                                {!! $employedproject->description !!}
                            </p>

                            <h5><strong>Funding source</strong></h5>
                            <p>
                                {!! $employedproject->fundingsource !!}
                            </p>

                            <h5><strong>Location</strong></h5>
                            <p>
                                {!! $employedproject->location !!}
                            </p>

                            <hr>
                            <h43><strong>Over All</strong></h43>
                            <p>
                            <div class="item">{!! $employedproject->overall !!}</div>
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