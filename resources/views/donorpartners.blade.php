@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Donors AND Partners
    @parent
@stop

    @section('header_styles')
            <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/donorpartners.css') }}">
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
                    @foreach ($donorpartners as $donorpartner)
                            <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail">

                        <div class="featured-text relative-left">
                            <h5>Donor Name</h5>
                            <h3 class="primary">{!! $donorpartner->donarName !!}</h3>
                            <hr>
                            <h5>Organization Name</h5>
                            <h3 class="primary">{!! $donorpartner->organizationName !!}</h3>
                            <hr>
                            <h5>Short Description</h5>
                            <p>
                                {!! $donorpartner->donarDescription !!}
                            </p>

                            <hr>
                            <h5>Over All</h5>
                            <p>
                                {!! $donorpartner->donationNews !!}
                            </p>

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