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
           $parameter->with('getdate',$getdate);
        //    $parameter->compact('getdate'); //error
        });


        // =>Single 
        // use Illuminate\Support\Facades\View

        View::composer('*',function($view){
            $getyear = date("Y"); 
            $gettoday = date("d/M/Y"); 
            $view->with('getyear',$getyear)->with('gettoday',$gettoday);
        });

        View::composer('employees.index',function($view){
            $getyear = date("Y"); 
            $gettoday = date("d/M/Y"); 
            $view->with('getyear',$getyear)->with('gettoday',$gettoday);
        });










    }




    
}
