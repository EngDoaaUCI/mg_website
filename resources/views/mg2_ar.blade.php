@extends("_layout_ar")

@section('head')
    <head>
        <title>الماصيون جاردنز 2</title>
        <meta name="description" content="الماصيون جاردنز 2، مشروع عقاري ثانٍ في منطقة الماصيون التي تعد من أكثر المناطق المرغوبة للسكن في مدينة رام الله، خلف مجمعيّ أركاديا السكنيين ومقابل متحف محمود درويش.">
        <meta name="keywords" content="الماصيون جاردنز، بيت، رام الله، استثمار، شقة">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="ar">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="الماصيون جاردنز 2" />
        <meta name="twitter:description" content="الماصيون جاردنز 2، مشروع عقاري ثانٍ في منطقة الماصيون التي تعد من أكثر المناطق المرغوبة للسكن في مدينة رام الله، خلف مجمعيّ أركاديا السكنيين ومقابل متحف محمود درويش." />
        <meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="الماصيون جاردنز 2" />
        <meta property="og:description" content="الماصيون جاردنز 2، مشروع عقاري ثانٍ في منطقة الماصيون التي تعد من أكثر المناطق المرغوبة للسكن في مدينة رام الله، خلف مجمعيّ أركاديا السكنيين ومقابل متحف محمود درويش." />
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
    </head>
@endsection

@section("content")
    <!-- start About Masyoun -->
    <div class="container-fluid" >
        <div  class="mg2-banner" style="background-image:url({{$aws_url}}/images/MG2-Cover-photo-2.jpg);">
            <div class="image-container" >
                <img class="center-block" src="{{$aws_url}}/images/mg2-logo-banner.png" alt="الماصيون جاردنز 2" width="320px">
                <p class="banner-subtitle-mg2"> تمتع بالأمان في أرقى مكان</p>
            </div>

            <div class="bottom-menu">
                <a href="#building" id="buildingbtn"> المخططات </a> |
                <a href="#apartments" id="apartmentbtn"> الشقق  </a> |
                <a href="#services" id="servicesbtn">الخدمات </a> |
                <a href="#contact_us" id="contactbtn">اتصل بنا  </a>
            </div>
        </div>
    </div>

    <section itemscope itemtype="https://schema.org/Place" class="container-fluid" style="padding-top:30px;">
        <h1>نرحب بكم في</h1>
        <h2 itemprop="name">الماصيون جاردنز 2</h2>
        <div class="container" style="padding:40px 0;" >
            <div class="row" >
                <div class="col-md-6">
                    <img itemprop="image" src="{{$aws_url}}/images/masyoun-gardens-2-welcome.jpg" alt="بناية الماصيون جاردنز 2" width="100%" height="auto">
                </div>

                <div itemprop="description" class="col-md-6 col_padding">
                    <p>بعد النجاح الباهر الذي حققه مشروع "الماصيون جاردنز 1" والذي تكلل ببيع وحداته السكنية في زمن قياسي. قررت شركة الاتحاد للإعمار والاستثمار إطلاق مشروع عقاري ثانٍ في منطقة الماصيون التي تعد من أكثر المناطق المرغوبة للسكن في مدينة رام الله  وأطلقت عليه اسم "الماصيون جاردنز 2". ويقع هذا المشروع على ارتفاع أعلى من مشروع "الماصيون جاردنز 1" (خلف مجمعيّ أركاديا السكنيين ومقابل متحف محمود درويش).</p>
                    <p>يقع مشروع "الماصيون جاردنز2" في الماصيون الذي يعد من  أرقى أحياء مدينة رام الله. ويتكون من 3 بنايات سكنية متجاورة، في كل بناية سكنية 12 شقة بمساحات تتراوح من 120 إلى 160 متر مربع ، بمواصفات داخلية حديثة وفاخرة تتناسب مع كافة احتياجات الأسرة الفلسطينية المعاصرة.</p>
                    <p>يعد العنوان السكني الأمثل لكل من يبحث عن الراحة والرفاهية والوصول السريع إلى جميع الخدمات العامة، وكذلك الاستثمار المضمون في فلسطين. ومن خلال توفير شقق سكنية بأسعار معقولة وبتقسيط مباشر مع الشركة، أصبح بمقدور الفلسطينيين الآن تملك شقة سكنية فاخرة بمساحات فريدة في أرقى أحياء مدينة رام الله، حيث تفصلهم خطوات قليلة عن كبرى المطاعم، والحدائق، والفنادق، والبنوك، والشركات، ومؤسسات ومراكز الخدمات العامة.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Masyoun -->

    <!-- start News -->
    <section class="container-fluid" style="padding-top:40px; background-color:#f6f6f6;" id="building">
        <h1>مخططات الطوابق </h1>
        <h2>مبنى الماصيون جاردنز 2</h2>
        <div class="container" style="padding-top:40px; padding-bottom:50px;">
            <div class="row">
                <div class="col-md-pull-1 col-md-10">
                    <div id="myCarousel" class="carousel slide slider-border mg2-slider" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="{{$aws_url}}/images/masyoun-gardens-2-ground-floor.png" alt="الماصيون جاردنز 2 - المخطط العام للطابق الأرضي" style="width:100%;">
                                <div class="floor-plan">
                                    <span>المخطط العام للطابق الأرضي</span>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{$aws_url}}/images/masyoun-gardens-2-typical-floor.png" alt="الماصيون جاردنز 2 - المخطط العام للطابق المتكرر" style="width:100%;">
                                <div class="floor-plan">
                                    <span>المخطط العام للطابق المتكرر</span>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{$aws_url}}/images/masyoun-gardens-2-parking-floor.png" alt="الماصيون جاردنز 2 - المخطط العام لمواقف السيارات" style="width:100%;">
                                <div class="floor-plan">
                                    <span>المخطط العام لمواقف السيارات</span>
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
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-E1-ar.png" alt="الطابق الأرضي - شقة (E1)">
                                <div class="plan_iso">
                                    <span>الطابق الأرضي - شقة (E1)</span>
                                </div>
                                <div class="plan_iso_details" >
                                    مساحة الشقة 160م<sup>2</sup>
                                    <br>
                                    مساحة الحديقة 209م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-E2-ar.png" alt="الطابق الأرضي - شقة (E2)">
                                <div class="plan_iso">
                                    <span>الطابق الأرضي - شقة (E2)</span>
                                </div>
                                <div class="plan_iso_details" >
                                    مساحة الشقة 160م<sup>2</sup>
                                    <br>
                                    مساحة الحديقة 84م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-F1-ar.png" alt="الطابق الأرضي - شقة (F1)">
                                <div class="plan_iso">
                                    <span>الطابق الأرضي - شقة (F1)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 126م<sup>2</sup>
                                    <br>
                                    مساحة الحديقة 110م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-F2-ar.png" alt="الطابق الأرضي - شقة (F2)">
                                <div class="plan_iso">
                                    <span>الطابق الأرضي - شقة (F2)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 126م<sup>2</sup>
                                    <br>
                                    مساحة الحديقة 125م<sup>2</sup>

                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-G1-ar.png" alt="الطابق الأرضي - شقة G1)">
                                <div class="plan_iso">
                                    <span>الطابق الأرضي - شقة G1)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 129م<sup>2</sup>
                                    <br>
                                    مساحة الحديقة 91م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-G2-ar.png" alt="الطابق الأرضي - شقة (G2)" >
                                <div class="plan_iso">
                                    <span>الطابق الأرضي - شقة (G2)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 135م<sup>2</sup>
                                    <br>
                                    مساحة الحديقة 183م<sup>2</sup>
                                </div>
                            </li>            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-E1-ar.png" alt="الطابق المتكرر - شقة (E1)" >
                                <div class="plan_iso">
                                    <span>الطابق المتكرر - شقة (E1)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 160م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-E2-ar.png" alt="الطابق المتكرر - شقة (E2)" >
                                <div class="plan_iso">
                                    <span>الطابق المتكرر - شقة (E2)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 154-162م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-F1-ar.png" alt="الطابق المتكرر - شقة (F1)" >
                                <div class="plan_iso">
                                    <span>الطابق المتكرر - شقة (F1)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 121-127م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-F2-ar.png" alt="الطابق المتكرر - شقة (F2)" >
                                <div class="plan_iso">
                                    <span>الطابق المتكرر - شقة (F2)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 120-126م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-G1-ar.png" alt="الطابق المتكرر - شقة (G1)" >
                                <div class="plan_iso">
                                    <span>الطابق المتكرر - شقة (G1)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 125-128م<sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-G2-ar.png" alt="الطابق المتكرر - شقة (G2)" >
                                <div class="plan_iso">
                                    <span>الطابق المتكرر - شقة (G2)</span>
                                </div>
                                <div class="plan_iso_details">
                                    مساحة الشقة 125-128م<sup>2</sup>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div id="slider2" class="flexslider hidden-sm hidden-md hidden-lg" style="direction: ltr;">
                        <ul class="slides" style="direction:ltr;">
                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-E1-ar.png" alt="الطابق الأرضي - شقة (E1)">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-E2-ar.png" alt="الطابق الأرضي - شقة (E2)">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-F1-ar.png" alt="الطابق الأرضي - شقة (F1)">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-F2-ar.png" alt="الطابق الأرضي - شقة (F2)">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-G1-ar.png" alt="الطابق الأرضي - شقة (G1)">
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-ground-floor-isometry-G2-ar.png" alt="الطابق الأرضي - شقة (G2)" >
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-E1-ar.png" alt="الطابق المتكرر - شقة (E1)" >
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-E2-ar.png" alt="الطابق المتكرر - شقة (E2)" >
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-F1-ar.png" alt="الطابق المتكرر - شقة (F1)" >
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-F2-ar.png" alt="الطابق المتكرر - شقة (F2)" >
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-G1-ar.png" alt="الطابق المتكرر - شقة (G1)" >
                            </li>

                            <li>
                                <img src="{{$aws_url}}/images/plans-isometry-mobile/masyoun-gardens-2-typical-floor-isometry-G2-ar.png" alt="الطابق المتكرر - شقة (G2)" >
                            </li>
                        </ul>
                    </div>

                    <div id="carousel" class="flexslider hidden-xs hidden-sm">
                        <ul class="slides">
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-E1-ar.png" alt="الطابق الأرضي - شقة (E1)"></li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-E2-ar.png" alt="الطابق الأرضي - شقة (E2)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-F1-ar.png" alt="الطابق الأرضي - شقة (F1)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-F2-ar.png" alt="الطابق الأرضي - شقة (F2)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-G1-ar.png" alt="الطابق الأرضي - شقة (G1)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-ground-floor-G2-ar.png" alt="الطابق الأرضي - شقة (G2)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-E1-ar.png" alt="الطابق المتكرر - شقة (E1)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-E2-ar.png" alt="الطابق المتكرر - شقة (E2)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-F1-ar.png" alt="الطابق المتكرر - شقة (F1)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-F2-ar.png" alt="الطابق المتكرر - شقة (F2)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-G1-ar.png" alt="الطابق المتكرر - شقة (G1)"> </li>
                            <li> <img src="{{$aws_url}}/images/plans-isometry/masyoun-gardens-2-typical-floor-G2-ar.png" alt="الطابق المتكرر - شقة (G2)"> </li>
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
            <div class="row">
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-parking.png" alt="مواقف السيارات" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">مواقف سيارات</h3>
                        <p class="text-center service-text">لكل شقة موقف خاص بها.</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-generator.png" alt="مولد كهربائي" /></div>
                    <div class=" service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">مولد كهربائي</h3>
                        <p class="text-center service-text"> يتوفر مولد كهربائي يغذي كافة المرافق العامة (مواقف السيارات ومطالع بيت الدرج والمصاعد ومضخات الحريق)</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-gas.png" alt="خزانات الغاز" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">غاز مركزي</h3>
                        <p class="text-center service-text">خزانات الغاز للتدفئة المركزية.</p>
                    </div>
                </div>

                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-elevator.png" alt="المصاعد" /></div>
                    <div class="service-text-box col-xs-9 col-md-12" >
                        <h3 class="text-center service-h3">مصاعد حديثة</h3>
                        <p class="text-center service-text">مصعد خاص لكل بناية سكنية.</p>
                    </div>
                </div>
                <div class="ser_col col-xs-12">
                    <div class="service-img col-xs-3 col-md-12">  <img class="center-block" src="{{$aws_url}}/images/services-satellite.png" alt="قمر صناعي مركزي" /></div>
                    <div class="service-text-box col-xs-9 col-md-12">
                        <h3 class="text-center service-h3">قمر صناعي مركزي</h3>
                        <p class="text-center service-text">يحتوي كل مبنى سكني في المشروع على قمر صناعي مركزي يغذي جميع الوحدات السكنية في المبنى.</p>
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
                    <div class="col-md-6 col-xs-12 col-sm-6 col-md-offset-3 " style="height:100px;" >
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
                slideshow: false,
                sync: "#carousel",
                rtl: true,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
@endsection
