<?php

namespace App\Providers;

use App\Helpers\CSVOperationHelper;
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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        app()->bind('csvOperationHandler', function() {
            return new CSVOperationHelper();
        });
    }
}
