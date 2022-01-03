<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Purchase;
use App\Models\Linked;
use App\Models\History;
use App\Models\User;
use Mail;

class MailsController extends Controller
{

    public function sellMail(Request $request){

        $purchase = Purchase::where('orderId', $request->orderId)->first();
        $user_mail    = User::where('id', $purchase->user_id)->first();
        $register = Linked::where('userid', $purchase->user_id)->first();
 
        $data = [
            'orderId'  => $purchase->orderId,
            'type'     => $purchase->type,
            'total'    => $purchase->total,
            'value'    => $purchase->value,
            'coin'     => $purchase->rate,
            'status'   => $purchase->status,
            'user_id'  => $purchase->user_id,
            'bankname'   => $register->bankname,
            'acctnumber'  => $register->acctnumber,
            'firstname'=> auth()->user()->name,
            'lastname' => auth()->user()->last_name
        ];

        $deploy = History::create($data);

        if($deploy){

            \Mail::send('emails.adminMail', array(

                'orderId'  => $request->get('orderId')
            
            ), function($message) use ($request)
            {
                $email = 'info@nairacoinxchange.net';
                $message->from('info@nairacoinxchange.net', "New Transaction Alert!");
                $message->to($email);
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
                $purchase  = Purchase::where('orderId', $request->orderId)->first();
                $user_mail = User::where('id', $purchase->user_id)->first();
                $recepient = $user_mail['email'];
                $message->from('info@nairacoinxchange.net', "NairacoinXchange");
                $message->to($recepient);
                $message->subject('Confirm your Order!');
            });
    
            return redirect()->route('dashboard')->with('success','Check your email for your order details');

        }

    }

    public function buyMail(Request $request){

        $sale     = Sale::where('orderId', $request->orderId)->first();
        $register = Linked::where('userid', $sale->user_id)->first();

        $data = [
            'orderId'  => $sale->orderId,
            'type'     => $sale->type,
            'total'    => $sale->total,
            'value'    => $sale->value,
            'coin'     => $sale->rate,
            'status'   => $sale->status,
            'user_id'  => $sale->user_id,
            'bankname'   => $register->bankname,
            'acctnumber'  => $register->acctnumber,
            'firstname'=> auth()->user()->name,
            'lastname' => auth()->user()->last_name
        ];

        $deploy = History::create($data);

        if($deploy){

            \Mail::send('emails.adminMail', array(

                'orderId'  => $request->get('orderId')
            
            ), function($message) use ($request)
            {
                $email = 'info@nairacoinxchange.net';
                $message->from('info@nairacoinxchange.net', "New Transaction Alert!");
                $message->to($email);
                $message->subject('New Transaction!');
            });
    
            \Mail::send('emails.sellorder', array(
    
                'linkId'       => $request->get('linkId'),
                'orderId'      => $request->get('orderId'),
    
            ), function($message) use ($request)
            {
                $sale      = Sale::where('orderId', $request->orderId)->first();
                $user_mail = User::where('id', $sale->user_id)->first();
                $recepient = $user_mail['email'];
                $message->from('info@nairacoinxchange.net', "NairacoinXchange");
                $message->to($recepient);
                $message->subject('Confirm your Order!');
            });

            return redirect()->route('dashboard')->with('success','Check your email for order confirmation');
        }

    }

}
