@extends("_layout")

@section('head')
    <head>
        <title>Masyoun Gardens 2</title>
        <meta name="description" content="Masyoun Gardens 2, a second real estate project in the high demand area of Al Masyoun, located right behind the two Arcadia Residential complexes and opposite to Mahmoud Darwish Museum.">
        <meta name="keywords" content="masyoun, my house, ramallah, my home, investment, apartment">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="en">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="Masyoun Gardens 2" />
        <meta name="twitter:description" content="Masyoun Gardens 2, a second real estate project in the high demand area of Al Masyoun, located right behind the two Arcadia Residential complexes and opposite to Mahmoud Darwish Museum." />
        <meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Masyoun Gardens 2" />
        <meta property="og:description" content="Masyoun Gardens 2, a second real estate project in the high demand area of Al Masyoun, located right behind the two Arcadia Residential complexes and opposite to Mahmoud Darwish Museum." />
        <meta property="og:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <link rel="canonical" href="https://www.masyoungardens.ps" />
        <link rel="alternate" hreflang="en" href="https://www.masyoungardens.ps/">
        <link rel="alternate" hreflang="en" href="https://www.masyoungardens.ps/en/" />
        <link rel="alternate" hreflang="ar" href="https://www.masyoungardens.ps/ar/" />

        <link rel="shortcut icon" href="{{$aws_url}}/img/mg_favicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
        <link href="/assets/css/mg2_style.css" rel="stylesheet">
        <link rel="stylesheet" href="{{$aws_url}}/css/flexslider2.css" type="text/css" media="screen" />
        <script src="{{$aws_url}}/js/flexSlider/modernizr.js"></script>
    </head>
@endsection

@section("content")
    <!-- start About Masyoun -->
    <div class="container-fluid " >
        <div  class="mg2-banner" style="background-image:url({{$aws_url}}/images/MG2-Cover-photo-2.jpg);">
            <div class="image-container" >
                <img class="center-block" src="{{$aws_url}}/images/mg2-logo-banner.png" alt="Masyoun Gardens 2 Logo" width="320px">
                <p class="banner-subtitle-mg2"> Convience, Quality, Affordability</p>
            </div>

            <div class="bottom-menu">
                <a href="#building" id="buildingbtn"> Floor Plans </a> |
                <a href="#apartments" id="apartmentbtn"> Apartments </a> |
                <a href="#services" id="servicesbtn">services </a> <span class="hidden-xs">  | </span>
                <a href="#contact_us" id="contactbtn" class="hidden-xs" >contact us </a>
            </div>
        </div>
    </div>

    <section itemscope itemtype="https://schema.org/Place" class="container-fluid" style="padding-top:30px;">
        <h1>WELCOME TO</h1>
        <h2 itemprop="name">Masyoun Gardens (2)</h2>
        <div class="container-padding mob-container container"  >
            <div class="row" >

                <div class="col-md-6">
                    <img itemprop="image" src="{{$aws_url}}/images/masyoun-gardens-2-welcome.jpg" alt="Masyoun Gardens 2 Building" width="100%" height="auto">
                </div>

                <div itemprop="description" class="col-md-6 col_padding mg2-welcome">
                    <p>After the success of Masyoun Gardens 1, which sold out quickly, UCI has developed a second real estate project in the high demand area of Al Masyoun. The project is located at a higher elevation than Masyoun Gardens 1, right behind the two Arcadia Residential complexes and opposite the Ein Minjd School and the Mahmoud Darwish Museum.
                    </p>
                    <p>
                        Masyoun Gardens 2 is located in Al-Masyoun, one of the finest neighborhood of Ramallah. It consists of three adjacent buildings each with 12 apartments with sizes ranging from 120m² to 160m², designed with modern and high quality interior finishes that meet the needs of a modern Palestinian family.
                    </p>
                    <p>
                        Masyoun Gardens 2 is the optimum residential address for anyone looking for comfort, convenience, access, luxury and a guaranteed affordable investment in Palestine. Through a range of affordable prices and direct financing, Palestinians can now own an apartment in spacious sizes in the finest neighborhoods of Ramallah, where restaurants, parks, hotels, banks, companies, institutions and all public services are just foot steps away.

                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Masyoun -->

    <!-- start News -->
    <section class="container-fluid" style="padding-top:40px; background-color:#f6f6f6;" id="building">
        <h1>Floor Plans</h1>
        <h2>Masyoun Gardens (2)</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10" style="padding:0px; padding-top: 30px;    padding-bottom: 50px;">
                    <div id="myCarousel" class="carousel slide slider-border mg2-slider" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="{{$aws_url}}/images/masyoun-gardens-2-ground-floor.png" alt="Masyoun Gardens 2 - Ground Floor" style="width:100%;">
                                <div class="floor-plan">
                                    <span>Ground Floor Plan</span>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{$aws_url}}/images/masyoun-gardens-2-typical-floor.png" alt="Masyoun Gardens 2 - Typical Floor" style="width:100%;">
                                <div class="floor-plan">
                                    <span>Typical Floor Plan</span>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{$aws_url}}/images/masyoun-gardens-2-parking-floor.png" alt="Masyoun Gardens 2 - Parking Floor" style="width:100%;">
                                <div class="floor-plan">
                                    <span>Parking Floor Plan</span>
                                </div>
                            </div>

                        </div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators mg2-indicators ">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel Buttons Next/Prev -->
                        <div class="mg2_slid_control">
                            <a data-slide="prev"  href="#myCarousel" class="left carousel-control"><i class="glyphicon glyphicon-menu-left"></i></a>
                            <a data-slide="next"  href="#myCarousel" class="right carousel-control"><i class="glyphicon glyphicon-menu-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News -->

    <!-- start Apartments -->
    <section class="container-fluid" style="padding-top:40px;"  id="apartments">
        <h1>the Apartments</h1>
        <h2>Plans and 3D Views </h2>
        <div class="container container-padding">
            <div class="row">
                <section class="slider">
                    <div id="slider" class="flexslider hidden-xs">
                        <ul class="slides">
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-E1.png" alt="Masyoun Gardens 2 - ground floor E1">
                                <div class="plan_iso">
                                    <span>Ground Floor - E1</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (160 m<sup>2</sup>) <br> Garden Area  (209 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-E2.png" alt="Masyoun Gardens 2 - ground floor E2">
                                <div class="plan_iso">
                                    <span>Ground Floor - E2</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (160 m<sup>2</sup>) <br> Garden Area  (84 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-F1.png" alt="Masyoun Gardens 2 - ground floor F1">
                                <div class="plan_iso">
                                    <span>Ground Floor - F1</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (126 m<sup>2</sup>) <br> Garden Area  (110 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-F2.png" alt="Masyoun Gardens 2 - ground floor F2">
                                <div class="plan_iso">
                                    <span>Ground Floor - F2</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (126 m<sup>2</sup>) <br> Garden Area  (125 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-G1.png" alt="Masyoun Gardens 2 - ground floor G1">
                                <div class="plan_iso">
                                    <span>Ground Floor - G1</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (129 m<sup>2</sup>) <br> Garden Area  (91 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-G2.png" alt="Masyoun Gardens 2 - ground floor G2" >
                                <div class="plan_iso">
                                    <span>Ground Floor - G2</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (135 m<sup>2</sup>) <br> Garden Area  (183 m<sup>2</sup>)
                                </div>
                            </li>            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-E1.png" alt="Masyoun Gardens 2 - typical floor E1" >
                                <div class="plan_iso">
                                    <span>Typical Floor - E1</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (160 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-E2.png" alt="Masyoun Gardens 2 - typical floor E2" >
                                <div class="plan_iso">
                                    <span>Typical Floor - E2</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (154-162 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-F1.png" alt="Masyoun Gardens 2 - typical floor F1" >
                                <div class="plan_iso">
                                    <span>Typical Floor - F1</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (121-127 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-F2.png" alt="Masyoun Gardens 2 - typical floor F2" >
                                <div class="plan_iso">
                                    <span>Typical Floor - F2</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (120-126 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-G1.png" alt="Masyoun Gardens 2 - typical floor G1" >
                                <div class="plan_iso">
                                    <span>Typical Floor - G1</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (125-128 m<sup>2</sup>)
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-G2.png" alt="Masyoun Gardens 2 - typical floor G2" >
                                <div class="plan_iso">
                                    <span>Typical Floor - G2</span>
                                </div>
                                <div class="plan_iso_details">
                                    Apartment Area  (120-133 m<sup>2</sup>)
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div id="slider2" class="flexslider hidden-sm hidden-md hidden-lg">
                        <ul class="slides">
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-E1-en.png" alt="Masyoun Gardens 2 - ground floor E1">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-E2-en.png" alt="Masyoun Gardens 2 - ground floor E2">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-F1-en.png" alt="Masyoun Gardens 2 - ground floor F1">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-F2-en.png" alt="Masyoun Gardens 2 - ground floor F2">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-G1-en.png" alt="Masyoun Gardens 2 - ground floor G1">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-G2-en.png" alt="Masyoun Gardens 2 - ground floor G2" >
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-E1-en.png" alt="Masyoun Gardens 2 - typical floor E1" >
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-E2-en.png" alt="Masyoun Gardens 2 - typical floor E2" >
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-F1-en.png" alt="Masyoun Gardens 2 - typical floor F1" >
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-F2-en.png" alt="Masyoun Gardens 2 - typical floor F2" >
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-G1-en.png" alt="Masyoun Gardens 2 - typical floor G1" >
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-G2-en.png" alt="Masyoun Gardens 2 - typical floor G2" >
                            </li>
                        </ul>
                    </div>

                    <div id="carousel" class="flexslider hidden-xs hidden-sm">
                        <ul class="slides">
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-E1.png" alt="Masyoun Gardens 2 ground floor E1"></li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-E2.png" alt="Masyoun Gardens 2 ground floor E2"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-F1.png" alt="Masyoun Gardens 2 ground floor F1"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-F2.png" alt="Masyoun Gardens 2 ground floor F2"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-G1.png" alt="Masyoun Gardens 2 ground floor G1"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-G2.png" alt="Masyoun Gardens 2 ground floor G2"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-E1.png" alt="Masyoun Gardens 2 typical floor E1"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-E2.png" alt="Masyoun Gardens 2 typical floor E2"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-F1.png" alt="Masyoun Gardens 2 typical floor F1"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-F2.png" alt="Masyoun Gardens 2 typical floor F2"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-G1.png" alt="Masyoun Gardens 2 typical floor G1"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-G2.png" alt="Masyoun Gardens 2 typical floor G2"> </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- start services -->

    <section class="container-fluid" style="padding-top:40px; background-color:#f6f6f6; " id="services">
        <h1> Services and Amenities</h1>
        <h2>For Convenience and Comfort</h2>
        <div class="container" style="padding:40px 0;">
            <div class="row">

                <div class="col-xs-12 ser_col">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-parking.png" alt="Car Parking" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">Car Parking</h3>
                        <p class="text-center service-text">A private parking spot for each apartment.</p>
                    </div>
                </div>
                <div class="col-xs-12 ser_col">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-generator.png" alt="Generator" /></div>
                    <div class=" service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">Generator</h3>
                        <p class="text-center service-text">Electrical generator that feeds all public utilities (parking lots, staircases, elevators and fire pumps).</p>
                    </div>
                </div>
                <div class="col-xs-12 ser_col">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-gas.png" alt="Gas Tanks" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">Gas Tanks</h3>
                        <p class="text-center service-text">Central gas tanks for central heating.</p>
                    </div>
                </div>
                <div class="col-xs-12 ser_col">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-elevator.png" alt="Elevators" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">Elevators</h3>
                        <p class="text-center service-text">Each building consists of one elevator.</p>
                    </div>
                </div>
                <div class="col-xs-12 ser_col">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-satellite.png" alt="Central Satellite" /></div>
                    <div class="service-text-box col-xs-9 col-md-12">
                        <h3 class="text-center service-h3">Central Satellite</h3>
                        <p class="text-center service-text">Each residential building of the project has a central satellite that feeds all residential units in the building.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->

    <!--    start Reserve your apartment -->
    <section class="container-fluid">
        <div class="parallax" style="background-image:url({{$aws_url}}/images/masyoungardens-2-call-contact-reserve-apartment.png);">
            <div class="container reserve">
                <h1>Reserve your apartment Now</h1>
                <div class="row" >

                    <div class="col-md-6 col-xs-12 col-sm-6 col-md-offset-3 " style="height:100px;" >
                        <div class="col-xs-4 col-sm-4 col-md-4" style="padding-right:0px;">
                            <img src="{{$aws_url}}/images/call_uci.png" class="img-responsive" alt="call us" style="width:80px; margin-left:auto">
                        </div>
                        <div class="h-card call-box col-xs-8 col-sm-8 col-md-8">
                            <span>CALL US </span><br/>
                            <a class="p-tel" href="tel:+97222947777">+972-2-2974994</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-8 col-md-offset-3 col-xs-offset-2 text-center " style="margin-top:32px;">
                        <a href="https://www.facebook.com/MasyounGardens" target="_blank" ><span class="fa-stack fa-2x" style="color:#3b5998">
                            <i class="fa fa-circle fa-stack-2x" ></i>
                            <i class="fa fa-facebook fa-stack-1x fa-inverse" style="color:#fff"></i>
                            </span>
                        </a>


                        <a href="https://www.instagram.com/masyoun_gardens/" target="_blank" ><span class="fa-stack fa-2x" style="color:#3f729b">
                            <i class="fa fa-circle fa-stack-2x" ></i>
                            <i class="fa fa-instagram fa-stack-1x fa-inverse" style="color:#fff"></i>
                            </span>
                        </a>


                        <a href="https://twitter.com/MasyounGardens" target="_blank" >
                            <img src="{{$aws_url}}/images/twitter-x-icon.svg" class="twitter-icon" style="width: 45px;" alt="twitter">
                        </a>

                        <a href="https://www.linkedin.com/company/masyoun-gardens" target="_blank" ><span class="fa-stack fa-2x" style="color:#0077b5">
                            <i class="fa fa-circle fa-stack-2x" ></i>
                            <i class="fa fa-linkedin fa-stack-1x fa-inverse" style="color:#fff"></i>
                            </span>
                        </a>

                        <a href="https://www.youtube.com/channel/UCHq1ogNezNFZZYNE5fydDEw" target="_blank" ><span class="fa-stack fa-2x" style="color:#e3150e">
                            <i class="fa fa-circle fa-stack-2x" ></i>
                            <i class="fa fa-youtube fa-stack-1x fa-inverse" style="color:#fff"></i>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Reserve your apartment  -->

    @include('contact_us')

@endsection

@section("js")
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

    <!-- FlexSlider -->
    <script defer src="{{$aws_url}}/js/jquery.flexslider2.js"></script>

    <script type="text/javascript">
        $(window).load(function() {

            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 5,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });

            $('#slider2').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
@endsection
