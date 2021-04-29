@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Stakeholders /Beneficiaries
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
                    <a href="#">Stakeholders /Beneficiaries</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Stakeholders /Beneficiaries
            </div>
        </div>
    </div>
@stop

@section('content')
        <!-- Container Section Start -->
    <div class="container">
        <div class="row news">
            <div class="col-md-8">
                <h2>Stakeholders Or Beneficiaries</h2>
                <ul class="list-unstyled pull-right text-right layout-styl">
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Vulnerable and disaster affected people </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Poor, hardcore poor, helpless, disadvantaged and backwardness community </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Destitute, divorced, widow, disable, shrimp fry collector, tiger-widow, women in death induced family by tigers, women headed household and working women. </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Marginalized and landless farmer, fisherman, shrimp farmer </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Child, adolescents, youths, aged, orphans and disables </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Students, teachers, school, college, research institutions </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Thatch and wood cutters (Bouali), honey extractors (Mouali) and fishermen </span>
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Ethnic community </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Civil society</span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Local representative and Government representative  </span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">GO, NGO, CBO/VDC and Clubs</span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Writer, novelist, journalist and cultural people</span></li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>  <span style="padding: 0px 10px;text-align: justify;">Beside the above mention groups, based on situation and demand other groups may be </span></li>

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

@stop