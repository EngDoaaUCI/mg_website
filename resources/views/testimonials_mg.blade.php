@extends("_layout")

@section('head')
    <head>
        <title>Testimonials</title>
        <meta name="description" content="Why I would buy an apartment in Masyoun Gardens? Masyoun Gardens customers testimonials will give you the answer.">
        <meta name="keywords" content="masyoun, my house, ramallah, my home, investment, apartment">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="en">
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="Masyoun Gardens - Testimonials" />
        <meta name="twitter:description" content="Why I would buy an apartment in Masyoun Gardens? Masyoun Gardens customers testimonials will give you the answer." />	<meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />
        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Masyoun Gardens - Testimonials" />
        <meta property="og:description" content="Why I would buy an apartment in Masyoun Gardens? Masyoun Gardens customers testimonials will give you the answer." />
        <meta property="og:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />		<link rel="canonical" href="https://www.masyoungardens.ps" />
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
                <div class="carousel-inner blog_slider" >
                    <div class="item active">
                        <img src="{{$aws_url}}/img/banner/banner_33.jpg" alt="Masyoun Gardens" >
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
        <!-- start testimonial -->
        <div class="container" >
            <div class="row">
                <div class="text-center col-lg-12 wow" style="padding-bottom:30px;">
                    <h1 class="new_green">
                        Testimonials</h1>
                    <h2>from Recent Customers </h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-1"> </div>
                <div class="col-md-10 text-center gray-bg" style="padding-bottom:20px;">
                    <div class="col-md-1" style="padding-top:5px; padding-right:0px;">
                        <p class="testi-bgleft">“</p>
                    </div>
                    <div  itemscope itemtype="http://schema.org/Person" class="col-md-10 ">
                        <p class="testi-p">“ What encouraged me to buy an apartment in Masyoun Gardens is the distinctive payment process, which is without a down payment and with direct monthly installments with the company for 10 years, as well as the excellent service from the company's sales staff. They deserve all the thanks and appreciation. ”</p>
                        <p itemprop="name" class="testi-footer">Mohammad Abdullah
                            <br>
                            Palestine</p>
                    </div>
                    <div class="col-md-1" style="padding-top:100px; padding-left:0px;">
                        <p class="testi-bgright">”</p>
                    </div>
                </div>
                <div class="col-md-1"> </div>
            </div>
            <br>
            <br>
            <div class="row ">
                <div class="col-md-1"> </div>
                <div class="col-md-10 text-center gray-bg" style="padding-bottom:20px;">
                    <div class="col-md-1" style="padding-top:5px; padding-right:0px;">
                        <p class="testi-bgleft">“</p>
                    </div>
                    <div  itemscope itemtype="http://schema.org/Person" class="col-md-10 ">
                        <p class="testi-p">“ I am very happy that I own an apartment for my family and I in Masyoun Gardens. What prompted me to make this decision is my trust in Union Construction and Investment Co., which is known for its high quality and luxury real estate projects that it offers to the Palestinian citizens. ”</p>
                        <p itemprop="name" class="testi-footer">Muna Al-Qawasmi
                            <br>
                            Palestine</p>
                    </div>
                    <div class="col-md-1" style="padding-top:75px; padding-left:0px;">
                        <p class="testi-bgright">”</p>
                    </div>
                </div>
                <div class="col-md-1"> </div>
            </div>
            <br>
            <br>
            <div class="row ">
                <div class="col-md-1"> </div>
                <div class="col-md-10 text-center gray-bg" style="padding-bottom:20px;">
                    <div class="col-md-1" style="padding-top:5px; padding-right:0px;">
                        <p class="testi-bgleft">“</p>
                    </div>
                    <div  itemscope itemtype="http://schema.org/Person" class="col-md-10 ">
                        <p class="testi-p">“ Owning an apartment in a huge project as Masyoun Gardens is a guaranteed investment at all levels to every Palestinian citizen looking for a guarantee for his future and the future of his family. It’s a distinctive project in terms of location, design and the good reputation of the company that is constructing it. ”</p>
                        <p itemprop="name" class="testi-footer">Tareq Al Tayeh
                            <br>
                            Palestine</p>
                    </div>
                    <div class="col-md-1" style="padding-top:100px; padding-left:0px;">
                        <p class="testi-bgright">”</p>
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
