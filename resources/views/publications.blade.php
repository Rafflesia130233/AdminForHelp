@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Publictions
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Media
                    </a>
                </li>

                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Publictions</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Publictions
            </div>
        </div>
    </div>
    @stop

    @section('content')
            <!-- Container Section Start -->
    <div class="container">
        <h2>Publictions</h2>


        <div class="row">
            <div class="content profile-publications">
                <div class="col-md-12">
                    @foreach ($publications as $publication)
                            <!-- BEGIN FEATURED POST -->
                    {{--<div class="featured-post-wide thumbnail">

                        <div class="featured-text relative-left">
                            <h5>Type</h5>
                            <p>
                                {!! $publication->type !!}
                            </p>

                            <h5>Title</h5>
                            <h3 class="primary">{!! $publication->title !!}</h3>
                            <hr>

                            <h5>Short Description</h5>
                            <p>
                                {!! $publication->description !!}
                            </p>

                            <hr>
                            <h5>Source</h5>
                            <p>
                                {!! $publication->source !!}
                            </p>

                            <hr>
                            <h5>Overview</h5>
                            <p>
                                {!! $publication->overview !!}
                            </p>

                        </div>

                    </div>--}}


                                <div class="row featured-post-wide thumbnail" id="rgw3_581e46c5087b7">
                                    <div class="col-md-3 pull-left">
                                        <div id="rgw4_581e46c5087b7" class="js-publication-item-fulltext fulltext-thumb js-widgetContainer">
                                            <a class="publication-preview " href="{!! $publication->source !!}">

                                                <div class="preview-img ">
                                                    <img class="image-responsive " data-src="../images/smallpreview.png" src="https://i1.rgstatic.net/publication/284251669_A_New_Approach_to_Access_Control_in_Cloud/links/56cdb20808ae059e375329a2/smallpreview.png">
                                                </div>
                                                    <div class="preview-icon"> <span class="ico-file-preview"></span>   </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 pull-right">    </div>
                                    <div style="margin-top: -2px">
                                        <h5 class="pub-type-and-title">  <span class="publication-type"> <strong>Article:</strong></span>    <a class="js-publication-title-link ga-publication-item" href="{!! $publication->source !!}"> <span class="publication-title js-publication-title">{!! $publication->title !!}</span> </a>     </h5>
                                    </div>
                                    <div class="abstract"> <strong>Overview:</strong> {!! $publication->overview !!} </span> </div>

                                    <div class="featured-text relative-left">
                                        {!! $publication->description !!}
                                     </div>
                                    <div class="publication-meta">   Full-text available in <a href="{!! $publication->source !!}" >  {!! $publication->source !!} </a> </div>

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