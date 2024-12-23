@extends("_layout_ar")

@section('head')
    <head>
        <title>الماصيون جاردنز 1</title>
        <meta name="description" content="مشروع الماصيون جاردنز 1 امتداداً للإبداع العقاري والعمراني لشركة الاتحاد للإعمار والاستثمار الواقع في حي الماصيون ">
        <meta name="keywords" content="الماصيون جاردنز، بيت، رام الله، استثمار، شقة">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="ar">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="الماصيون جاردنز 1" />
        <meta name="twitter:description" content="مشروع الماصيون جاردنز 1 امتداداً للإبداع العقاري والعمراني لشركة الاتحاد للإعمار والاستثمار الواقع في حي الماصيون " />
        <meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="الماصيون جاردنز 1" />
        <meta property="og:description" content="مشروع الماصيون جاردنز 1 امتداداً للإبداع العقاري والعمراني لشركة الاتحاد للإعمار والاستثمار الواقع في حي الماصيون " />
        <meta property="og:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <link rel="canonical" href="https://www.masyoungardens.ps" />
        <link rel="alternate" hreflang="ar" href="https://www.masyoungardens.ps/">
        <link rel="alternate" hreflang="en" href="https://www.masyoungardens.ps/en/" />
        <link rel="alternate" hreflang="ar" href="https://www.masyoungardens.ps/ar/" />

        <link rel="shortcut icon" href="{{$aws_url}}/img/mg_favicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
        <link href="/assets/css/mg2_style_ar.css" rel="stylesheet">
        <link rel="stylesheet" href="{{$aws_url}}/css/flexslider2.css" type="text/css" media="screen" />
        <script src="{{$aws_url}}/js/flexSlider/modernizr.js"></script>
        <style>
            .video-play:after{background:url({{$aws_url}}/img/video_large.png) no-repeat;}
        </style>
    </head>
@endsection

@section("content")
    <section class="no-padding" dir="ltr">
        <div class="container-fulid" style="position:relative;">
            <div id="mySlider" class="carousel slide" data-ride="carousel" style="direction:ltr;">
                <!-- Indicators -->
                <ol class="carousel-indicators" style="bottom: 60px;">
                    <li data-target="#mySlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mySlider" data-slide-to="1"></li>
                    <li data-target="#mySlider" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner blog_slider">
                    <div class="item active">
                        <img src="{{$aws_url}}/img/banner/banner_ad_22.jpg" alt="سلايدر تصاميم داخلية وخارجية  الماصيون جاردنز 1" >
                    </div>
                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_222.jpg" alt=" سلايدر تصاميم داخلية وخارجية  الماصيون جاردنز 1" >
                    </div>
                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_11.jpg" alt=" سلايدر تصاميم داخلية وخارجية  الماصيون جاردنز 1" >
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#mySlider" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">السابق</span>
                </a>
                <a class="right carousel-control" href="#mySlider" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">التالي</span>
                </a>
            </div>

            <div class="bottom-menu">
                <a href="#building" id="buildingbtn"> المخططات </a> |
                <a href="#apartments" id="apartmentbtn"> الشقق  </a> |
                <a href="#services" id="servicesbtn">الخدمات </a> |
                <a href="#contact_us" id="contactbtn">اتصل بنا  </a>
            </div>
        </div>
    </section>

    <section itemscope itemtype="https://schema.org/Place" class="container-fluid" style="padding-top:30px;">
        <h1>نرحب بكم في</h1>
        <h2 itemprop="name">الماصيون جاردنز 1</h2>
        <div class="container" style="padding:40px 0;" >
            <div class="row" >
                <a  id="link01" >
                    <div class="col-md-6 text-center video-play">
                        <img itemprop="image" src="{{$aws_url}}/img/img_11.png" alt="فيديو الماصيون جاردنز 1"  width="100%" height="auto">
                    </div>
                </a>

                <div itemprop="description" class="col-md-6 col_padding">
                    <p> يأتي مشروع الماصيون جاردنز امتداداً للإبداع العقاري والعمراني لشركة الاتحاد للإعمار والاستثمار، وليصبح واحداً من أضخم  المشاريع العقارية والاسكانية النموذجية والمميزة التي تحاكي الحداثة وترسم صورة مشرقة للمستقبل العقاري والعمراني في فلسطين.</p>
                    <p>
                        يقع مشروع الماصيون جاردنز في أرقى أحياء الماصيون بمدينة رام الله ويتكون من 4 بنايات سكنية متلاصقة وتحتوي كل بناية سكنية على 16 شقة نموذجية مصممة بمساحات متعددة ومواصفات داخلية حديثة وفاخرة تتناسب وكافة احتياجات العائلة الفلسطينية.
                    </p>
                    <p>
                        وتتكون كل بناية سكنية من 9 طوابق وطابق مخصص لمواقف السيارات، حيث يوفر مشروع الماصيون جاردنز 16 موقف لكل بناية سكنية بحيث يكون لكل شقة موقف السيارة الخاص بها، بالإضافة إلى العديد من الخدمات المشتركة كالمصاعد الذكية والحديقة العامة وخزانات الغاز للتدفئة المركزية وخزانات المياه للطوارئ وصيانة لمدة سنة كاملة.
                    </p>
                    <p>
                        ويعد هذا المشروع العنوان السكني الأمثل لكل من يبحث عن الراحة والرفاهية والوصول السريع إلى جميع الخدمات العامة وكذلك الاستثمار المضمون في فلسطين، فهو يتيح لمختلف شرائح الأسر الفلسطينية من خلال التسهيلات الكبيرة المطروحة على أسعار الشقق وطرق الدفع التي تتم بنظام التقسيط المباشر مع الشركة تملك شقة في أرقى الأحياء حيث تتوفر المطاعم والمتنزهات وكبرى الفنادق والبنوك والشركات والمؤسسات الحكومية وغير الحكومية وغيرها، فأسعار الشقق معقولة ومتاحة للجميع والدفعات الشهرية  ميسرة.
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
        <h1>مخططات الطوابق </h1>
        <h2>مبنى الماصيون جاردنز 1</h2>
        <div class="container" style="padding-top:40px; padding-bottom:50px;">
            <div class="row">
                <div class="col-md-pull-1 col-md-10">
                    <div id="myCarousel" class="carousel slide slider-border mg2-slider" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{$aws_url}}/images/masyoun-gardens-1-ground-floor.png" alt="الماصيون جاردنز 1 - مخطط الطابق الأرضي" style="width:100%;">
                                <div class="floor-plan">
                                    <span>مخطط الطابق الأرضي</span>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{$aws_url}}/images/masyoun-gardens-1-typical-floor.png" alt="الماصيون جاردنز 1 - مخطط الطوابق" style="width:100%;">
                                <div class="floor-plan">
                                    <span>مخطط الطوابق (الأول، الثاني، الثالث، والرابع)</span>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{$aws_url}}/images/masyoun-gardens-1-basement-floor.png" alt="الماصيون جاردنز 1 - مخطط طابق التسوية الخامس" style="width:100%;">
                                <div class="floor-plan">
                                    <span>مخطط طابق التسوية الخامس</span>
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
        <h1>الشقق السكنية</h1>
        <h2>مساقط الشقق السكنية </h2>
        <div class="container" style="padding-top:40px; padding-bottom:50px;">
            <div class="row">
                <section class="slider">
                    <div id="slider" class="flexslider hidden-xs">
                        <ul class="slides" style="direction:ltr;">
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-130-ar.png" alt="الماصيون جاردنز 1 - شقة 130 متر مربع">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-140-ar.png" alt="الماصيون جاردنز 1 - شقة 140 متر مربع">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-155-ar.png" alt="الماصيون جاردنز 1 - شقة 155 متر مربع">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-240-ar.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 240 متر مربع">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-251-ar.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 251 متر مربع">
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-266-ar.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 266 متر مربع" >
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-298-ar.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 298 متر مربع" >
                            </li>
                        </ul>
                    </div>

                    <div id="slider2" class="flexslider hidden-sm hidden-md hidden-lg" style="direction: ltr;">
                        <ul class="slides" style="direction:ltr;">
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-130-ar-mobile.png" alt="الماصيون جاردنز 1 - شقة 130 متر مربع">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-140-ar-mobile.png" alt="الماصيون جاردنز 1 - شقة 140 متر مربع">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-155-ar-mobile.png" alt="الماصيون جاردنز 1 - شقة 155 متر مربع">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-dublex-240-ar-mobile.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 240 متر مربع">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-dublex-251-ar-mobile.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 251 متر مربع">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-dublex-266-ar-mobile.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 266 متر مربع" >
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-1-apartement-dublex-298-ar-mobile.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 298 متر مربع" >
                            </li>
                        </ul>
                    </div>

                    <div id="carousel" class="flexslider hidden-xs hidden-sm">
                        <ul class="slides">
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-130-ar.png" alt="الماصيون جاردنز 1 - شقة 130 متر مربع"></li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-140-ar.png" alt="الماصيون جاردنز 1 - شقة 140 متر مربع"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-155-ar.png" alt="الماصيون جاردنز 1 - شقة 155 متر مربع"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-240-ar.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 240 متر مربع"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-251-ar.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 251 متر مربع"> </li>
                            <li> <img  src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-266-ar.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 266 متر مربع"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-1-apartement-dublex-298-ar.png" alt="الماصيون جاردنز 1 - شقة دوبلكس 298 متر مربع"> </li>
                        </ul>
                    </div>
                </section>

            </div>
        </div>
    </section>
    <!-- start services -->

    <section class="container-fluid" style="padding-top:40px; background-color:#f6f6f6; " id="services">
        <h1>الخدمات والمرافق</h1>
        <h2>الرفاهية والراحة في مكان واحد</h2>
        <div class="container" style="padding:40px 0;">
            <div class="row feature-box">
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-parking.png" alt="مواقف السيارات" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">مواقف السيارات</h3>
                        <p class="text-center service-text">   مواقف السيارات متوفرة على طابقين، وكل شقة موقف خاص بها.</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/img/s_2.png" alt="الصيانة" /></div>
                    <div class=" service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">الصيانة</h3>
                        <p class="text-center service-text">ضمان صيانة للشقق السكنية المبنية لمدة سنة كاملة.</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-gas.png" alt="خزانات الغاز" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">خزانات الغاز</h3>
                        <p class="text-center service-text">خزانات الغاز للتدفئة المركزية.</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-water.png" alt="خزانات المياه" /></div>
                    <div class="service-text-box col-xs-9 col-md-12">
                        <h3 class="text-center service-h3">خزانات المياه</h3>
                        <p class="text-center service-text">خزان مياه تحت الأرض معد للاستخدام في حال انقطاع المياه.</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-elevator.png" alt="المصاعد" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">المصاعد</h3>
                        <p class="text-center service-text">مصعد خاص لكل بناية سكنية.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->

    <!--    start Reserve your apartment -->
    <section class="container-fluid">
        <div class="parallax" style="background-image:url({{$aws_url}}/images/masyoungardens-2-call-contact-reserve-apartment.png);">
            <div class="container reserve" >
                <h1>احجز شقتك الان	</h1>
                <div class="row" >
                    <div class="col-md-6 col-xs-12 col-sm-6 col-md-offset-3 reserve-ipad" style="height:100px;" >
                        <div class="col-xs-4 col-sm-4 col-md-4" style="padding-left:0px; float:right;">
                            <img src="{{$aws_url}}/images/call_uci.png" class="img-responsive" alt="اتصل على" style="width:80px; margin-right:auto">
                        </div>
                        <div class="h-card call-box col-xs-8 col-sm-8 col-md-8">
                            <span> اتصل على  </span><br/>
                            <a class="p-tel" href="tel:+97222947777">972-2-2974994+</a>
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
                            <img src="{{$aws_url}}/images/twitter-x-icon.svg" class="twitter-icon" style="width: 52px;" alt="twitter">
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

    @include('contact_us_ar')

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
                rtl: true,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                rtl: true,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });

            $('#slider2').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,

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
