<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
    	@section('title')
        | Welcome Helps Bangladesh
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    <!-- Header Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li class="pull-right">
                        <ul class="list-inline icon-position">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="mailto:" class="text-white">info@helpsadmin.com</a></label>
                            </li>
                            <li>
                                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="tel:" class="text-white">(880) 173-6425187</a></label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Start -->
        <nav class="navbar navbar-default container">
            <div class="navbar-header"style="height: 140px;width: 753px">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#">_<i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"style="height: 75px;width: 753px">
                    <img src="{{ asset('assets/images/logomain.png') }}" alt="logo" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li {!! (Request::is('/') ? 'class="active"' : '') !!}><a href="{{ route('home') }}"style="color: darkgreen"> Home</a>
                    </li>
                    <!--<li class="dropdown {!! (Request::is('typography') || Request::is('advancedfeatures') || Request::is('grid') ? 'active' : '') !!}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Features</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('typography') }}">Typography</a>
                            </li>
                            <li><a href="{{ URL::to('advancedfeatures') }}">Advanced Features</a>
                            </li>
                            <li><a href="{{ URL::to('grid') }}">Grid System</a>
                            </li>
                        </ul>
                    </li>-->

                    <li class="dropdown {!! (Request::is('typography') || Request::is('advancedfeatures') || Request::is('grid') ? 'active' : '') !!}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: darkgreen"> About Us</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('HitoricalBackground') }}" style="color: darkgreen">Hitorical Background</a>
                            </li>
                            <li><a href="{{ URL::to('Vison') }}" style="color: darkgreen">Vison</a>
                            </li>
                            <li><a href="{{ URL::to('Mission') }}" style="color: darkgreen">Mission</a>
                            </li>
                            <li><a href="{{ URL::to('objectives') }}" style="color: darkgreen">Objectives</a>
                            </li>
                            <li><a href="{{ URL::to('corevalues') }}" style="color: darkgreen">Core Values</a>
                            </li>
                            <li><a href="{{ URL::to('legalvalues') }}" style="color: darkgreen">Legal Values</a>
                            </li>
                            <li><a href="{{ URL::to('organogram') }}" style="color: darkgreen">Organogram</a>
                            </li>
                            <li><a href="{{ URL::to('symbollogo') }}" style="color: darkgreen">Symbol OR Logo</a>
                            </li>
                            <li><a href="{{ URL::to('StakeholdersOrBeneficiaries') }}" style="color: darkgreen">Stakeholders Or Beneficiaries</a>
                            </li>
                            <li><a href="{{ URL::to('governancesystem') }}" style="color: darkgreen">Governance System</a>
                            </li>
                            <li><a href="{{ URL::to('organizationalpolicies') }}" style="color: darkgreen">Organizational policies</a>
                            </li>
                            <li><a href="{{ URL::to('lawandpolicies') }}" style="color: darkgreen">Law and Policies</a>
                            </li>
                            <li><a href="{{ URL::to('futurePlan') }}" style="color: darkgreen">Future Plan</a>
                            </li>
                        </ul>
                    </li>

                    <!--<li class="dropdown {!! (Request::is('news') || Request::is('news_item') ? 'active' : '') !!}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color: darkgreen"> News</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('news') }}" style="color: mediumseagreen">News</a>
                            </li>
                            <li><a href="{{ URL::to('news_item') }}" style="color: mediumseagreen">News Item</a>
                            </li>
                        </ul>
                    </li>-->

                    <li class="dropdown {!! (Request::is('ongoingprojects') || Request::is('employedprojects') ? 'active' : '') !!}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color: darkgreen"> Project</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('ongoingprojects') }}" style="color: mediumseagreen">Ongoing Projects</a>
                            </li>
                            <li><a href="{{ URL::to('employedprojects') }}" style="color: mediumseagreen">Employed Projects</a>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown {!! (Request::is('humanresourcesdevelopment') || Request::is('environmentstabilities') ? 'active' : '') !!}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color: darkgreen"> Programs </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('humanresourcesdevelopment') }}" style="color: mediumseagreen">Human Resources Development </a>
                            </li>
                            <li><a href="{{ URL::to('environmentstabilities') }}" style="color: mediumseagreen">Environment Stabilities</a>
                            </li>
                            <li><a href="{{ URL::to('livelihood') }}" style="color: mediumseagreen">Livelihood</a>
                            </li>
                            <li><a href="{{ URL::to('climatechangedisasterriskreduction') }}" style="color: mediumseagreen">Climate Change & Disaster Risk Reduction</a>
                            </li>
                            <li><a href="{{ URL::to('research') }}" style="color: mediumseagreen">Research</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown {!! (Request::is('casestudy') || Request::is('pressrelease') || Request::is('images') || Request::is('vedios') || Request::is('publications') ? 'active' : '') !!}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: darkgreen"> Media</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('casestudy') }}"  style="color: mediumseagreen">Case Study</a>
                            </li>
                            <li><a href="{{ URL::to('pressrelease') }}"  style="color: mediumseagreen">Press Release</a>
                            </li>
                            <li><a href="{{ URL::to('images') }}"  style="color: mediumseagreen">Images</a>
                            </li>
                            <li><a href="{{ URL::to('vedios') }}"  style="color: mediumseagreen">Vedios</a>
                            </li>
                            <li><a href="{{ URL::to('publications') }}"  style="color: mediumseagreen">Publications</a>
                            </li>
                        </ul>
                    </li>

                    <li {!! (Request::is('blog') || Request::is('blogitem/*') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('blog') }}"  style="color: darkgreen"> Notice</a>
                    </li>

                    <li {!! (Request::is('donorandpartners') || Request::is('donorandpartners/*') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('donorandpartners') }}"  style="color: darkgreen"> Donors AND Partners</a>
                    </li>

                    <li {!! (Request::is('membernetworks') || Request::is('membernetworks/*') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('membernetworks') }}"  style="color: darkgreen"> Menbership AND Networking</a>
                    </li>


                   <!-- <li {!! (Request::is('membernetworks') || Request::is('membernetworks/*') ? 'class="active"' : '') !!}><a href="{{ URL::to('Test') }}"> Test</a>
                    </li>-->

                    <li {!! (Request::is('boardofadvisor') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('boardofadvisor') }}"  style="color: darkgreen"> Board of Advisor</a>
                    </li>
                    <li {!! (Request::is('achievementandaward') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('achievementandaward') }}"  style="color: darkgreen"> Achievement and award</a>
                    </li>

                    <li {!! (Request::is('member') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('member') }}"  style="color: darkgreen"> Members Of Helps</a>
                    </li>

                    <li {!! (Request::is('contact') ? 'class="active"' : '') !!}>
                        <a href="{{ URL::to('contact') }}"  style="color: darkgreen">Contact</a>
                    </li>
                    {{--based on anyone login or not display menu items--}}
                    @if(Sentinel::guest())
                        <li><a href="{{ URL::to('login') }}"  style="color: darkgreen">Login</a>
                        </li>
                        <li><a href="{{ URL::to('register') }}"  style="color: darkgreen">Register</a>
                        </li>
                    @else
                        <li {{ (Request::is('my-account') ? 'class=active' : '') }}><a href="{{ URL::to('my-account') }}"style="color: darkgreen">My Account</a>
                        </li>
                        <li><a href="{{ URL::to('logout') }}">Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </header>
    <!-- //Header End -->
    
    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')

    <!-- Footer Section Start -->
    <footer style="background-color: #047439">
        <div class="container footer-text"style="background-color: #047439">
            <!-- About Us Section Start -->
            <div class="col-sm-6">
                <h4>About Us</h4>
                <p>
                    The Human, Environment and Livelihood Promotion Society (HELPS) is a voluntary, nonprofit, nonpolitical development organization. The organization has taken a small scale initiative in the southwest coastal region of Bangladesh, an area which is natural hazard-porn for climate change. On 14 February, 2009, a voluntary group of young people with their great effort formed this organization with a view to helping the SIDR affected people in the region so that they could upgrade their life and livelihood. </p>
                <hr id="hr_border2">
                <h4 class="menu">Follow Us</h4>
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //About us Section End -->
            <!-- Contact Section Start -->
            <div class="col-sm-6">
                <h4>Contact Us</h4>
                <ul class="list-unstyled">
                    <li>127 Hazi Ismail Road</li>
                    <li>Banorgati, Khulna-9100, Bangladesh.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:(+880) 41-731836</li>
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Mobile:(+880) 1736-425187</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="text-success" style="cursor: pointer;">
                        info@helpsadmin.com</span>
                    </li>
                    <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Skype:
                        <span class="text-success"  style="cursor: pointer;">Helpsadmin</span>
                    </li>
                </ul>
                <hr id="hr_border">
                <div class="news menu">
                    <h4>News letter</h4>
                    <p>subscribe to our newsletter and stay up to date with the latest news and deals</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="yourmail@mail.com" aria-describedby="basic-addon2" style="background-color: whitesmoke">
                        <a href="#" class="btn btn-primary text-white" role="button">Subscribe</a>
                    </div>
                </div>
            </div>
            <!-- //Contact Section End -->
            <!-- Recent post Section Start -->

            <!-- //Recent Post Section End -->
        </div>
    </footer>
    <!-- //Footer Section End -->
    <div class="copyright">
        <div class="container">

        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>
    <script src="{{asset('assets/js/frontend/style-switcher.js')}}" type="text/javascript"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>
