<!-- Strat contact us   -->
<div class="contact_us"  style="background-color: #f6f6f6;" >
    <div class="contact_us container" id="contact_us" style="padding-top:40px; padding-bottom:40px;">
        <div class="row">
            <div class="text-center">
                <div class="heading" >
                    <h1 class="new_green ">
                        اتصل بنا
                    </h1>
                    <h2>يرجى تعبئة النموذج أدناه، وسيقوم مندوب المبيعات بالتواصل معك بأقرب فرصة</h2>
                </div>

                @if(isset($message_status) && $message_status == 1)
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>شكراً لك، </strong>لقد تلقينا طلبك, سنتواصل معك في أقرب وقت ممكن
                    </div>
                @elseif(isset($message_status) && $message_status == 3)
                    <div class="alert alert-warning alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong> لقد تلقينا طلبك قبل ذلك, سنتواصل معك في أقرب وقت ممكن
                    </div>
                @else
                    @if(isset($message_status) && $message_status == 2)
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Warning!</strong> رمز التحقق خاطئ .. الرجاء المحاولة مرة أخرى
                        </div>
                    @endif

                    <div style="padding-top:40px;">
                        <form role="form" id="form2" name="form2" method="post" action="" onSubmit="return Validator(this)" language="JavaScript" >
                            <input type="hidden" name="language" value="ar">
                            <div class="col-md-4">
                                <div class="form-group" >
                                    <label>الاسم</label>
                                    <input class="form-control" name="name" id="name" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>رقم الهاتف</label>
                                    <input class="form-control" name="mobile" id="mobile" placeholder="" type="text" required>
                                </div>
                            </div>

                            <div class="col-md-4" id="form_your_fax">
                                <div class="form-group">
                                    <label>الفاكس</label>
                                    <input class="form-control" name="your_fax" id="your_fax" placeholder="" type="text" >
                                    <input type="hidden" name="timestamp" value="{{date('H:i:s')}}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> الدولة</label>
                                    <select class="form-control" name="country" id="country">
                                        <option value="0">اختر</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->symbol}}">{{$country->ar_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> المدينة</label>
                                    <input class="form-control" name="city" id="city" placeholder="" type="text" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>الايميل</label>
                                    <input class="form-control" name="email" id="email" placeholder="" type="text" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>تأكيد الايميل</label>
                                    <input class="form-control" name="email2" id="email2" placeholder="" type="text" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>المساحة المهتم بها</label>
                                    <select class="form-control" name="area">
                                        <option value="0">اختر</option>
                                        <option value="120">120 متر مربع</option>
                                        <option value="130">130 متر مربع</option>
                                        <option value="140">140 متر مربع</option>
                                        <option value="155">155 متر مربع</option>
                                        <option value="155">160 متر مربع</option>
                                        <option value="300">دوبلكس</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="text-align:left">كيف عرفت عن مشروع الماصيون جاردنز؟</label>
                                    <select class="form-control" name="media" id="media">
                                        <option value="0">اختر</option>
                                        @foreach($media as $media_item)
                                            <option value="{{$media_item->name}}">{{$media_item->ar_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="checkbox" style="heignt:25px;" >
                                    <label style="padding-right:20px;" ><input  type="checkbox"  id="subscribBtn" name="subscribBtn" value="yes" style="margin-right: -20px;" checked>    اشترك بالموقع لتلقي رسائل بريد الكتروني بكل ما هو جديد      </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>الرسالة</label>
                                    <textarea class="form-control" rows="5" name="message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div style="text-align:right;" class="form-group">
                                    <div class="captchacode right">
                                        <div class="g-recaptcha" data-sitekey="6LeaRWYUAAAAAPB30mzspu_1_TiIS9Tp8ynxnT9O"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-info submit" name="submit">ارسال</button>
                                </div></div>
                            <div class="buttom-buffer">&nbsp;</div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="top-buffer_2"></div>
</div>
<!-- End contact us   -->
