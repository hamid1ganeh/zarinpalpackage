<?php

namespace Hamid1ganhe2s\Payment;

use Hamid1ganhe2s\Payment\Middleware\CheckAccess;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        // $this->app->bind('payment',function(){
        //     return  new Payment;
        // });
        $this->app->bind('payment');
        $this->mergeConfigFrom(__DIR__.'\config.php','payment');
       // $this->app->register(\Cviebrock\EloquentSluggable\ServiceProvider::class);
        // $aliasLoader = \Illuminate\Foundation\AliasLoader::getInstance();
        // $aliasLoader->alias('slug',);
    }

    public function boot()
    {
         require __DIR__.'\routes.php';
         $this->loadViewsFrom(__DIR__.'\Views','payment');

        $this->app['router']->aliasMiddleWare('accessToPayment',CheckAccess::class);

         $this->publishes([
            __DIR__.'/config.php'=>config_path('payment.php'),
            __DIR__.'/Views'=>base_path('resources/views/payment'),
            __DIR__.'/Migrations' => database_path('migrations')
         ]);
    }
}
