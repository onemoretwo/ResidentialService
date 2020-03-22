<?php

namespace App\Providers;

use App\BookingRequest;
use App\Report;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

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
//        $r = Report::all()->count();
//        View::composer('r', $r);


        //compose all the views....
        view()->composer('*', function ($view)
        {
            $r = Report::all()->where('status','=','รอการยืนยัน')->count();
            //...with this variable
            $view->with('r', $r );
        });


    }
}
