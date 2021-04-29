@extends('layouts/default')

{{-- Page title --}}
@section('title')
HelpsBD

@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl.carousel/css/owl.theme.css') }}">
    <!--end of page level css-->
@stop




{{-- slider --}}
@section('top')
    <!--Carousel Start -->
    <!--<section class="purchas-main"style="background-color: #008cba">
        <!--<div class="container bg-border wow pulse" data-wow-duration="2.5s"style="background-color: #FFFFFF">
            <div class="row"style="background-color: #FFFFFF">
                <div class="col-md-7 col-sm-7 col-xs-12"style="width:88.33333333%">
                    <h1 class="purchae-hed" style="color: #047439; margin-left: 550px; ">Welcome to </h1>
                    <h1 class="purchae-hed" style="color: #047439 ">The Human, Environment and Livelihood Promotion Society (HELPS) </h1>
                </div>

            </div>
        </div>-->
    <!--</section>-->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="{{ asset('assets/images/slide_1.jpg') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('assets/images/slide_2.jpg') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('assets/images/slide_3.jpg') }}" alt="slider-image">
        </div>
    </div>
    <!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')



    <!-- Layout Section Start -->
    <section class="feature-main">
        <div class="container">
            <div class="row">
                <div class="text-center wow flash" data-wow-duration="3s">
                    <h3 class="border-success"><span class="heading_border bg-success">Working Area</span></h3>
                    <!-- <label class=" text-center"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label>-->
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12 wow zoomIn" data-wow-duration="3s">
                    <div id="map" style="width:100%;height:500px"></div>

                    <script>
                        function myMap() {
                            var khulna = {lat: 22.846552, lng: 89.539708};
                            var shatkhira = {lat: 22.729555, lng: 89.068204};
                            var bagerhat = {lat: 22.682120, lng: 89.755060};
                            var mapCanvas = document.getElementById("map");
                            var mapOptions = {
                                center: new google.maps.LatLng(22.846552, 89.539708),
                                zoom: 10
                            }

                            var map = new google.maps.Map(mapCanvas, mapOptions);
                            var marker1 = new google.maps.Marker({
                                position: khulna,
                                map: map
                            });
                            var marker2 = new google.maps.Marker({
                                position: shatkhira,
                                map: map
                            });
                            var marker3 = new google.maps.Marker({
                                position: bagerhat,
                                map: map
                            });
                        }



                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

                    </body>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 wow lightSpeedIn" data-wow-duration="1.5s">
                    <ul class="list-unstyled pull-right text-right layout-styl">

                        <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Khulna </li>
                        <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Shatkhira </li>
                        <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i> Bagerhat </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //Layout Section Start -->
    <!-- Accordions Section End -->
    <div class="container">
        <div class="row">
            <!-- Accordions Start -->
            <div class="text-center wow flash" data-wow-duration="3s">
                <h3 class="border-success"><span class="heading_border bg-success">About Us</span></h3>
                <!-- <label class=" text-center"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</label>-->
            </div>
            <!-- Accordions End -->
            <div class="col-md-6 col-sm-12 wow slideInLeft" data-wow-duration="1.5s">
                <!-- Tabbable-Panel Start -->
                <div class="tabbable-panel">
                    <!-- Tabbablw-line Start -->
                    <div class="tabbable-line">
                        <!-- Nav Nav-tabs Start -->
                        <!-- //Nav Nav-tabs End -->
                        <!-- Tab-content Start -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="media">
                                    <div class="media-left tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" height="180px" width="70px" src="{{ asset('assets/images/logo.png') }}" alt="image" >
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    The Human, Environment and Livelihood Promotion Society (HELPS) is a voluntary, nonprofit, nonpolitical development organization. The organization has taken a small scale initiative in the southwest coastal region of Bangladesh, an area which is natural hazard-porn for climate change. On 14 February, 2009, a voluntary group of young people with their great effort formed this organization with a view to helping the SIDR affected people in the region so that they could upgrade their life and livelihood.
                                    </p>
                                <p>
                                    To work for the welfare of the poor, landless, disadvantaged, orphan, disable, women, children, old, marginal farmers, Bawalis who depend on the Sundarbans, Mawali (honey collector), fishermen and the people who are at risk due for climate change.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_2">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('assets/images/authors/img2.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Branding iteration conversion market sales advisor holy grail entrepreneur backing. Gen-z non-disclosure agreement holy grail business-to-consumer disruptive deployment marketing channels seed money seed round ramen pivot social proof. Venture creative metrics focus A/B testing crowdfunding. IPhone scrum project user experience freemium interaction design long tail stealth ownership hackathon crowdfunding investor.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_3">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('assets/images/authors/img3.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                     Beta analytics startup direct mailing leverage learning curve www.discoverartisans.com business-to-consumer. IPad metrics channels pivot deployment business plan android burn rate hackathon vesting period research & development launch party user experience. Seed round freemium value proposition learning curve series A financing funding research & development crowdsource.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab_default_4">
                                <div class="media">
                                    <div class="media-left media-middle tab col-sm-12">
                                        <a href="#">
                                            <img class="media-object img-responsive" src="{{ asset('assets/images/authors/img4.jpg') }}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    Paradigm shift twitter pitch research & development venture. Startup partnership www.discoverartisans.com supply chain crowdsource hackathon metrics paradigm shift interaction design influencer holy grail first mover advantage ramen validation. User experience founders burn rate learning curve infographic leverage gen-z supply chain first mover advantage.
                                </p>
                            </div>
                        </div>
                        <!-- Tab-content End -->
                    </div>
                    <!-- //Tabbablw-line End -->
                </div>
                <!-- Tabbable_panel End -->
            </div>
            <div class="col-md-6 col-sm-12 wow slideInRight" data-wow-duration="3s">

                <div class="panel-group" id="accordion">
                    <p>
                        To work for removing poverty, hunger, deprivation, corruption; to build Bangladesh by enhancing merit of young people; to initiate science and technology based education in primary, secondary and college level for creating ideal, skilled and moral human being; to work for creating conscious citizen, eradicating unemployment; to work for strong leadership, human development, education development, sanitation development, human right, good governance, environment conservation, biodiversity, Sundarbans and wildlife conservation; to work for forestation, extension of sustainable agriculture for the saline area; to work for training arrangement for the farmers and income generation for others marginal people; to work for fisheries and animal resource development; to work for adaptation in the risk of climate change; to conduct research for finding new knowledge to fight against disaster, natural hazards, relief and rehabilitations.
                    </p>
                    <p>
                        Strategy for implementation of these is to emphasize local people’s participation, their collaboration, networking, women’s participation, service decentralization; strengthen the civil society, practice of democratic culture, fix sustainable approach in the face of climate change.
                    </p>

                    <!-- Panel Panel-default Start -->
                    <!-- //Panel Panel-
                    <div class="panel panel-default">
                        <div class="panel-heading text_bg">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <span class=" glyphicon glyphicon-plus success"></span>
                                <span class="success">Why Choose Us</span>
                            </a>
                        </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Come and knock on our door. We've been waiting for you. Where the kisses are hers and hers and his. Three's company too. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Here's the story of a man named Brady who was busy with three boys of his own. One two three four five six seven eight Sclemeel schlemazel hasenfeffer incorporated? Till the one day when the lady met this fellow and they knew it was much more than a hunch. Baby if you've ever wondered.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Panle-group End -->
            </div>

        </div>
        </div>
        <!-- //Accordions Section End -->
        <!-- Our Team Start -->
        <div class="row text-center">
            <h3 class=" border-danger"><span class="heading_border bg-danger">Our Team</span></h3>
            <div class="col-md-3 col-sm-5 profile wow fadeInLeft" data-wow-duration="3s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('assets/images/img_3.jpg') }}" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>John Doe</b>
                        <br /> Founder & Partner
                        <br />
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
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('assets/images/img_5.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Francina Steinberg</b>
                        <br /> CEO
                        <br />
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
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInDown" data-wow-duration="3s" data-wow-delay="1s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('assets/images/img_4.jpg') }}" alt="team-image" class="img-responsive">
                    <div class="caption">
                        <b>Audrey Sheldon</b>
                        <br /> Executive Manager
                        <br />
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
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInRight" data-wow-duration="3s" data-wow-delay="1.5s">
                <div class="thumbnail bg-white">
                    <img src="{{ asset('assets/images/img_6.jpg') }}" alt="team-image">
                    <div class="caption">
                        <b>Sam Bellows</b>
                        <br /> Manager
                        <br />
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
            </div>
        </div>
        <!-- //Our Team End -->
        <!-- What we are section Start -->
        <div class="row">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6 wow zoomInLeft" data-wow-duration="3s">
                <div class="text-left">
                    <div>
                        <h4 class="border-warning"><span class="heading_border bg-warning">What We Are</span></h4>
                    </div>
                </div>
                <img src="{{ asset('assets/images/image2.jpg') }}" alt="image_12" class="img-responsive">
                <p>
                    The Human, Environment and Livelihood Promotion Society (HELPS) is a voluntary, nonprofit, nonpolitical development organization. The organization has taken a small scale initiative in the southwest coastal region of Bangladesh, an area which is natural hazard-porn for climate change. On 14 February, 2009, a voluntary group of young people with their great effort formed this organization with a view to helping the SIDR affected people in the region so that they could upgrade their life and livelihood.
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Read more</a></div>
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6 wow zoomInRight" data-wow-duration="3s">
                <div class="text-left">
                    <div>
                        <h4 class="border-success"><span class="heading_border bg-success">About Us</span></h4>
                    </div>
                </div>
                <img src="{{ asset('assets/images/image1.jpg') }}" alt="image_11" class="img-responsive">
                <p>
                    To work for the welfare of the poor, landless, disadvantaged, orphan, disable, women, children, old, marginal farmers, Bawalis who depend on the Sundarbans, Mawali (honey collector), fishermen and the people who are at risk due for climate change.

                    To work for removing poverty, hunger, deprivation, corruption; to build Bangladesh by enhancing merit of young people; to initiate science and technology based education in primary, secondary and college level for creating ideal, skilled and moral human being; to work for creating conscious citizen, eradicating unemployment; to work for strong leadership, human development, education development, sanitation development, human right, good governance, environment conservation, biodiversity, Sundarbans and wildlife conservation; to work for forestation, extension of sustainable agriculture for the saline area; to work for training arrangement for the farmers and income generation for others marginal people; to work for fisheries and animal resource development; to work for adaptation in the risk of climate change; to conduct research for finding new knowledge to fight against disaster, natural hazards, relief and rehabilitations.

                    Strategy for implementation of these is to emphasize local people’s participation, their collaboration, networking, women’s participation, service decentralization; strengthen the civil society, practice of democratic culture, fix sustainable approach in the face of climate change.
                    </p>
                <p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </p>
            </div>
            <!-- //About Us End -->
        </div>
        <!-- //What we are section End -->
        <!-- Testimonial Start -->
            <!-- Testimonial Section End -->
        </div>
        <!-- Testimonial End -->
        <!-- Features Start -->
        <div class="row features">
            <div class="text-center">
                <div class="text-center">
                    <h3 class=" border-warning"><span class="heading_border bg-warning">Ours Management</span></h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="3s">
                <div>
                    <a href="#"><i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#25a3d8" data-hc="#25a3d8"></i></a>
                    <h4 style="color: #057035;"><bold>Management</bold></h4>
                </div>
                <div>
                    <p>
                        <label>"For efficient organizational management HELPS has created different levels of management structure. The members of different level meet regularly for smooth running of the organization."</label>
                    </p>
                </div>
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#ef8424 " data-hc="#ef8424 "></i>
                    </a>
                    <h4 style="color: #057035;"><bold>Project Management Committee Meeting</bold></h4>
                    <p>
                        <label>" Project implementation strategy is discussed and reviewed time to time through active participation of all project staff and senior staff of the organization in the project management committee meeting. For smooth implementation of the project activities action plan is prepared, reviewed and monitored the day to day activities through this meeting"</label>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.8s">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </a>
                    <h4 style="color: #057035;"><bold>Top Management</bold></h4>
                    <p>
                        <label>"The top management of the organization consists of the Executive director, the Advisors and Coordinator of the organization. The top management has the main responsibility to structure the formulated policies for proper implementation as well as coordinate and formulate operational policies and methods. The top management meeting is held monthly."</label>
                    </p>
                </div>

            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-duration="3s" data-wow-delay="1.2s">
                <div>
                    <a href="#"> <i class="livicon" data-name="checked-on" data-size="22" data-loop="true" data-c="#FFD43C" data-hc="#FFD43C"></i>
                    </a>
                    <h4 style="color: #057035;"><bold>General Management</bold></h4>
                    <p>
                        <label>"The general management forum includes all levels of managers of the organization. The general management meeting is the place of strategy dissemination. The general management meeting is held half-yearly. The meeting is the forum learning and sharing of the manager level staffs of the organization."</label>
                    </p>
                </div>

            </div>
        </div>
        <!-- //Features End -->
        <!--
        
        <div class="text-center marbtm10">
            <h3 class="border-danger"><span class="heading_border bg-danger">Our Skills</span></h3>
        </div>
            </div>
        <div class="sliders">
            <!-- Our Skills Start
            <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3.5s">
                <div class="text-center center-block">
                    <div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="90%" data-width="4" data-fontsize="28" data-percent="90" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Bootstrap</strong>
                </div>
                <span>Lorem Ipsum is simply dummy text of the printing and type setting industry</span>
            </div>
                <div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="0.8s">
                <div class="text-center center-block">
                    <div id="myStat4" class="center-block" data-startdegree="0" data-dimension="150" data-text="60%" data-width="4" data-fontsize="28" data-percent="60" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                    <strong class="success">Jquery</strong>
                </div>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
            </div>
                <div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="1.2s">
                <div class="text-center center-block">
                <div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="100%" data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">Html 5</strong>
            </div>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
            </div>
                <div class="col-md-3 col-sm-6 text-center wow zoomIn" data-wow-duration="3s" data-wow-delay="1.8s">
                <div class="text-center center-block">
                <div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="70%" data-width="4" data-fontsize="28" data-percent="70" data-fgcolor="#3abec0" data-bgcolor="#eee"></div>
                <strong class="success">CSS 3</strong>
            </div>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
            </div>
        </div>
            <!-- Our skills Section End -->
        </div>
    </div>
    <!-- //Container End -->
@stop

{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <!--page level js ends-->
@stop
