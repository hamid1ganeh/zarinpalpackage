<?php

namespace Hamid1ganhe2s\Payment\Controllers;

use Hamid1ganhe2s\Payment\Models\Finance;

class PaymentController extends BaseController
{
    public function index()
    {
        $fincance = Finance::all();
       return $fincance;
        $merchantID = config('payment.MerchantID');
        $value  = ['Hamid1ganhe2s','Majid','Saeed'];
        return view('payment::index',compact('value','merchantID'));
    }

    public function create()
    {
        $db = Finance::create([
            'merchandId'=>config('payment.MerchantID')
        ]);

        return $db;
    }
}
