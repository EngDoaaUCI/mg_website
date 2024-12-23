@extends("_layout_ar")

@section('head')
    <head>
        <title>شهادات الزبائن </title>
        <meta name="description" content="لماذا أشتري شقة في الماصيون؟ اطلع على شهادات زبائن الماصيون جاردنز لتعرف الإجابة.">
        <meta name="keywords" content="الماصيون جاردنز، بيت، رام الله، استثمار، شقة">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="ar">
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="الماصيون جاردنز - قصص نجاح" />
        <meta name="twitter:description" content="لماذا أشتري شقة في الماصيون؟ اطلع على شهادات زبائن الماصيون جاردنز لتعرف الإجابة." />
        <meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />
        <meta property="og:url" content="https://www.masyoungardens.ps" />	<meta property="og:type" content="website" />
        <meta property="og:title" content="الماصيون جاردنز - قصص نجاح" />
        <meta property="og:description" content="لماذا أشتري شقة في الماصيون؟ اطلع على شهادات زبائن الماصيون جاردنز لتعرف الإجابة." />
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
    <!-- start slider-->
    <section class="no-padding">
        <div class="container-fulid" style="position:relative;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner blog_slider">
                    <div class="item active">
                        <img src="{{$aws_url}}/img/banner/banner_33.jpg" alt="الماصيون جاردنز">
                    </div>
                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_222.jpg" alt="الماصيون جاردنز" >
                    </div>
                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_11.jpg" alt="الماصيون جاردنز" >
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">السابق</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">التالي</span>
                </a>
            </div>
        </div>
    </section>
    <!--    end slider -->

    <section class="container-fluid" style="padding-top:30px;">
        <!-- start testimonial -->
        <div class="container"  id="div3">
            <div class="row">
                <div class="text-center col-lg-12 wow">
                    <h1 class="new_green h1_top">
                        قصص نجاح</h1>
                    <h3>شهادات الزبائن </h3>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-1"> </div>
                <div class="col-md-10 text-center gray-bg" style="padding-bottom: 50px;">
                    <div class="col-md-1" style="padding-top:5px; padding-left:0px;">
                        <p class="testi-bgleft">”</p>
                    </div>
                    <div itemscope itemtype="http://schema.org/Person" class="col-md-10 ">
                        <p class="testi-p">”  ما شجعني على شراء شقة في مشروع الماصيون جاردنز هو نظام الدفع المميز الذي يتم بدون دفعة أولى، وبتقسيط شهري مباشر مع الشركة لمدة 10 سنين، فضلاً عن المعاملة الحسنة التي حظيت بها من قبل طاقم مبيعات الشركة والتي يستحقون عليها كل الشكر والتقدير. “</p>
                        <p itemprop="name" class="testi-footer">محمد عبدالله
                            <br>
                            فلسطين</p>
                    </div>
                    <div class="col-md-1" style="padding-top:50px; padding-right:0px;">
                        <p class="testi-bgright">“</p>
                    </div>
                </div>
                <div class="col-md-1"> </div>
            </div>
            <br>
            <br>
            <div class="row ">
                <div class="col-md-1"> </div>
                <div class="col-md-10 text-center gray-bg" style="padding-bottom: 50px;">
                    <div class="col-md-1" style="padding-top:5px; padding-left:0px;">
                        <p class="testi-bgleft">”</p>
                    </div>
                    <div itemscope itemtype="http://schema.org/Person" class="col-md-10 ">
                        <p class="testi-p">” أنا سعيدة جداً لأنني تملكت شقة لي ولعائلتي في مشروع الماصيون جاردنز السكني، وما دفعني لاتخاذ قرار الشراء هي ثقتي الكبيرة بشركة الاتحاد للإعمار والاستثمار، فهي عنوان ثابت ومعروف بجودة وفخامة المشاريع العقارية التي توفرها للمواطن الفلسطيني .“</p>
                        <p itemprop="name" class="testi-footer">منى القواسمي
                            <br>
                            فلسطين</p>
                    </div>
                    <div class="col-md-1" style="padding-top:50px; padding-right:0px;">
                        <p class="testi-bgright">“</p>
                    </div>
                </div>
                <div class="col-md-1"> </div>
            </div>
            <br>
            <br>
            <div class="row ">
                <div class="col-md-1"> </div>
                <div class="col-md-10 text-center gray-bg" style="padding-bottom: 50px;">
                    <div class="col-md-1" style="padding-top:5px; padding-left:0px;">
                        <p class="testi-bgleft">”</p>
                    </div>
                    <div itemscope itemtype="http://schema.org/Person" class="col-md-10 ">
                        <p class="testi-p">” إن تملك شقة في مشروع ضخم كمشروع الماصيون جاردنز يعد استثمار مضمون بكل المقاييس لكل مواطن فلسطيني يبحث عن ضمان أكيد  لمستقبله ومستقبل عائلته، فهو مشروع مميز من حيث الموقع والتصميم والسمعة الحسنة للشركة القائمة عليه. “</p>
                        <p itemprop="name" class="testi-footer">طارق التايه
                            <br>
                            فلسطين</p>
                    </div>
                    <div class="col-md-1" style="padding-top:50px; padding-right:0px;">
                        <p class="testi-bgright">“</p>
                    </div>
                </div>
                <div class="col-md-1"> </div>
            </div>
            <br>
            <br>
            <br>
        </div>
        <!-- end testimonial -->
    </section>
@endsection
