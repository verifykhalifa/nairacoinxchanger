<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Verify;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'last_name' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:12'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $random = random_int(100000, 999999);

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'verify_user' => 0,
            'code' => $random,
            'country' => $request->country,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $user->attachRole('2');

        Verify::create([
            'user_id'   => $user->id,
            'token'     => $user->code
        ]);

        $zuggs = $user->code;

        \Mail::send('emails.econfirmcode', array(

            'confirm_code' => $user['code'],

        ), function($message) use ($request)
        {
            $email = 'ayodejiadekunle@gmail.com';
            $message->from('ayodejiadekunle@gmail.com', "Nairacoin Exchange!");
            $message->to('ayodejiadekunle@gmail.com');
            $message->subject('Activate your account!');    
        });

        return view('auth.verify_code',['zuggs'=> $zuggs]);

        // event(new Registered($user));
        // Auth::login($user);
        // return redirect(RouteServiceProvider::HOME);
    }
}
