<?php

namespace App\Http\Controllers\Backend;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StripePayment;

class StripeController extends Controller
{
    public function payment($user_id)
    {
        return view('frontend.payment.index',compact('user_id'));
    }

    public function doPayment(Request $request, $user)
    {
        // dd($request->all(),$user);
        $user_info = User::with('membership')->find($user);
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
                "amount" => $user_info->membership->price * 150,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
  
        StripePayment::create([
            'user_id' => $user_info->id,
            'amount' => $user_info->membership->price,
            'stripe_token' => $request->stripeToken
        ]);
        $user_info -> update([
            'payment_status' => 1
        ]);
        // Session::flash('success', 'Payment has been successfully processed.');
          
        return redirect()->route('login');
    }
}
