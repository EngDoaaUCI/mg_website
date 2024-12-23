@extends("_layout")

@section('head')
    <head>
        <title>Masyoun Gardens</title>
        <meta name="description" content="Own your apartment at Masyoun Gardens is the optimum residential address for anyone looking for comfort, convenience, access, luxury and a guaranteed affordable investment in Palestine.">
        <meta name="keywords" content="Al masyoun Gardens , Al-Masyoun Neighbourhood , Al-Masyoun, Al-Masyoun Ramallah , Al-Masyoun Hanna Nakara street , Masyoun neighbourhood Ramallah , Masyoun Gardens Projects , Masyoun Gardens Project , Residental Projects , Masyoun Gardens 1, Masyoun Gardens 2 , Al-Masyoun Apartment, Apartments at al masyoun, apartments for sale at al masyoun, Apartment in installment in al-masyoun, Apartments for sale in Al-Masyoun Installments, Luxerious Apartment in Al-Masyoun, best apartments at al masyoun, al masyoun apartment photos, Union Construction MG Project, Apartments with affordable prices in Al-Masyoun, Al-Masyoun Gardens adress, Live at al-masyoun, Real Estate in Al-Masyoun, Apartments for sale in Ramallah, Apartments  in Ramallah , Apartment in installment in Ramallah, Buy an apartment in installments in the west bank, Apartments and houses in Palestine , Apartments for sale in installments , Apartment for sale without down payment , Apartment in installment without down payement ">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="en">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="Masyoun Gardens" />
        <meta name="twitter:description" content="Own your apartment at Masyoun Gardens is the optimum residential address for anyone looking for comfort, convenience, access, luxury and a guaranteed affordable investment in Palestine." />
        <meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Masyoun Gardens" />
        <meta property="og:description" content="Own your apartment at Masyoun Gardens is the optimum residential address for anyone looking for comfort, convenience, access, luxury and a guaranteed affordable investment in Palestine." />
        <meta property="og:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <link rel="canonical" href="https://www.masyoungardens.ps/en/" />
        <link rel="alternate" hreflang="en" href="https://www.masyoungardens.ps/">
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
    <div class="container-fluid " >

        <!--  start popup verified message   -->
        <div id="ac-wrapper1"  style="display:none;position: fixed; width: 100%; z-index:3;" >
            <div id="verpopup1" class="alert alert-success" style="text-align: center;margin-top: 80px; margin-bottom:0px;">
                <strong> Your account has been verified.</strong>
            </div>
        </div>
        <div id="ac-wrapper2" style="display:none;position: fixed; width: 100%; z-index:3;">
            <div id="verpopup2" class="alert alert-warning" style="text-align: center;margin-top: 80px; margin-bottom:0px;">
                <strong> The url is either invalid or you already have activated your account.</strong>
            </div>
        </div>
        <div id="ac-wrapper3"  style="display:none;position: fixed; width: 100%; z-index:3;">
            <div id="verpopup3" class="alert alert-warning" style="text-align: center;margin-top: 80px; margin-bottom:0px;">
                <strong> Invalid approach, please use the link that has been send to your email</strong>
            </div>
        </div>
        <!--  end popup verified message   -->

        <!-- start About Masyoun -->
        <div class="mainheader_bg" style="background-image: url('{{$aws_url}}/images/masyoun-gardens-banner.jpg'); height:100vh; background-repeat: no-repeat; background-position: center center; background-size: cover;" >
            <p class="banner-title"> Masyoun Gardens</p>
            <p class="banner-subtitle"> Convience, Quality, Affordability</p>
            <p class="banner-subtitle2"> See Our Projects </p>
            <div class="row">
                <div class="col-md-3 col-sm-4  col-xs-6 col-md-offset-3  col-sm-offset-2  zoom mg1-bnr">
                    <a href="/en/1/"  target="_blank" rel="noreferrer">
                        <img src="{{$aws_url}}/images/masyoungardens-1-banner-building2.png" alt="Masyoun Gardens 1 Building" width="100%" height="auto" class="mg1-img">
                    </a>
                </div>
                <div class="col-md-3 col-sm-4  col-xs-6 zoom mg2-bnr">
                    <a href="/en/2/"  target="_blank" rel="noreferrer">
                        <img src="{{$aws_url}}/images/masyoungardens-2-banner-building2.png" alt="Masyoun Gardens 2 Building" width="100%" height="auto" class="mg1-img">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section itemscope itemtype="https://schema.org/Place" class="container-fluid" style="padding-top:40px;">
        <h1>About us</h1>
        <h2 itemprop="name">Masyoun Gardens Projects</h2>
        <div class="container mob-container"  style="padding-top:30px; padding-bottom:50px;" >
            <div class="row" >
                <div class="col-md-6">
                    <img itemprop="image" id="myImg" src="{{$aws_url}}/images/masyoungardens-projects-site-location-services-en.png" alt="Masyoun Gardens Map" width="100%" height="auto" style="border: 1px solid #ccc;">
                    <button type="button" class="btn btn-icon" id="mybtn" >
                        <i class="fa fa-search-plus" style="color:#fff"></i>
                    </button>
                </div>
                <div itemprop="description" class="col-md-6 col_padding">
                    <p style="font-size: 16px; line-height: 26px; ">Located in one of the finest neighborhoods of Ramallah, Masyoun Gardens is the optimum residential address for anyone looking for comfort, convenience, access, luxury and a guaranteed affordable investment in Palestine.
                    </p>
                    <p style="font-size: 16px; line-height: 26px; ">
                        The Masyoun Gardens project currently consists of two phases – Phase 1 which is four connected residential buildings consisting of 16 apartments, and Phase 2 which has three adjacent buildings each with 12 apartments. Each unit is designed with modern and luxurious interior features that suit the needs of a modern Palestinian family.
                    </p>
                    <p style="font-size: 16px; line-height: 26px; ">
                        Through a range of affordable prices and direct financing, you now have the ability to live in the great neighborhood of Masyoun, where restaurants, parks, hotels, banks, companies, institutions and all public services are just foot steps away.

                    </p>
                    <!--        <a href="#" class="button">See Our Location </a>-->
                </div>
                <!-- The Modal -->
                <div id="myModal" class="modal" >
                    <span class="close" >&times;</span>
                    <img class="modal-content" id="img01" alt="About Masyoun Gardens Projects">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Masyoun -->
    <!-- start News -->
    <section class="container-fluid hidden-xs" id="news" style="padding-top:30px; background-color:#f6f6f6;">
        <h1>News and Updates</h1>
        <h2>News and Updates on Masyoun Gardens</h2>
        <div class="container mob-container" style="padding-top:40px; padding-bottom:50px;"  >
            <div class="row" >
                @foreach($news_medias as $news_media)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="/en/news-details/{{$news_media->id}}" target="_blank" rel="noreferrer">
                            <img src="{{$aws_url}}/admin/newsimages/{{$news_media->image}}" alt="{{$news_media->title}}" style="width:100%">
                        </a>
                        <div class="caption">
                            <a href="/en/news-details/{{$news_media->id}}" target="_blank" rel="noreferrer">
                                <h3>{{$news_media->title}}</h3>
                            </a>
                            <h4>{{ date("F j, Y", strtotime($news_media->date))}} </h4>
                            <p class="news-p">{{$news_media->sub_title}}....</p>
                            <a href="/en/news-details/{{$news_media->id}}" class="readmore center-block">Read More </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row see-all-news">
                <a href="/en/news/">See All News</a>
            </div>
        </div>
    </section>
    <!-- start mob News -->
    <section class="container-fluid hidden-lg hidden-md hidden-sm" id="news" style="padding-top:30px; background-color:#f6f6f6;">
        <h1>News and Updates</h1>
        <h2>News and Updates on Masyoun Gardens</h2>
        <div id="myCarousel2" class="carousel slide testi_slider" data-ride="carousel" style="padding-top:30px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel2" data-slide-to="1"></li>
                <li data-target="#myCarousel2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @php $count=0; @endphp
                @foreach($news_medias as $news_media)
                    @php $count+=1; @endphp
                <div class="item @if($count==1) active @endif">
                    <div class="row" >
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="/en/news-details/{{$news_media->id}}" target="_blank" rel="noreferrer">
                                    <img src="{{$aws_url}}/admin/newsimages/{{$news_media->image}}" alt="{{$news_media->title}}" style="width:100%">
                                </a>
                                <div class="caption">
                                    <a href="/en/news-details/{{$news_media->id}}" target="_blank" rel="noreferrer">
                                        <h3>{{$news_media->title}}</h3>
                                    </a>
                                    <h4>{{ date("F j, Y", strtotime($news_media->date))}}</h4>
                                    <p class="news-p">{{$news_media->sub_title}}....</p>
                                    <a href="/en/news-details/{{$news_media->id}}" class="readmore center-block">Read More </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators home-indicators">
                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel2" data-slide-to="1"></li>
                <li data-target="#myCarousel2" data-slide-to="2"></li>
            </ol>
        </div>
        <div class="row see-all-news" style="padding-bottom:40px;">
            <a href="/en/news/">See All News</a>
        </div>
    </section>
    <!-- End mob News -->
    <!-- start testimonial -->
    <section class="container-fluid hidden-xs" style="padding-top:40px;">
        <h1>Testimonials</h1>
        <h2>from Recent Customers </h2>
        <div class="container mob-container" style="padding-top:30px; padding-bottom:50px;" >
            <div class="row">
                <div style="margin-top: 31px;"></div>
                <div class="col-md-4 col-xl-4 text-center ">
                    <div class="testimonial-item">
                        <a  href="/en/testimonials/">
                            <div class="profile-circle">
                                <p>“</p>
                            </div>
                            <p class="testimonial-p">“ What encouraged me to buy an apartment in Masyoun Gardens is the distinctive payment process, which is without a down payment and with direct monthly installments with the company for 10 years, as well as the excellent service from the company's sales staff. They deserve all the thanks and appreciation ”</p>
                            <p class="testimonial-p2">Mohammad Abdullah
                                <br>  Palestine
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4  col-xl-4 text-center">
                    <div class="testimonial-item">
                        <a  href="/en/testimonials/">
                            <div class="profile-circle">
                                <p>“</p>
                            </div>
                            <p class="testimonial-p" style="margin-bottom:5px;">“ I am very happy that I own an apartment for my family and I in Masyoun Gardens. What prompted me to make this decision is my trust in Union Construction and Investment Co., which is known for its high quality and luxury real estate projects that it offers to the Palestinian citizens ”</p>
                            <br>
                            <p class="testimonial-p2">Muna Al-Qawasmi<br> Palestine</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 text-center">
                    <div class="testimonial-item">
                        <a  href="/en/testimonials/">
                            <div class="profile-circle">
                                <p>“</p>
                            </div>
                            <p class="testimonial-p">“ Owning an apartment in a huge project as Masyoun Gardens is a guaranteed investment at all levels to every Palestinian citizen looking for a guarantee for his future and the future of his family. It’s a distinctive project in terms of location, design and the good reputation of the company that is constructing it. ”</p>
                            <p class="testimonial-p2">Tareq Al Tayeh
                                <br>
                                Palestine
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonial -->
    <!-- start mob testimonial -->
    <section class="container-fluid  hidden-lg hidden-md hidden-sm" style="padding-top:40px;">
        <h1>Testimonials</h1>
        <h2>from Recent Customers </h2>

        <div id="myCarousel" class="carousel slide testi_slider" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <div style="margin-top: 40px;"></div>
                    <div class="col-md-4 col-xl-4 text-center ">
                        <div class="testimonial-item">
                            <a  href="/en/testimonials/">
                                <div class="profile-circle">
                                    <i class="fa fa-quote-left testi-quoute" aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-p">“ What encouraged me to buy an apartment in Masyoun Gardens is the distinctive payment process, which is without a down payment and with direct monthly installments with the company for 10 years, as well as the excellent service from the company's sales staff. They deserve all the thanks and appreciation ”</p>
                                <p class="testimonial-p2">Mohammad Abdullah
                                    <br>  Palestine
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div style="margin-top: 40px;"></div>
                    <div class="col-md-4 col-xl-4 text-center ">
                        <div class="testimonial-item">
                            <a  href="/en/testimonials/">
                                <div class="profile-circle">
                                    <i class="fa fa-quote-left testi-quoute" aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-p" style="margin-bottom:5px;">“ I am very happy that I own an apartment for my family and I in Masyoun Gardens. What prompted me to make this decision is my trust in Union Construction and Investment Co., which is known for its high quality and luxury real estate projects that it offers to the Palestinian citizens ”</p>
                                <br>
                                <p class="testimonial-p2">Muna Al-Qawasmi<br> Palestine</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div style="margin-top: 40px;"></div>
                    <div class="col-md-4 col-xl-4 text-center ">
                        <div class="testimonial-item">
                            <a  href="/en/testimonials/">
                                <div class="profile-circle">
                                    <i class="fa fa-quote-left testi-quoute" aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-p">“ Owning an apartment in a huge project as Masyoun Gardens is a guaranteed investment at all levels to every Palestinian citizen looking for a guarantee for his future and the future of his family. It’s a distinctive project in terms of location, design and the good reputation of the company that is constructing it. ”</p>
                                <p class="testimonial-p2">Tareq Al Tayeh
                                    <br>
                                    Palestine
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators home-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- end mob testimonial -->

    @include('contact_us')

@endsection

@section("js")
    <script>
        // Get the Zoom image modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var btn = document.getElementById('mybtn');
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            document.getElementById('hidenavbar').style.display = "none";
        }

        btn.onclick = function(){
            modal.style.display = "block";
            modalImg.src = img.src;
            document.getElementById('hidenavbar').style.display = "none";
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            document.getElementById('hidenavbar').style.display = "block";
        }

        modal.onclick = function() {
            modal.style.display = "none";
            document.getElementById('hidenavbar').style.display = "block";
        }

        $('#myCarousel2').carousel({
            interval: 2000
        });
    </script>

    <script type="text/javascript">
        function verPopUp1(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper1').style.display = "none";
            else document.getElementById('ac-wrapper1').style.display = "block";
        }

        function verPopUp2(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper2').style.display = "none";
            else document.getElementById('ac-wrapper2').style.display = "block";
        }

        function verPopUp3(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper3').style.display = "none";
            else document.getElementById('ac-wrapper3').style.display = "block";
        }
    </script>

    @if(isset($_GET['verified']))
        @if($_GET['verified'] == 1)
        <script type="text/javascript">
            setTimeout(function () {
                verPopUp1('show');
            }, 5000);
            setTimeout(function () {
                verPopUp1('hide');
            }, 12000);
        </script>
        @elseif($_GET['verified'] == 0)
        <script type="text/javascript">
            setTimeout(function () {
                verPopUp2('show');
            }, 5000);
            setTimeout(function () {
                verPopUp2('hide');
            }, 12000);
        </script>
        @elseif($_GET['verified'] == 2)
        <script type="text/javascript">
            setTimeout(function () {
                verPopUp3('show');
            }, 5000);
            setTimeout(function () {
                verPopUp3('hide');
            }, 12000);
        </script>
        @endif
    @endif
@endsection
