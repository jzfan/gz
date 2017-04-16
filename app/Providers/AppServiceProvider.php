<?php

namespace App\Providers;

use Faker\Generator;
use Faker\Factory;
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
        \Carbon\Carbon::setlocale('zh');
        $this->app->singleton(Generator::class, function () {
            return Factory::create('zh_CN');
        });
        \Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
                              return preg_match('/^1[34578][0-9]{9}$/', $value);
                          });
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
