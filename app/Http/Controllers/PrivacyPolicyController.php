<?php

namespace App\Http\Controllers;

use App;
use Session;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $segment_lang=request()->segment(1);
        if( isset($segment_lang) && ($segment_lang == 'ar' || $segment_lang =='en' )){
            $url_lang = request()->segment(1);
        }else{
            $url_lang = "ar";
        }

        App::setlocale($url_lang);
        Session::put('lang', $url_lang);

        if($url_lang=='ar'){
            return view('privacy_policy_mg_ar');
        }else{
            return view('privacy_policy_mg');
        }
    }
}
