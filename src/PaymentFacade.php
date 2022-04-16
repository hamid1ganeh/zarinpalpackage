<?php

namespace Hamid1ganhe2s\Payment;

use Illuminate\Support\Facades\Facade;

class PaymentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'payment';
    }
}
