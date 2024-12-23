@extends("_layout_ar")

@section('head')
    <head>
        <title>{{$news_media->ar_title}}</title>
        <meta name="description" content="كن على اطلاع على آخر أخبار الماصيون جاردنز، أحد مشاريع شركة الاتحاد للإعمار والاستثمار في فلسطين.">
        <meta name="keywords" content="الماصيون جاردنز، بيت، رام الله، استثمار، شقة">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="ar">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="الماصيون جاردنز - الأخبار" />
        <meta name="twitter:description" content="كن على اطلاع على آخر أخبار الماصيون جاردنز، أحد مشاريع شركة الاتحاد للإعمار والاستثمار في فلسطين." />
        <meta name="twitter:image" content="{{$aws_url}}/admin/newsimages/{{$news_media->image}}" />

        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="الماصيون جاردنز - الأخبار" />
        <meta property="og:description" content="كن على اطلاع على آخر أخبار الماصيون جاردنز، أحد مشاريع شركة الاتحاد للإعمار والاستثمار في فلسطين." />
        <meta property="og:image" content="{{$aws_url}}/admin/newsimages/{{$news_media->image}}" />

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
                        <img src="{{$aws_url}}/img/banner/banner_33.jpg" alt="الماصيون جاردنز" >
                    </div>

                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_222.jpg" alt="الماصيون جاردنز" >
                    </div>

                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_11.jpg" alt="الماصيون جاردنز">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--    end slider -->
    @php
        $months = ["Jan" => "يناير", "Feb" => "فبراير", "Mar" => "مارس", "Apr" => "أبريل", "May" => "مايو", "Jun" => "يونيو", "Jul" => "يوليو", "Aug" => "أغسطس", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر"];
        $month = $months[date('M', strtotime($news_media->date))];
        $date =  date('j', strtotime($news_media->date)) . ' - ' . $month . ' - ' . date('Y', strtotime($news_media->date));
        $character = ['&nbsp;','&#39;','&ndash;','&amp;','&rsquo;','&rdquo;','&quot;','&ldquo;','&sup2;'];
        $character_replace =[' ','\'','–','&','’','”','"','“','²'];
    @endphp
    <section class="container-fluid" style="padding-top:10px;">
        <!--  First Section - About Masyoun -->
        <div class="container news_details" id="div1">
            <div class="row top-buffer_1" ></div>
            <div class="row top-buffer_1" ></div>
            <div class="row">
                <div class="text-center wow">
                    <h2 class="new_green leftText" style="color: #049060; font-size: 26px; text-align:right;">
                        {{$news_media->ar_title}}
                    </h2>
                </div>
            </div>

            @if($news_media->is_video== 0)
                <div class="row">
                    <p class="newsDate">{{$date}}</p>
                    {{str_replace($character, $character_replace , strip_tags($news_media->ar_details, '<br>'))}}
                </div>
            @else
                <div class="row">
                    <p class="newsDate">{{$date}}</p>
                    <p class="leftText">
                        {{$news_media->ar_sub_title}}
                    </p>
                </div>
                <div class="row newsLargeImage">
                    <iframe width="100%" height="400" src="{{$news_media->video_URL}}" frameborder="0" allowfullscreen></iframe>
                </div>
          @endif
        </div>
        <br>
        <br>
    </section>
@endsection
