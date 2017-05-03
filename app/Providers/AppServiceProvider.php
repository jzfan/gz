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
        \Carbon\Carbon::setlocale('zh');
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('zh_CN');
        });
        \Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
                              return preg_match('/^1[34578][0-9]{9}$/', $value);
                          });
        view()->share('seo', \Gz\Seo::all()->pluck('value', 'key')->toArray());
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
