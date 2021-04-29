@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Donors AND Partners
    @parent
    @stop

    @section('header_styles')
            <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Donors And Partners
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Donors AND Partners</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Donors AND Partners
            </div>
        </div>
    </div>
    @stop


    @section('content')
            <!-- Container Section Start -->
    <div class="container">
        <h2>Donors And Partners</h2>


        <div class="row">
            <div class="content">
                <div class="col-md-8">
                    @foreach ($donorandpartners as $donorandpartner)
                            <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail"style="width:100%;color: black;font-size: 15px">

                        <div class="featured-text relative-left">
                            <h5><strong>Donor Or Partner Name</strong></h5>
                            <h3 class="primary">{!! $donorandpartner->title !!}</h3>
                            <hr>
                            <h5><strong>Organization Name</strong></h5>
                            <h3 class="primary">{!! $donorandpartner->organizationname !!}</h3>
                            @if($donorandpartner->image)
                                <img src="{{ URL::to('/uploads/crudfiles/'.$donorandpartner->image)  }}" class="img-responsive" alt="Image">
                            @endif
                            <hr>
                            <h5><strong>Short Description</strong></h5>
                            <p>
                                {!! $donorandpartner->description !!}
                            </p>

                            <hr>
                            <h5><strong>Over All</strong></h5>
                            <p>
                                {!! $donorandpartner->overall !!}
                            </p>
                            <h5><strong>Donorand or Partner</strong></h5>
                            <p>
                                {!! $donorandpartner->donorandorpartner !!}
                            </p>
                            <h5><strong>Field of Donation</strong></h5>
                            <p>
                                {!! $donorandpartner->fieldofdonation !!}
                            </p>
                            <h5><strong>Field of Partnership</strong></h5>
                            <p>
                                {!! $donorandpartner->fieldofpartnership !!}
                            </p>
                            <h5><strong>Weblink</strong></h5>
                            <p>
                                {!! $donorandpartner->weblink !!}
                            </p>

                            <p class="text-right">
                                <!--string={!! $donorandpartner->weblink !!}-->
                                <!--<a href="http://www.cap-net.org/about-cap-net/" class="btn btn-primary text-white">Learn more</a>-->
                                <a href="{!! $donorandpartner->weblink !!}" class="btn btn-primary text-white">Learn more</a>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>
        </div>


    </div>

@stop

@section('footer_scripts')

@stop