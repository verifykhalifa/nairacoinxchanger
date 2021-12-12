<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailsController extends Controller
{

    public function sellMail(Request $request){
       
        $email = 'ayodejiadekunle@gmail.com';

        \Mail::send('emails.saleMail', array(

            'orderId'      => $request->get('orderId'),
            'total'        => $request->get('total'),
            'value'        => $request->get('value'),
            'btcaddress'   => $request->get('btcaddress')

        ), function($message) use ($request)
        {
        $email = 'ayodejiadekunle@gmail.com';
            $message->from('ayodejiadekunle@gmail.com', "New Message From your Website!");
            $message->to('ayodejiadekunle@gmail.com');
            $message->subject('Order Received!');
        });

        return back()->with('success','Check your email for order confirmation');

    }

    public function buyMail(){
        

    }

}
