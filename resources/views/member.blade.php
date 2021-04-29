@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Member
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

    <style>
        .publication-preview {
            position: relative;
            border: 1px solid #bbb;
            height: 115px;
            width: 100px;
            display: block;
            text-decoration: none;
            background-color: rgba(0,0,0,0.2);
            background-image: url(../imgages/default_publication_preview.png);
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .publication-preview .preview-img {
            overflow: hidden;
            width: 100px;
        }
        .publication-preview .preview-action, .publication-preview .preview-icon, .publication-preview .requests-info {
            position: absolute;
            text-align: center;
            transition: opacity 0.2s;
            opacity: 0;
        }
        .publication-preview .preview-icon {
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(187,187,187,0.6);
            color: #333;
        }
        .preview-source-info {
            margin-top: 5px;
            text-align: center;
        }
    </style>
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Member
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Members</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Members
            </div>
        </div>
    </div>
    @stop

    @section('content')
            <!-- Container Section Start -->
    <div class="container">
        <h2>Members Of Helps</h2>


        <div class="row">
            <div class="content profile-publications">
                <div class="col-md-12">
                    @foreach ($members as $member)

                    <div class="row featured-post-wide thumbnail" id="rgw3_581e46c5087b7"style="width:100%;color: black;font-size: 15px">
                        <div class="col-md-3 pull-left">
                            <div id="rgw4_581e46c5087b7" class="js-publication-item-fulltext fulltext-thumb js-widgetContainer">
                                <a class="publication-preview " href="{{ asset('/uploads/crudfiles/'.$member->filePath) }}">

                                    <div class="preview-img ">
                                        <img class="image-responsive " src="{{ asset('/uploads/crudfiles/'.$member->filePath) }}" >
                                    </div>
                                    <div class="preview-icon"> <span class="ico-file-preview"></span>   </div>

                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 pull-right">    </div>
                        <div style="margin-top: -2px">
                            <h5 class="pub-type-and-title">  <span class="publication-type"> <strong>Name:</strong></span>  <span class="publication-title js-publication-title">{!! $member->name !!}</span> </a></h5>
                        </div>
                        <div class="abstract"> <strong>Designation:</strong> {!! $member->designation !!} </span> </div>
                        <div class="abstract"> <strong>Education:</strong> {!! $member->education !!} </span> </div>
                        <div class="abstract"> <strong>Profession:</strong> {!! $member->profession !!} </span> </div>
                        <div class="abstract"> <strong>Remarks:</strong> {!! $member->remarks !!} </span> </div>

                        <div class="featured-text relative-left">
                            {!! $member->description !!}
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
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
@stop