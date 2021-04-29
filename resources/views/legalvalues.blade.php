@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Legal Values
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>About Us
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Legal Values</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Legal Values
            </div>
        </div>
    </div>
@stop

@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <div class="row news">
            <h2>Organizational Policies of Helps</h2>
            <div class="col-md-8">
                <div class="featured-post-wide thumbnail"style="height: 600px;width: 1200px">
                    <table border="1" bordercolor="green" bgcolor="#adff2f" style="width:100%;color: black;font-size: 20px">
                        <tr>
                            <th>SL.No</th>
                            <th>Registration authority</th>
                            <th>Registration no.</th>
                            <th>Registration date</th>
                            <th>Renewal date</th>
                        </tr>
                        <tr>
                            <td>01.</td>
                            <td>Department of Social Service</td>
                            <td>Khulna/1479/13</td>
                            <td>6 January, 2013</td>
                            <td>19/09/2016</td>
                        </tr>

                    </table>
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