<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Settings;
use App\Countries;
use App\Media;
use View;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $settings = Settings::orderBy('id','desc')->first();
        View::share ( 'settings', $settings );

        $countries = Countries::orderBy('id','asc')->get();
        View::share ( 'countries', $countries );

        $media = Media::whereRaw("external_active=1")->orderBy('priority','asc')->get();
        View::share ( 'media', $media );

        if (isset($_GET['utm_source'])) {
            Session::put('utm_source', $_GET['utm_source']);
        }
        if (isset($_GET['utm_medium'])) {
            Session::put('utm_medium', $_GET['utm_medium']);
        }
        if (isset($_GET['utm_campaign'])) {
            Session::put('utm_campaign', $_GET['utm_campaign']);
        }
        if (isset($_GET['utm_content'])) {
            Session::put('utm_content', $_GET['utm_content']);
        }
        if (isset($_GET['utm_details'])) {
            Session::put('utm_details', $_GET['utm_details']);
        }
        if (isset($_GET['utm_term'])) {
            Session::put('utm_term', $_GET['utm_term']);
        }

        $aws_url = $settings->aws_url;
        View::share ( 'aws_url', $aws_url );
    }
}
