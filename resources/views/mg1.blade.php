@extends("_layout")

@section('head')
    <head>
        <title>Masyoun Gardens 1</title>
        <meta name="description" content="Masyoun Gardens 1 residential apartments, comes as an extension of UCI's development creativity, located in Al-Masyoun neighbourhood">
        <meta name="keywords" content="Appartment 130m2, Appartment 140m2, Appartment 155m2, Duplex,  Duplex 240m2, Duplex 251m2,Duplex 266m2,Duplex 298m2, Ground floor,Reserve your apartment Now, Reserve an appartment at al masyoun,  Direct installments, Finished apartment for sale">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="en">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="Masyoun Gardens 1" />
        <meta name="twitter:description" content="Masyoun Gardens 1 residential apartments, comes as an extension of UCI's development creativity, located in Al-Masyoun neighbourhood" />
        <meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Masyoun Gardens 1" />
        <meta property="og:description" content="Masyoun Gardens 1 residential apartments, comes as an extension of UCI's development creativity, located in Al-Masyoun neighbourhood" />
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
        <style>
            .video-play:after{background:url({{$aws_url}}/img/video_large.png) no-repeat;}
        </style>
    </head>
@endsection

@section("content")
    <section class="no-padding">
        <div class="container-fulid" style="position:relative;">
            <div id="mySlider" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                <ol class="carousel-indicators" style="bottom: 60px;">
                    <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#my-slider" data-slide-to="1"></li>
                    <li data-target="#my-slider" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner blog_slider ">
                    <div class="item active">
                        <img src="{{$aws_url}}/img/banner/banner_ad_22.jpg" alt="Masyoun Gardens 1 Exterior and enterior slides" >
                    </div>
                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_222.jpg" alt="Masyoun Gardens 1 Exterior and enterior slides" >
                    </div>
                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_11.jpg" alt="Masyoun Gardens 1 Exterior and enterior slides" >
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#mySlider" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mySlider" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="bottom-menu">
                <a href="#building" id="buildingbtn"> Floor Plans </a> |
                <a href="#apartments" id="apartmentbtn"> Apartments </a> |
                <a href="#services" id="servicesbtn">services </a> <span class="hidden-xs">  | </span>
                <a href="#contact_us" id="contactbtn" class="hidden-xs" >contact us </a>
            </div>
        </div>
    </section>
    <!-- start About Masyoun -->

    <section  itemscope itemtype="https://schema.org/Place" class="container-fluid" style="padding-top:30px;">
        <h1>WELCOME TO</h1>
        <h2 itemprop="name" >Masyoun Gardens (1)</h2>
        <div class="container-padding mob-container container"  >
            <div class="row" >
                <a  id="link01" >
                    <div class="col-md-6 text-center video-play">
                        <img itemprop="image" src="{{$aws_url}}/img/img_11.png" alt="Masyoun Gardens 1 Video" width="100%" height="auto">
                    </div>
                </a>
                <div itemprop="description" class="col-md-6 col_padding mg2-welcome">
                    <p>
                        Masyoun Gardens comes as an extension of UCI's development creativity and is the latest of UCI’s real-estate projects. Like its sold-out predecessors, namely the Arcadia Residential Complex, the Etihad Villas, and UCI’s flagship TABO, the Masyoun Gardens is designed to meet the housing demands of Palestinians while combining excellent location, comfort, and affordability.
                    </p>
                    <p>
                        Masyoun Gardens is located in Al-Masyoun, one of the finest neighborhood ofRamallah. It consists of four connected residential buildings consisting of 16 ideal apartments each designed with multiple living areas with modern and luxurious interior features that suit the needs of a modern Palestinian family.
                    </p>
                    <p>
                        Masyoun Gardens is the optimum residential address for anyone looking for comfort, convenience, access, luxury and a guaranteed affordable investment in Palestine. Through a range of affordable prices and direct financing starting at monthly payments of just 490 JD (690 USD), Masyoun Gardens allows Palestinians to own an apartment in spacious sizes of 130m<sup>2</sup>, 140m<sup>2</sup>, and 155m<sup>2</sup> in the finest neighborhoods of Ramallah, where restaurants, parks, hotels, banks, companies, institutions and all public services are just foot steps away.
                    </p>
                </div>

                <!-- The Modal -->
                <div id="myModal" class="modal" >
                    <span class="close" >&times;</span>
                    <iframe id="myLink" class="center-block" width="80%" height="90%" frameborder="0" allowfullscreen="">
                    </iframe>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Masyoun -->
    <!-- start News -->
    <section class="container-fluid" style="padding-top:40px; background-color:#f6f6f6;" id="building">
        <h1>Floor Plans </h1>
        <h2>Masyoun Gardens (1)</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10" style="padding:0px; padding-top: 30px;    padding-bottom: 50px;">
                    <div id="myCarousel" class="carousel slide slider-border mg2-slider" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{$aws_url}}/images/masyoun-gardens-1-ground-floor.png" alt="Masyoun Gardens 1 - Ground Floor" style="width:100%;">
                                <div class="floor-plan">
                                    <span>Ground Floor Plan</span>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{$aws_url}}/images/masyoun-gardens-1-typical-floor.png" alt="Masyoun Gardens 1 - Typical Floor" style="width:100%;">
                                <div class="floor-plan">
                                    <span>1<sup>st</sup>, 2<sup>nd</sup>, 3<sup>rd</sup>, & 4<sup>th</sup> Floor Plans</span>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{$aws_url}}/images/masyoun-gardens-1-basement-floor.png" alt="Masyoun Gardens 1 - Basement Floor" style="width:100%;">
                                <div class="floor-plan">
                                    <span>5<sup>th</sup> Basement Floor Plan</span>
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
        <h1>The Apartments</h1>
        <h2>Plans and 3D Views </h2>
        <div class="container container-padding">
            <div class="row">
                <section class="slider">
                    <div id="slider" class="flexslider hidden-xs">
                        <ul class="slides">
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-130-en.png" alt="masyoun gardens 1 apartement plan 130m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-140-en.png" alt="masyoun gardens 1 apartement plan140m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-155-en.png" alt="masyoun gardens 1 apartement plan155m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-240-en.png" alt="masyoun gardens 1 apartement plan dublex 240m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-251-en.png" alt="masyoun gardens 1 apartement plan dublex 251m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-266-en.png" alt="masyoun gardens 1 apartement plan dublex 266m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-298-en.png" alt="masyoun gardens 1 apartement plan dublex 298m">
                            </li>

                        </ul>
                    </div>

                    <div id="slider2" class="flexslider hidden-sm hidden-md hidden-lg">
                        <ul class="slides">
                            <li> <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-130-en-mobile.png" alt="masyoun gardens 1 apartement 130"></li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-140-en-mobile.png" alt="masyoun gardens 1 apartement 140"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-155-en-mobile.png" alt="masyoun gardens 1 apartement 155"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-dublex-240-en-mobile.png" alt="masyoun gardens 1 apartement dublex 240"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-dublex-251-en-mobile.png" alt="masyoun gardens 1 apartement dublex 251"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-dublex-266-en-mobile.png" alt="masyoun gardens 1 apartement dublex 266"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-dublex-298-en-mobile.png" alt="masyoun gardens 1 apartement dublex 298"> </li>
                        </ul>
                    </div>

                    <div id="carousel" class="flexslider hidden-xs hidden-sm">

                        <ul class="slides">
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-130-en.png" alt="masyoun gardens 1 apartement 130m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-140-en.png" alt="masyoun gardens 1 apartement 140m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-155-en.png" alt="masyoun gardens 1 apartement 155m">
                            </li>
                            <li>
                                <img  src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-240-en.png" alt="masyoun gardens 1 apartement dublex 240m">
                            </li>
                            <li>
                                <img  src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-251-en.png" alt="masyoun gardens 1 apartement dublex 251m">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-266-en.png" alt="masyoun gardens 1 apartement dublex 266m" >
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-298-en.png" alt="masyoun gardens 1 apartement dublex 298m" >
                            </li>
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
            <!--    start new services -->
            <div class="row feature-box">
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-parking.png" alt="Car Parking" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">Car Parking</h3>
                        <p class="text-center service-text">  One year maintenance guarantee on the construction of each apartments. </p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/img/s_2.png" alt="Maintenance" /></div>
                    <div class=" service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">Maintenance</h3>
                        <p class="text-center service-text">Electrical generator that feeds all public utilities (parking lots, staircases, elevators and fire pumps).</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-gas.png" alt="Gas Tanks" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">Gas Tanks</h3>
                        <p class="text-center service-text">  Central gas tanks for central heating.</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-water.png" alt="Water Tanks" /></div>
                    <div class="service-text-box col-xs-9 col-md-12">
                        <h3 class="text-center service-h3">Water Tanks</h3>
                        <p class="text-center service-text"> Underground water tank intended for use in the event of water cuts.</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-elevator.png" alt="Elevators" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">Elevators</h3>
                        <p class="text-center service-text">   Each building consists of one elevator.</p>
                    </div>
                </div>

            </div>
            <!--    end new services -->
        </div>
    </section>
    <!-- end services -->

    <!--    start Reserve your apartment -->
    <section class="container-fluid">
        <div class="parallax" style="background-image:url({{$aws_url}}/images/masyoungardens-2-call-contact-reserve-apartment.png);">
            <div class="container reserve" >
                <h1>Reserve your apartment Now 	</h1>
                <div class="row" >
                    <div class="col-md-6 col-xs-12 col-sm-6 col-md-offset-3 reserve-ipad" style="height:100px;" >
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

    <script>
        // Get the Vedio modal
        var modal = document.getElementById('myModal');
        var modalLink = document.getElementById("link01");
        var myLink = document.getElementById("myLink");
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        //   var img = document.getElementById('myImg');
        modalLink.onclick = function(){
            modal.style.display = "block";
            document.getElementById('hidenavbar').style.display = "none";
            myLink.src = "https://www.youtube.com/embed/UyTxDZ_fVrA?autoplay=1";

        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            document.getElementById('hidenavbar').style.display = "block";
            $("#myModal iframe").attr("src", '');

        }
        modal.onclick = function() {
            modal.style.display = "none";
            document.getElementById('hidenavbar').style.display = "block";
            $("#myModal iframe").attr("src", '');
        }
    </script>
@endsection
