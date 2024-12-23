<?php

namespace App\Http\Controllers;

use App;
use Session;
use App\News_media;

class NewsController extends Controller
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

        $news_medias = News_media::orderBy("date","desc")->get();

        if($url_lang=='ar'){
            return view('news_mg_ar',compact('news_medias'));
        }else{
            return view('news_mg',compact('news_medias'));
        }
    }

     public function news_details($id)
    {
        $segment_lang=request()->segment(1);
        if( isset($segment_lang) && ($segment_lang == 'ar' || $segment_lang =='en' )){
            $url_lang = request()->segment(1);
        }else{
            $url_lang = "ar";
        }

        App::setlocale($url_lang);
        Session::put('lang', $url_lang);

        $news_media = News_media::where('id','=',$id)->first();

        if($url_lang=='ar'){
            return view('news_details_mg_ar',compact('news_media'));
        }else{
            return view('news_details_mg',compact('news_media'));
        }
}


}
