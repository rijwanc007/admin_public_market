<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BulkSMSController extends Controller
{
    public function send(){
        $clients = User::orderBy('id', 'DESC')->get();
        return view('backend.sms.send', compact('clients'));
    }
    public function sendStore(Request $request){
        /* Send BULK SMS to Clients */

        $phone = implode(",",$request->client_phone);
        $url = 'https://api.mobireach.com.bd/SendTextMessage';

        $fields = array(
            'Username'      => "skrp",
            'Password'      => "Dh@ka2021",
            'From'          => "SKRP GROUP",
            'To'            => $phone,
            'Message'       => $request->message,
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));

        curl_exec($ch);
        curl_close($ch);

        Session::flash('success', 'Message Sent Successfully');
        return redirect()->route('wp_sms.send');

        /* Send BULK SMS to Clients */
    }
}
