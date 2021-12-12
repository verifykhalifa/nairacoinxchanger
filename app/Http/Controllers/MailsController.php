<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailsController extends Controller
{

    public function sellMail(Request $request){
       
        $details = $request->all();

        $email = 'ayodejiadekunle@gmail.com';

        \Mail::send('emails.saleMail', array(

            'orderId'      => $details['orderId'],
            'total'        => $details['total'],
            'value'        => $details['value'],
            'btcaddress'   => $details['btcaddress'],

        ), function($message) use ($request)
        {
            $message->from($email, "New Message From your Website!");
            $message->to('ayodejiadekunle@gmail.com');
            $message->subject('Order Received!');
        });

        return view('userpages.dash')->with('success','Mail Sent');

    }

    public function buyMail(){
        

    }

}
