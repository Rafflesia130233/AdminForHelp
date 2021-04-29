@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Core Values
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/page/corevalue.css') }}">

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
                    <a href="#">Core Values</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Core Values
            </div>
        </div>
    </div>
@stop


@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <div class="row news">
            <div class="col-md-8">
                <h2>Core Values</h2>
                <ul class="list-unstyled pull-right text-right layout-styl">
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Cooperation and development. </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Gender balance </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Trust, respect  and confidence to work </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Human resource development </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Conservation of environment </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <span style="padding: 0px 10px;text-align: justify;">Poverty reduction, life and livelihood security </span>
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                        <span style="padding: 0px 10px;text-align: justify;">Empowerment of Poor </span>
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">To ensure peoples participation </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Social values and affections </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Transparency and accountability </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Value of work </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Professionalism </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Free environment</span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Honesty and justice</span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Discipline and united</span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Innovativeness and innovation</span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Education, research and cultural practice.</span></li>
                </ul>
            </div>
            <!-- Tab-content End -->
        </div>
        <!-- //Tabbablw-line End -->
    </div>
    <!-- Tabbable_panel End -->

    @stop



{{-- page level scripts --}}
@section('footer_scripts')
        <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->

@stop