@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Governance System
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>About us
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Governance System</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Governance System
            </div>
        </div>
    </div>
@stop

@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <h2>Governance System of Helps</h2>
        <div class="row news">
            <div class="col-md-8">
                <div class="featured-post-wide thumbnail"style="height: 600px;width: 1200px">
                <ul>
                    <li style="list-style-type:circle;color: black;font-size: 20px"><b>General Body</b></li>

                    <li style="color: black;font-size: 18px">General Body consists of 31 members, out of them 4 are female. According to the Constitution of HELPS, this body meets once a year. This body-approves activity reports, accounts as per audit reports, plans and programs of the New Year including the budget etc. The General Body also elects an Executive Committee of 7 members for a term of two years. </li>
                    <li style="list-style-type:circle;color: black;font-size: 20px"><b>Executive Committee</b></li>
                    <li style="color: black;font-size: 20px">The General body elects a 7 member Executive committee (EC) for a term of two years. The committee meets at least 4 times a year to discuss and approve periodical plans, programs, performance and achievement reports, statement of accounts, administration, Accounts etc.</li>


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