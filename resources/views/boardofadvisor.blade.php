@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Board of Advisor
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Board of Advisor</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Board of Advisor
            </div>
        </div>
    </div>
@stop

@section('content')
<div class="row text-center">
    <h3 class=" border-danger"><span class="heading_border bg-danger">Our Team</span></h3>

</div>

<div class="row">
    @foreach ($boardofadvisors as $boardofadvisor)
    <div class="col-md-3 col-sm-5 profile wow fadeInLeft" data-wow-duration="3s">
        <div class="thumbnail bg-white">

                    <!-- BEGIN FEATURED POST -->
            <div class="featured-post-wide thumbnail">
                @if($boardofadvisor->filePath)
                    <img src="{{ URL::to('/uploads/crudfiles/'.$boardofadvisor->filePath)  }}" class="img-responsive" alt="Image">
                @endif
                <div class="featured-text relative-left">
                    <h3 class="primary">{!! $boardofadvisor->name !!}</h3>
                    <hr>

                    <p>
                      <strong> Role : </strong>   {!! $boardofadvisor->role !!}
                    </p>
                    <hr>
                    <h5>Address</h5>
                    <p>
                    <div class="item">{!! $boardofadvisor->address !!}</div>
                    </p>
                    <hr>
                    <h5>Contact</h5>
                    <p>
                    <div class="item">{!! $boardofadvisor->contact !!}</div>
                    </p>
                    <hr>
                    <h5>Eductional Background</h5>
                    <p>
                    <div class="item">{!! $boardofadvisor->degree !!}</div>
                    </p>
                </div>
            </div>
            <div class="divide">
                <a href="#" class="divider"> <i class="livicon" data-name="facebook" data-size="22" data-loop="true" data-c="#3a5795" data-hc="#3a5795"></i>
                </a>
                <a href="#"> <i class="livicon" data-name="twitter" data-size="22" data-loop="true" data-c="#55acee" data-hc="#55acee"></i>
                </a>
                <a href="#"> <i class="livicon" data-name="google-plus" data-size="22" data-loop="true" data-c="#d73d32" data-hc="#d73d32"></i>
                </a>
                <a href="#"> <i class="livicon" data-name="linkedin" data-size="22" data-loop="true" data-c="#1b86bd" data-hc="#1b86bd"></i>
                </a>
            </div>


            </div>
        </div>
    @endforeach
    </div>
</div>

@stop


{{-- page level scripts --}}
@section('footer_scripts')

@stop