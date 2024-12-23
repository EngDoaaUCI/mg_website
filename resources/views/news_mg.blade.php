@extends("_layout")

@section('head')
    <head>
        <title>Masyoun Gardens News </title>
        <meta name="description" content="The latest news of Masyoun Gardens Projects, one of UCI’s real-estate projects">
        <meta name="keywords" content="masyoun, my house, ramallah, my home, investment, apartment">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="en">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="Masyoun Gardens - News" />
        <meta name="twitter:description" content="The latest news of Masyoun Gardens Projects, one of UCI’s real-estate projects" />
        <meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Masyoun Gardens - News" />
        <meta property="og:description" content="The latest news of Masyoun Gardens Projects, one of UCI’s real-estate projects" />
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
                        <img src="{{$aws_url}}/img/banner/banner_33.jpg" alt="Masyoun Gardens">
                    </div>

                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_222.jpg" alt="Masyoun Gardens">
                    </div>

                    <div class="item">
                        <img src="{{$aws_url}}/img/banner/banner_11.jpg" alt="Masyoun Gardens">
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

    <section class="container-fluid" style="padding-top:30px;">
        <h1>News and Updates</h1>
        <div class="container mob-container" style="padding-top:40px;padding-top:30px;">
            @php
                $character = ['&nbsp;','&#39;','&ndash;','&amp;','&rsquo;','&rdquo;','&quot;','&ldquo;','&sup2;'];
                $character_replace =[' ','\'','–','&','’','”','"','“','²'];
            @endphp
           @foreach($news_medias as $news_media)
            <div class="row blog-block" >
                <div class="col-md-12 blog_data_content_header">
                    <a href="/en/news-details/{{$news_media->id}}">
                        <h3>{{$news_media->title}}</h3>
                    </a>
                    <div class="blog_data_content_subheader">
                        <h5>{{date("F j, Y", strtotime($news_media->date))}}</h5>
                    </div>
                </div>

                <div class="col-md-4" >
                    <a href="/en/news-details/{{$news_media->id}}">
                        <img style="width:100%" src="{{$aws_url}}/admin/newsimages/{{$news_media->image}}" alt="{{$news_media->title}}"/>
                    </a>
                </div>
                <div class="col-md-8" >
                    <p class="news_detalis col_padding">
                        @if($news_media->id == 11)
                            {{Str::words(str_replace($character, $character_replace , strip_tags($news_media->details, '<br>')),20,'...')}}
                        @else
                            {{Str::words(str_replace($character, $character_replace , strip_tags($news_media->details, '<br>')),50,'...')}}
                        @endif
                    </p>

                    <a href="/en/news-details/{{$news_media->id}}" class="blog_continueRead " target="_self">CONTINUE READING</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
