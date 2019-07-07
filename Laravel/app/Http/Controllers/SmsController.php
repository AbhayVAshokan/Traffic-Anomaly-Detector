<?php

namespace App\Http\Controllers;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function send(){
        Nexmo::message()->send([
            'to'   => '+918078460133',
            'from' => '+918078460133',
            'text' => 'Using the facade to send a message.'
        ]);
        Session::flash('success','Sms sent');
        return redirect('accident');
    }
}
