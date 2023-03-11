<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
=======
use Illuminate\Support\ServiceProvider;
>>>>>>> 3a2808e (First Commit)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        Schema::defaultStringLength(191);

        Validator::extend('exclude_word', function ($attribute, $value, $parameters, $validator) {
            return !in_array($value, $parameters);
        });
=======
        //
>>>>>>> 3a2808e (First Commit)
    }
}
