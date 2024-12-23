<!-- Strat contact us   -->
<div class="contact_us" style="background-color: #f6f6f6;" >
    <div class="contact_us container" id="contact_us" style="padding-top:40px; padding-bottom:40px;">
        <div class="row">
            <div class="text-center">
                <div class="heading" >
                    <h1 class="new_green ">
                        online contact
                    </h1>
                    <h3>Fill the form below for a quick message</h3>
                </div>
                @if(isset($message_status) && $message_status == 1)
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Thank You!</strong> We have received your request, and we will be in touch with you very soon
                    </div>
                @elseif(isset($message_status) && $message_status == 3)
                    <div class="alert alert-warning alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Thank You!</strong> We have received your request before, and we will be in touch with you very soon
                    </div>
                @else
                    @if(isset($message_status) && $message_status == 2)
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Warning!</strong> The reCAPTCHA wasn't entered correctly. Go back and try it again.
                        </div>
                    @endif

                    <div style="padding-top:40px;">
                        <form role="form" id="form2" name="form2" method="post" action="" onSubmit="return Validator(this)" language="JavaScript" >
                            <input type="hidden" name="language" value="en">
                            <input type="hidden" name="utm_source" value="@if(isset($_GET['utm_source'])) $_GET['utm_source'] @endif">
                            <div class="col-md-4">
                                <div class="form-group" >
                                    <label>Name</label>
                                    <input class="form-control" name="name" id="name" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input class="form-control" name="mobile" id="mobile" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4" id="form_your_fax">
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input class="form-control" name="your_fax" id="your_fax" placeholder="" type="text">
                                    <input type="hidden" name="timestamp" value="{{date('H:i:s')}} ">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Country</label>
                                    <select class="form-control" name="country" id="country">
                                        <option value="0">Select</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->symbol}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> City</label>
                                    <input class="form-control" name="city" id="city" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" id="email" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirm Email</label>
                                    <input class="form-control" name="email2" id="email2" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Apartment Interested In</label>
                                    <select class="form-control" name="area">
                                        <option value="0">Select</option>
                                        <option value="120">120 m<sup>2</sup></option>
                                        <option value="130">130 m<sup>2</sup></option>
                                        <option value="140">140 m<sup>2</sup></option>
                                        <option value="155">155 m<sup>2</sup></option>
                                        <option value="160">160 m<sup>2</sup></option>
                                        <option value="300">Duplex</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="text-align:left">How did you learn  about Masyoun Gardens?</label>
                                    <select class="form-control" name="media" id="media">
                                        <option value="0">Select</option>
                                        @foreach($media as $media_item)
                                            <option value="{{$media_item->name}}">{{$media_item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="checkbox" style="heignt:25px;" >
                                    <label><input  type="checkbox"  id="subscribBtn" name="subscribBtn" value="yes" checked>    Please keep me informed of updates and news</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="5" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="text-align:left;" class="form-group">
                                    <div class="captchacode left">
                                        <div class="g-recaptcha" data-sitekey="6LeaRWYUAAAAAPB30mzspu_1_TiIS9Tp8ynxnT9O"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info submit" name="submit">Submit</button>
                                </div>
                            </div>
                            <div class="buttom-buffer">&nbsp;</div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="top-buffer_2"></div>
<!-- End contact us   -->
