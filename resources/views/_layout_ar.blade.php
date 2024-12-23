@php
$uri_pagename = request()->segment(2);
$lang = App::getLocale();
@endphp
<!DOCTYPE html>
<html lang="{{$lang}}">

    @yield("head")

    <body dir="rtl">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top mg-nav"  id="hidenavbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/ar/">
                    <img src="{{$aws_url}}/images/masyoun_gardens_logo.png" alt="الماصيون جاردنز" width="72" height="auto" class="logo_img">
                </a>
            </div>
            <div  id="navbar" class="container-fluid navbar-collapse collapse" style="overflow:hidden;">
                <ul  class="nav navbar-nav  margin-nav" >
                    <li @if($uri_pagename=="") class="active" @endif ><a href="/ar/">الرئيسية</a></li>
                    <li @if(isset($uri_pagename) && $uri_pagename==1) class="active"@endif ><a href="/ar/1/" onclick="gtag('event', 'view_mg1', {'event_category': 'engagment','event_label': 'mg1'});" >ماصيون جاردنز 1</a></li>
                    <li @if(isset($uri_pagename) && $uri_pagename==2) class="active" @endif ><a href="/ar/2/" onclick="gtag('event', 'view_mg2', {'event_category': 'engagment','event_label': 'mg2'});"> ماصيون جاردنز 2</a></li>
                    <li @if(isset($uri_pagename) && $uri_pagename=='news') class="active" @endif ><a href="/ar/news/" id="newsbtn">الأخبار</a></li>
                    <li @if(isset($uri_pagename) && $uri_pagename=='#contact_us') class="active" @endif ><a href="/ar/#contact_us" onclick="gtag('event', 'contact_us', {'event_category': 'potential_lead','event_label': 'contact_us'});">اتصل بنا </a></li>
                    <li><a href="/en/@if(isset($uri_pagename) && $uri_pagename!= null) {{$uri_pagename}}.'/' @endif @if(isset($news_id) && $news_id!= null) {{$news_id}} @endif" class="en-font" >English </a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    @yield("content")

    <!-- Strat footer   -->
    <footer class="countainer-fluid footer-sec hidden-xs  hidden-sm" style="background-color:#343434; height:200px; padding-top:32px;">
        <div class="container ">
            <div class="row">
                <div class="col-md-5   fadeInUp " data- -duration="2s" data- -delay=".1s">
                    <a href="http://uci.ps/"> <img src="{{$aws_url}}/img/uci.png"  alt="UCI Logo" class="img-responsive" style="width:260px; padding-top:16px;" /></a>
                </div>

                <div class="col-md-2 col-md-offset-1 footer_col2 " >
                    <h1> الوصول السريع </h1>
                    <ul class="page-footer-list">
                        <li>
                            <a href="/ar/">الرئيسية</a>
                        </li>
                        <li>
                            <a href="/ar/testimonials/">قصص نجاح</a>
                        </li>
                        <li>
                            <a href="/ar/news/">الأخبار والمستجدات</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 footer_col3 " >
                    <ul class="page-footer-list">
                        <li>
                            <a href="/ar/#contact_us">اتصل بنا</a>
                        </li>
                        <li>
                            <a href="/ar/privacy-policy/">سياسة الخصوصية</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2  footer_col4  fadeInUp" data- -duration="2s" data- -delay=".5s" >
                    <h1 style="padding-bottom:8px;"> مشاريع ذات صلة </h1>
                    <a href="http://www.tabo.ps"  target="_blank" rel="noreferrer"><img src="/assets/images/TABO_logo_2022_TM_V_white_1.svg" alt="TABO Logo" class="img-responsive " style="width:80px;" /></a>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer end -->

    <footer class="countainer-fluid footer-sec  hidden-lg hidden-md" style="background-color:#343434; height:max-content; padding-top:32px;  padding-bottom:32px;">
        <div class="container mob-container">
            <div class="row">
                <div class="col-xs-12   fadeInUp " data- -duration="2s" data- -delay=".1s">
                    <a href="http://uci.ps/"> <img src="{{$aws_url}}/img/uci.png" alt="UCI Logo" class="img-responsive  center-block" style="width:200px;  padding-bottom:25px;" /></a>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-6 col-md-offset-1 footer_col4   fadeInUp text-center" data- -duration="2s" data- -delay=".5s" >
                    <h1 style="text-align:center;"> مشاريع ذات صلة </h1>
                    <a href="http://www.tabo.ps" target="_blank" rel="noreferrer" ><img src="/assets/images/TABO_logo_2022_TM_V_white_1.svg" alt="TABO Logo" class="img-responsive " style="width:110px; padding-top:8px; margin-left:auto; margin-right:auto;" /></a>
                </div>

                <div class="col-xs-6 footer_col2 " >
                    <h1> الوصول السريع </h1>
                    <ul class="page-footer-list">
                        <li>
                            <a href="/ar/">الرئيسية</a>
                        </li>
                        <li>
                            <a href="/ar/testimonials/">قصص نجاح</a>
                        </li>
                        <li>
                            <a href="/ar/news/">الأخبار والمستجدات</a>
                        </li>
                        <li>
                            <a href="/ar/#contact_us">اتصل بنا</a>
                        </li>
                        <li>
                            <a href="/ar/privacy-policy/">سياسة الخصوصية</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <button onclick="topPageFunction()" id="myBtn" title="top"></button>
    <!-- End Footer -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR723VD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topPageFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- Facebook Pixel Code -->

    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?

            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;

            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;

            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,

            document,'script','https://connect.facebook.net/en_US/fbevents.js');

        <!-- Hotjar Tracking Code for http://www.masyoungardens.ps -->

        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:403653,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "Masyoun Gardens",
     "url" : "https://www.masyoungardens.ps",
     "sameAs" : [
       "https://www.facebook.com/MasyounGardens",
       "https://www.instagram.com/masyoun_gardens/",
       "https://twitter.com/MasyounGardens",
       "https://www.linkedin.com/company/masyoun-gardens"
       ]
    }
    </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-70262619-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-70262619-1');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2404102746475218');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2404102746475218&ev=PageView&noscript=1"/></noscript>
        <!-- End Facebook Pixel Code -->

    @yield("js")

    </body>
</html>
