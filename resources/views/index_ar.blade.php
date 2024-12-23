@extends("_layout_ar")

@section('head')
    <head>
        <title>الماصيون جاردنز</title>
        <meta name="description" content="تملك شقة في حي الماصيون في رام الله.. العنوان السكني الأمثل لكل من يبحث عن الراحة والرفاهية والوصول السريع إلى جميع الخدمات العامة، وكذلك الاستثمار المضمون في فلسطين.">
        <meta name="keywords" content="الماصيون جاردنز ، حي الماصيون ، الماصيون ، الماصيون رام الله،  الماصيون شارع حنا نقارة ، حي الماصيون رام الله ، مشاريع الماصيون جاردنز ، مشروع الماصيون جاردنز ، مشاريع سكنية ، الماصيون جاردنز 1،الماصيون جاردنز 2، شقق الماصيون، شقق في حي الماصيون ، شقق للبيع في الماصيون ، شقق بالتقسيط في الماصيون، شقق للبيع في الماصيون بالتقسيط ، شقق راقية في الماصيون ، أفضل شقق في حي الماصيون، صور شقق في الماصيون ، شركة الاتحاد مشروع الماصيون جاردنز ، شقق سكنية بأسعار معقولة في الماصيون ، موقع شقق الماصيون جاردنز ، اسكن في الماصيون ، عقار في الماصيون ، شقق للبيع في رام الله ، شقق في رام الله ، شقة بالتقسيط في رام الله ،شراء شقة بالتقسيط في الضفة الغربية ، شقق ومنازل في فلسطين،شقق للبيع بالتقسيط، شقق للبيع بدون دفعة أولى ، شقق بالتقسيط بدون دفعة أولى">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="ar">

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@MasyounGardens" />
        <meta name="twitter:title" content="الماصيون جاردنز" />
        <meta name="twitter:description" content="تملك شقة في حي الماصيون في رام الله.. العنوان السكني الأمثل لكل من يبحث عن الراحة والرفاهية والوصول السريع إلى جميع الخدمات العامة، وكذلك الاستثمار المضمون في فلسطين." />
        <meta name="twitter:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <meta property="og:url" content="https://www.masyoungardens.ps" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="الماصيون جاردنز" />
        <meta property="og:description" content="تملك شقة في حي الماصيون في رام الله.. العنوان السكني الأمثل لكل من يبحث عن الراحة والرفاهية والوصول السريع إلى جميع الخدمات العامة، وكذلك الاستثمار المضمون في فلسطين." />
        <meta property="og:image" content="https://www.masyoungardens.ps/images/MasyounGardens.png" />

        <link rel="canonical" href="https://www.masyoungardens.ps/ar/" />
        <link rel="alternate" hreflang="ar" href="https://www.masyoungardens.ps/">
        <link rel="alternate" hreflang="en" href="https://www.masyoungardens.ps/en/" />

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

        <div  class="mainheader_bg" style="background-image: url('{{$aws_url}}/images/masyoun-gardens-banner.jpg'); height:100vh; background-repeat: no-repeat; background-position: center center; background-size: cover;" >
            <p class="banner-title"> الماصيون جاردنز</p>
            <p class="banner-subtitle"> تمتع بالأمان في أرقى مكان</p>
            <p class="banner-subtitle2"> تعرف على مشاريعنا </p>
            <div class="row">
                <div class="col-md-3 col-xs-6 col-md-offset-3 logo-offset-3 zoom">
                    <a href="/ar/1/" target="_blank" rel="noreferrer">
                        <img src="{{$aws_url}}/images/masyoungardens-1-banner-building2.png" alt="بناية الماصيون جاردنز 1" width="100%" height="auto" class="mg1-img">
                    </a>
                </div>
                <div class="col-md-3 col-xs-6  zoom">
                    <a href="/ar/2/" target="_blank" rel="noreferrer">
                        <img src="{{$aws_url}}/images/masyoungardens-2-banner-building2.png" alt="بناية الماصيون جاردنز 2" width="100%" height="auto" class="mg1-img">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="container-fluid" style="padding-top:40px;">
        <h1>نبذة عن مشاريعنا </h1>
        <h2>الماصيون جاردنز</h2>
        <div class="container"  style="padding-top:40px; padding-bottom:50px;" >
            <div class="row" >
                <div class="col-md-6" >
                    <img id="myImg" src="{{$aws_url}}/images/masyoungardens-projects-site-location-services-ar.png" alt="خريطة الماصيون جاردنز" width="100%" height="auto" style="border: 1px solid #ccc;">
                    <button type="button" class="btn btn-icon" id="mybtn" >
                        <i class="fa fa-search-plus" style="color:#fff"></i>
                    </button>
                </div>
                <div class="col-md-6 col_padding">
                    <p class="welcom_p">يقع "الماصيون جاردنز" في أرقى أحياء مدينة رام الله، ويعد العنوان السكني الأمثل لكل من يبحث عن الراحة والرفاهية والوصول السريع إلى جميع الخدمات العامة، وكذلك الاستثمار المضمون في فلسطين.</p>
                    <p class="welcom_p">يتكون مشروع "الماصيون جاردنز" حاليا من مرحلتين؛ المرحلة الأولى وتتكون من 4 بنايات سكنية متلاصقة، في كل بناية سكنية 16 شقة. أما المرحلة الثانية فتتألف من 3 بنايات سكنية متجاورة، في كل بناية سكنية 12 شقة. تم تصميم كل وحدة سكنية بمواصفات داخلية حديثة وفاخرة تتناسب مع كافة احتياجات الأسرة الفلسطينية المعاصرة. </p>
                    <p class="welcom_p">من خلال توفير شقق سكنية بأسعار معقولة وبتقسيط مباشر مع الشركة، أصبحت الفرصة متاحة أمامكم الآن للعيش في حي الماصيون الراقي. حيث تفصلكم خطوات قليلة عن كبرى المطاعم، والحدائق، والفنادق، والبنوك، والشركات، ومؤسسات ومراكز الخدمات العامة.
                    </p>
                </div>
                <!-- The Modal -->
                <div id="myModal" class="modal" >
                    <span class="close" >&times;</span>
                    <img class="modal-content" id="img01" alt="نبذة عن مشاريعنا - الماصيون جاردنز">
                </div>
            </div>
        </div>
    </section>
    <!-- End About Masyoun -->
    <!-- start News -->
    <section class="container-fluid hidden-xs" id="news" style="padding-top:40px; background-color:#f6f6f6;">
        <h1>الأخبار والمستجدات</h1>
        <h2>الأخبار و المستجدات على مشاريع الماصيون جاردنز</h2>
        <div class="container" style="padding-top:40px; padding-bottom:50px;"  >
            <div class="row" >
                @foreach($news_medias as $news_media)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="/ar/news-details/{{$news_media->id}}" target="_blank" rel="noreferrer">
                            <img src="{{$aws_url}}/admin/newsimages/{{$news_media->image}}" alt="{{$news_media->ar_title}}" style="width:100%">
                        </a>
                        <div class="caption">
                            <a href="/ar/news-details/{{$news_media->id}}" target="_blank" rel="noreferrer">
                                <h3>{{$news_media->ar_title}}</h3>
                            </a>
                            <h4>{{date("F j, Y", strtotime($news_media->date))}}</h4>
                            <p class="news-p">{{$news_media->ar_sub_title}}....</p>
                            <a href="/ar/news-details/{{$news_media->id}}" class="readmore center-block">متابعة القراءة </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row see-all-news">
                <a href="/ar/news/">اقرأ المزيد من الأخبار</a>
            </div>
        </div>
    </section>
    <!-- End News -->
    <!-- start mob News -->
    <section class="container-fluid hidden-lg hidden-md hidden-sm" id="news" style="padding-top:40px; background-color:#f6f6f6;">
        <h1>الأخبار والمستجدات</h1>
        <h2>الأخبار و المستجدات على مشاريع الماصيون جاردنز</h2>

        <div id="myCarousel2" class="carousel slide testi_slider" data-ride="carousel" style="padding-top:30px;">
            <div class="carousel-inner">
                @php $count=0; @endphp
                @foreach($news_medias as $news_media)
                    @php $count+=1; @endphp
                <div class="item @if($count==1) active @endif">
                    <div class="row" >
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="/ar/news-details/{{$news_media->id}}" target="_blank" rel="noreferrer">
                                    <img src="{{$aws_url}}/admin/newsimages/{{$news_media->image}}" alt="{{$news_media->ar_title}}" style="width:100%">
                                </a>
                                <div class="caption">
                                    <h3>{{$news_media->ar_title}}></h3>
                                    <h4>{{ date("F j, Y", strtotime($news_media->date))}}</h4>
                                    <p class="news-p">{{$news_media->ar_sub_title}}....</p>
                                    <a href="/ar/news-details/{{$news_media->id}}" class="readmore center-block">متابعة القراءة </a>
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
        <div class="row see-all-news" style=" padding-bottom:40px;" >
            <a href="/ar/news/">اقرأ المزيد من الأخبار</a>
        </div>
    </section>
    <!-- End mob News -->
    <!-- start testimonial -->
    <section class="container-fluid hidden-xs" style="padding-top:40px;">
        <h1>قصص نجاح</h1>
        <h2>شهادات الزبائن</h2>
        <div class="container" style="padding-top:40px; padding-bottom:50px;" >
            <div class="row">
                <div style="margin-top: 31px;"></div>
                <div class="col-md-4 col-xl-4 text-center ">
                    <div class="testimonial-item">
                        <a  href="/ar/testimonials/">
                            <div class="profile-circle">
                                <p>“</p>
                            </div>
                            <p class="testimonial-p">” ما شجعني على شراء شقة في مشروع الماصيون جاردنز هو نظام الدفع المميز الذي يتم بدون دفعة أولى، وبتقسيط شهري مباشر مع الشركة لمدة 10 سنين، فضلاً عن المعاملة الحسنة التي حظيت بها من قبل طاقم مبيعات الشركة والتي يستحقون عليها كل الشكر والتقدير. “

                            </p>
                            <p class="testimonial-p2">محمد عبدالله  <br>  فلسطين
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4  col-xl-4 text-center">
                    <div class="testimonial-item">
                        <a  href="/ar/testimonials/">
                            <div class="profile-circle">
                                <p>“</p>
                            </div>
                            <p class="testimonial-p" style="margin-bottom:5px;">
                                ” أنا سعيدة جداً لأنني تملكت شقة لي ولعائلتي في مشروع الماصيون جاردنز السكني، وما دفعني لاتخاذ قرار الشراء هي ثقتي الكبيرة بشركة الاتحاد للإعمار والاستثمار، فهي عنوان ثابت ومعروف بجودة وفخامة المشاريع العقارية التي توفرها للمواطن الفلسطيني .“</p>

                            <p class="testimonial-p2">منى القواسمي <br> فلسطين</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 text-center">
                    <div class="testimonial-item">
                        <a  href="/ar/testimonials/">
                            <div class="profile-circle">
                                <p>“</p>
                            </div>
                            <p class="testimonial-p">” إن تملك شقة في مشروع ضخم كمشروع الماصيون جاردنز يعد استثمار مضمون بكل المقاييس لكل مواطن فلسطيني يبحث عن ضمان أكيد لمستقبله ومستقبل عائلته، فهو مشروع مميز من حيث الموقع والتصميم والسمعة الحسنة للشركة القائمة عليه. “</p>
                            <p class="testimonial-p2">طارق التايه <br>  فلسطين
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
        <h1>قصص نجاح</h1>
        <h2>شهادات الزبائن</h2>
        <div id="myCarousel" class="carousel slide testi_slider" data-ride="carousel">
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div style="margin-top: 40px;"></div>
                    <div class="col-md-4 col-xl-4 text-center ">
                        <div class="testimonial-item">
                            <a  href="/ar/testimonials/">
                                <div class="profile-circle">
                                    <i class="fa fa-quote-left testi-quoute" aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-p">” ما شجعني على شراء شقة في مشروع الماصيون جاردنز هو نظام الدفع المميز الذي يتم بدون دفعة أولى، وبتقسيط شهري مباشر مع الشركة لمدة 10 سنين، فضلاً عن المعاملة الحسنة التي حظيت بها من قبل طاقم مبيعات الشركة والتي يستحقون عليها كل الشكر والتقدير. “

                                </p>
                                <p class="testimonial-p2">محمد عبدالله  <br>  فلسطين
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div style="margin-top: 40px;"></div>
                    <div class="col-md-4  col-xl-4 text-center">
                        <div class="testimonial-item">
                            <a  href="/ar/testimonials/">
                                <div class="profile-circle">
                                    <i class="fa fa-quote-left testi-quoute" aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-p" style="margin-bottom:5px;">
                                    ” أنا سعيدة جداً لأنني تملكت شقة لي ولعائلتي في مشروع الماصيون جاردنز السكني، وما دفعني لاتخاذ قرار الشراء هي ثقتي الكبيرة بشركة الاتحاد للإعمار والاستثمار، فهي عنوان ثابت ومعروف بجودة وفخامة المشاريع العقارية التي توفرها للمواطن الفلسطيني .“</p>

                                <p class="testimonial-p2">منى القواسمي <br> فلسطين</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div style="margin-top: 40px;"></div>
                    <div class="col-md-4 col-xl-4 text-center">
                        <div class="testimonial-item">
                            <a  href="/ar/testimonials/">
                                <div class="profile-circle">
                                    <i class="fa fa-quote-left testi-quoute" aria-hidden="true"></i>
                                </div>
                                <p class="testimonial-p">” إن تملك شقة في مشروع ضخم كمشروع الماصيون جاردنز يعد استثمار مضمون بكل المقاييس لكل مواطن فلسطيني يبحث عن ضمان أكيد لمستقبله ومستقبل عائلته، فهو مشروع مميز من حيث الموقع والتصميم والسمعة الحسنة للشركة القائمة عليه. “</p>
                                <p class="testimonial-p2">طارق التايه <br>  فلسطين
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <!-- Indicators -->
            <ol class="carousel-indicators home-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- end  mob testimonial -->

    @include('contact_us_ar')

@endsection

@section("js")
    <script>
        // Get the modal
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
