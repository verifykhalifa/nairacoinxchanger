<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailsController extends Controller
{

    public function sellMail(Request $request){

        \Mail::send('emails.adminMail', array(

            'orderId'  => $request->get('orderId')
        
        ), function($message) use ($request)
        {
            $email = 'martinjasmine42@gmail.com';
            $message->from('martinjasmine42@gmail.com', "New Transaction Alert!");
            $message->to('martinjasmine42@gmail.com');
            $message->subject('New Transaction!');
        });

        \Mail::send('emails.buyorder', array(

            'orderId'      => $request->get('orderId'),
            'total'        => $request->get('total'),
            'value'        => $request->get('value'),
            'btcaddress'   => $request->get('btcaddress'),
            'bankname'     => $request->get('bankname'),
            'acctnumber'   => $request->get('acctnumber'),
            'firstname'    => $request->get('firstname'),
            'lastname'     => $request->get('lastname')

        ), function($message) use ($request)
        {
            $email = 'martinjasmine42@gmail.com';
            $message->from('martinjasmine42@gmail.com', "New Message From your Website!");
            $message->to('martinjasmine42@gmail.com');
            $message->subject('Order Received!');
        });

        return back()->with('success','Check your email for order confirmation');

    }

    public function buyMail(Request $request){

        \Mail::send('emails.adminMail', array(

            'orderId'  => $request->get('orderId')
        
        ), function($message) use ($request)
        {
            $email = 'martinjasmine42@gmail.com';
            $message->from('martinjasmine42@gmail.com', "New Transaction Alert!");
            $message->to('martinjasmine42@gmail.com');
            $message->subject('New Transaction!');
        });

        \Mail::send('emails.sellorder', array(

            'linkId'       => $request->get('linkId'),
            'orderId'      => $request->get('orderId'),

        ), function($message) use ($request)
        {
            $email = 'martinjasmine42@gmail.com';
            $message->from('martinjasmine42@gmail.com', "New Message From your Website!");
            $message->to('martinjasmine42@gmail.com');
            $message->subject('Confirm your Order!');
        });

        return back()->with('success','Check your email for order confirmation');
    }

}
