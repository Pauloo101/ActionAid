<?php

namespace App\Http\Controllers;

use App\donation;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Paystack;
use phpDocumentor\Reflection\Types\Array_;
use PhpParser\Node\Expr\Cast\Object_;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $user = \Auth::user()->id;
        $donation = new donation;
        $here = Arr::get($paymentDetails, 'status');
        $category = Arr::get($paymentDetails,'data.metadata.key_name');
        $amount = Arr::get($paymentDetails,'data.amount');
        $naira = $amount/100;
        $receipt_no = Arr::get($paymentDetails,'data.id');
        $channel = Arr::get($paymentDetails,'data.channel');
       $donation->user_id = $user;
       $donation->amount = $naira;
       $donation->receipt_no = $receipt_no;
        $donation->category = $category;
        $donation->channel = $channel;
        $donation->save();
        return view('confirm')->with('receipt_no',$receipt_no);

//        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}