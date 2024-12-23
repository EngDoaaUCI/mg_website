<?php
namespace App\Http\Controllers;

use Response;
use App\Http\Requests\ContactUsRequest;

use App\Form_submission;
use App;
use Session;
use Mail;
class ContactUsController extends Controller
{
    public function store(ContactUsRequest $request)
    {
        $lang=Session::get('lang');
        App::setlocale($lang);

        $allowed_origins = array('https://www.tabo.ps', 'https://tabo.ps', 'http://127.0.0.1:8000', 'http://development.testdomain1230.com','https://www.development.tabo.ps');
        $time_passed = strtotime(date('H:i:s'))-strtotime($request["timestamp"]);
        if (!empty($request["your_fax"]) || ($time_passed <= 5) || (isset($_SERVER['HTTP_ORIGIN']) && !in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins))) {
            //Spam
            if(Session::get('lang') == 'en'){
                return redirect('/en/thank-you');
            }else{
                return redirect('/ar/thank-you');
            }
        }

        $mobile=$request["mobile"];
        $inquiries=$request["inquiries"];
        $today=date('Y-m-d');
        $request_prices_count=Request_prices::where('mobile1',$mobile)->where('submissionDate',$today)->where('notes',$inquiries)->count();
        if($request_prices_count <= 0){
            $item = new Request_prices();
            $hashcode = md5( rand(0,1000) );
            $pageURL="ContactRequestForm page";

            $item->fname = $request["fname"];
            $item->city = $request["city"];
            $item->mobile1 = $request["mobile"];
            $item->ip = request()->ip();
            $item->email = $request["email"];
            $item->notes = $request["inquiries"];
            $item->submissionDate = $today;
            $item->resource = $request["resource"];
            $item->PageURL = $pageURL;
            $item->newsletter = $request["newsletter"]?1:0;
            $item->hashcode = $hashcode;
            $item->utm_source = Session::get('utm_source');
            $item->utm_medium = Session::get('utm_medium');
            $item->utm_campaign = Session::get('utm_campaign');
            $item->utm_content = Session::get('utm_content');
            $item->utm_details = Session::get('utm_details');
            $item->utm_term = Session::get('utm_term');
            $item->save();
            $inserted_id=$item->id;
            $request_prices = Request_prices::whereRaw("id= $inserted_id ")->first();

            Mail::send('emails.contactUsEmail', ['request_prices' => $request_prices], function ($m) use ($request_prices) {
                $m->from('noreply@tabo.ps', 'TABO');
                $m->to('crm@uci.ps')->subject('Contact Request Form');
            });

            if(Session::get('lang') == 'en'){
                Mail::send('emails.tabo-virefy-email-en', ['request_prices' => $request_prices], function ($m) use ($request_prices) {
                    $m->from('noreply@tabo.ps', 'TABO');
                    $m->to($request_prices->email, $request_prices->fname)->subject('Please Verify Your Email');
                });
            } else{
                Mail::send('emails.tabo-virefy-email-ar', ['request_prices' => $request_prices], function ($m) use ($request_prices) {
                    $m->from('noreply@tabo.ps', 'TABO');
                    $m->to($request_prices->email, $request_prices->fname)->subject('يرجى تأكيد بريدك الالكتروني');
                });
            }

            if($request_prices->newsletter == 1){
                $email = $request_prices->email;
                if(Session::get('lang') == 'en'){
                    Mail::send('emails.tabo-thank-you-en', ['email' => $email], function ($m) use ($request_prices) {
                        $m->from('noreply@tabo.ps', 'TABO');
                        $m->to($request_prices->email, $request_prices->fname)->subject('We\'ve Received Your Message');
                    });
                } else{
                    Mail::send('emails.tabo-thank-you-ar', ['email' => $email], function ($m) use ($request_prices) {
                        $m->from('noreply@tabo.ps', 'TABO');
                        $m->to($request_prices->email, $request_prices->fname)->subject('لقد تم استلام رسالتك');
                    });
                }
            }

            //Start Conversions API
            $pixel_id = '483386585847858';
            $email = trim(strtolower($request["email"])," ");
            $phone = trim($request["mobile"]," ");
            $first_name = trim(strtolower($request["fname"])," ");
            $city = trim(strtolower($request["city"])," ");
            if(Session::get('lang') == 'en') {
                $source_url = 'https://www.tabo.ps/en/contact-us';
            }else{
                $source_url = 'https://www.tabo.ps/ar/contact-us';
            }
            $user_data = (new UserData())
                ->setEmail($email)
                ->setPhone($phone)
                ->setFirstName($first_name)
                ->setCity($city)
                ->setClientIpAddress($_SERVER['REMOTE_ADDR'])
                ->setClientUserAgent($_SERVER['HTTP_USER_AGENT']);

            $event = (new Event())
                ->setEventName('Send_contact_us')
                ->setEventTime(time())
                ->setEventSourceUrl($source_url)
                ->setUserData($user_data)
                ->setActionSource(ActionSource::WEBSITE)
                ->setEventID(time());

            $events = array();
            array_push($events, $event);

            $request = (new EventRequest($pixel_id))
                ->setEvents($events);
            $response = $request->execute();
            //End Conversions API
        }
        if(Session::get('lang') == 'en'){
          return redirect('/en/thank-you');
        }else{
          return redirect('/ar/thank-you');
        }
    }
}
