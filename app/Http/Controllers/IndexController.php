<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;
use App\News_media;

class IndexController extends Controller
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

        $news_medias = News_media::orderBy("date","desc")->limit(3)->get();

        if($url_lang=='ar'){
            return view('index_ar',compact('news_medias'));
        }else{
            return view('index',compact('news_medias'));
        }
    }

    public function mg1()
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
            return view('mg1_ar');
        }else{
            return view('mg1');
        }
    }

    public function mg2()
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
            return view('mg2_ar');
        }else{
            return view('mg2');
        }
    }

}
