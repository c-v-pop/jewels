<?php 

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal;

class CheckoutController extends Controller
{
    public function show()
    {
        $cartItems = session()->get('cart', []);
        return view('checkout', compact('cartItems'));
    }

    public function process(Request $request)
    {
        $paypal = new PayPal;
        $paypal->setApiCredentials(config('paypal'));
        $paypal->setAccessToken($paypal->getAccessToken());

        // Create an order on PayPal
        $response = $paypal->createOrder([
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'GBP',
                        'value' => session('cart_total') // Total cart amount
                    ]
                ]
            ],
            'application_context' => [
                'return_url' => route('checkout.success'),
                'cancel_url' => route('checkout.cancel'),
            ]
        ]);

        if (isset($response['id'])) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }

        return back()->with('error', 'Something went wrong.');
    }

    public function success(Request $request)
    {
        $paypal = new PayPal;
        $paypal->setApiCredentials(config('paypal'));
        $paypal->setAccessToken($paypal->getAccessToken());
        $response = $paypal->capturePaymentOrder($request->query('token'));

        if ($response['status'] === 'COMPLETED') {
            // Remove items from the database
            foreach (session('cart', []) as $item) {
                Product::find($item['id'])->delete();
            }

            // Clear cart session
            session()->forget('cart');

            return view('checkout-success');
        }

        return redirect()->route('checkout.show')->with('error', 'Payment not completed.');
    }

    public function cancel()
    {
        return redirect()->route('checkout.show')->with('error', 'Payment was cancelled.');
    }
}
