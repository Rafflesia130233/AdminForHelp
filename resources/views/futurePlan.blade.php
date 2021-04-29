@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Future Plan
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
                    <a href="#">Future Plan</a>
                </li>

            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Future Plan
            </div>
        </div>
    </div>
    @stop

    @section('content')
            <!-- Container Section Start -->
    <div class="container">
        <div class="row news">
            <h2>Future Plan of HELPS</h2>
            <div class="col-md-8">
                <div class="featured-post-wide thumbnail"style="height: 800px;width: 1200px;color:black">
                    <h5><strong>Agriculture Development</strong></h5>
                    <p>
                        Basically southern part of Khulna division is the vulnerable area for climate change risk, as a result most of the area is saline prone and the productivity is reducing gradually day by day for lack of proper irrigation and water management. Farmers are enthusiastic to cultivate only one crop in the year. Our objective in this regards is to adapt new production especially for climate resilient/sustainable technologies like saline tolerant variety, short duration variety, high yield variety, super bag, crops intensification and water and irrigation management so that productivity may increase and farmers may cultivate 2/3 crops in a year.
                    </p>
                    <h5><strong>Livestock Development</strong></h5>
                    <p>
                        In the HEPLS working area till now, farmers are following traditional approach in the case of livestock culturing and facing loses in this regards. Our objective is to provide training on capacity building for fattening the cow and motivation to establish a dairy farm so that their economical crises might develop. Our objective is to make small and medium entrepreneur for establishing livestock farm. We strongly believe that these programs are result with the adaptation of climate change effect.
                    </p>
                    <h5><strong>Poultry Rearing </strong></h5>
                    <p>
                        HELPS commitment is youth development. In this perspective it arranges training on capacity building for poultry rearing for reducing unemployment rate and assists to build up a profitable poultry farm which will be environment pollution free. We also motivate poultry farmers to use the wastage from the poultry in alternative way like fish food, organic fertilizer and other by-product.
                    </p>
                    <h5><strong>Education Program  </strong></h5>
                    <p>
                        HELPS has initiated pre-primary education, non-formal education, dropped out children, children risk to be drop to be out, working children and education for adults. We heartily feel that education is the backbone of a nation. A nation prospers on all the sectors like economic, social, political and agriculture only if the inhabitants are literate. Now HELPS is implementing pre-primary education program in Batiaghata upazilla under Khulna district, but within a short time it will commence it’s another programs like non-formal education, education for adults, dropped out children, children risk to be drop to be out and for the working children in greater Khulna district in rural and urban area.
                    </p>
                    <h5><strong>Research and Study  </strong></h5>
                    <p>
                        In Khulna region, there are no sufficient researchers and research institutions to conduct different survey, study and result sharing. Our plan in this regards is to link with university teachers, research university and research component for developing research oriented programs and take initiatives for research in the new field.
                    </p>
                    <h5><strong>Environment Sustainability  </strong></h5>
                    <p>
                        The adverse effect of global warming and Climate Change is now an increasing reality for the people of Bangladesh, especially in the coastal zone. According to the 3rd Assessment Report of IPCC (2001) the rate, number and intensity of natural disaster is likely to be increased due to global warming, climate change and sea level raise. The super cyclone SIDR and AILA damaged the lives, environment and the wildlife tremendously. HELPS is committed to response the loss of lives, conservation of environment and wildlife. In this regards HELP will commence forestation, mangrove regeneration, natural resources and wetland conservation, conservation of environment and the wildlife. HELPS always gives serious attention to Natural resource management like environment, forestry, agriculture, fisheries & bio-diversity sectors. From the commencement HELPS started its environmental activities through tree plantation, mangrove regeneration, social forestry, forestation in the institutions and nursery establishing program. Till date HELPS completed dozen's of projects on environment & natural resource management
                    </p>


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