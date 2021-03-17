<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class PaymentsController extends Controller
{
    public function session()
    {
        $checkout = Session::create([
            'payment_methods_type' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => 100,
                        'product_data' => [],
                    ],
                    'quantity' => 1,
                ],
            ],

        ]);
    }
}
