@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Image Gallery
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
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Media
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Image Gallery</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Image Gallery
            </div>
        </div>
    </div>
    @stop

    @section('content')
            <!-- Container Section Start -->
    <!--<div class="container">
        <h2>Images</h2>


        <div class="row">

                <div class="col-md-12 panel-success "id ="background">
                    <div id=gallery">
                    {{-- */$i=0;/* --}}
                    @foreach ($images as $image)
                            <!-- BEGIN FEATURED POST -->
                    {{--<div class="featured-post-wide thumbnail">

                        @if($image->filePath)
                            <img src="{{ URL::to('/uploads/crudfiles/'.$image->filePath)  }}" class="img-responsive" alt="Image">
                        @endif

                        <div class="featured-text relative-left">

                            <h3 class="primary">{!! $image->title !!}</h3>
                            <hr>

                            <h5>dDescription</h5>
                            <p>
                                {!! $image->description !!}
                            </p>

                            <!--<div class="img-responsive"><a href="{!! '/uploads/crudfiles/'.$image->filePath !!}">{{$image->filePath}}</a></div>
                                -->



                        </div>

                    </div>--}}
                                {{-- */$i++;/* --}}
                              <!--  @if($i%2==0)
                                <figure class="pic1">
                                    @if($image->filePath)
                                        <img src="{{ URL::to('/uploads/crudfiles/'.$image->filePath)  }}" class="img-responsive" alt="Image">
                                    @endif
                                    <figcaption>{!! $image->title !!}</figcaption>
                                        <h5>Description</h5>
                                        <p>
                                            {!! $image->drscription !!}
                                        </p>
                                </figure>

                                    @else
                                <figure class="pic2">
                                    @endif
                                    @if($image->filePath)
                                        <img src="{{ URL::to('/uploads/crudfiles/'.$image->filePath)  }}" class="img-responsive" alt="Image">
                                    @endif
                                    <figcaption>{!! $image->title !!}</figcaption>
                                    <h5>Description</h5>
                                    <p>
                                        {!! $image->drscription !!}
                                    </p>
                                </figure>

                    @endforeach

                    </div>

                </div>


        </div>


    </div>-->


        <!-- Container Section Start -->
    <div class="container">
        <h2 id="portfolio_title">Helps Image Gallery</h2>
        <!-- Images Section Start -->
        <div class="col-md-12" style="padding: 0">
            <div id="gallery">
                @foreach ($images as $image)
                    <div class="col-md-6 wow bounceInLeft" data-wow-duration="1.5s"style="hight:200px;width:200px">
                    <div class="mix category-1">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="{{ asset('/uploads/crudfiles/'.$image->filePath) }}"><i class="fa fa-search-plus"></i></a>

                        </div>
                        <div class="thumb_zoom"><img src="{{ URL::to('/uploads/crudfiles/'.$image->filePath)  }}" class="img-responsive"> </div>
                    </div>

                    <div class="col-md-6 wow bounceInRight" data-wow-duration="1.5s"style="hight:200px;width:200px">

                        <h3>Image Details</h3>
                        <ul style="padding: 0 0 0 10px;color:black">
                            <li><b>Title:</b>&nbsp;<figcaption>{!! $image->title !!}</figcaption></li>
                            <br />
                            <li><b>Description:</b>&nbsp;{!! $image->drscription !!}</li>
                            <br />
                         </ul>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- //Images Section End -->
    </div>
    <!-- Container Section End -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop