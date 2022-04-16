<?php

use Hamid1ganhe2s\Payment\Payment;
use Illuminate\Support\Facades\Route;
use Hamid1ganhe2s\Payment\Controllers\PaymentController;

Route::name('payment.')->group(function(){
    Route::get('snedPayment',[PaymentController::class,'index'])->name('snedPayment');
    Route::get('createPayment',[PaymentController::class,'create'])->name('create')->middleware('accessToPayment');
});

