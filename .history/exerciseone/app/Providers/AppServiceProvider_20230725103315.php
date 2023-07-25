<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
            // view()->composer(file(ko twor chin tae file),function())

        View()->composer('*',function($parameter){
           $getdate = date('d');
           $parameter->with('getdate',$getdate)l
        });

    }




    
}
