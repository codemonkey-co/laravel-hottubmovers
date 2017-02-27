<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);

        view()->share('providers', [
            "messaging.sprintpcs.com" => "Sprint",
            "msg.fi.google.com" => "Project Fi",
            "vtext.com" => "Verizon",
            "sms.mycricket.com" => "Cricket",
            "sms.myboostmobile.com" => "Boost Mobile",
            "txt.att.net" => "AT&T",
            "mymetropcs.com" => "Metro PCS",
            "tmomail.net" => "T-Mobile",
            "vmobl.com" => "Virgin Mobile",
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
