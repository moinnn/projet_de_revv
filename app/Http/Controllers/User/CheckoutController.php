<?php

namespace App\Http\Controllers\User;

use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function payment()
    {
        return view('payment.payment');
    }

    public function charge(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $charge = Charge::create([
                'amount' => 1999,
                'currency' => 'eur',
            ]);

            return 'Charge successful, you get the course!';
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
