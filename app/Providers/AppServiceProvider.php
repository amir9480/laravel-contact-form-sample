<?php

namespace App\Providers;

use ReCaptcha\ReCaptcha;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extendImplicit('recaptcha', function ($attribute, $value, $parameters, $validator) {
            $recaptcha = new ReCaptcha(config("contact.recaptcha.secret"));
            $response = $recaptcha->verify($value, request()->ip());
            if ($response->isSuccess()) {
                return true;
            }
            return false;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Schema::defaultStringLength(191);
    }
}
