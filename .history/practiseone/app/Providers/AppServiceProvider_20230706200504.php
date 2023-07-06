<?php

namespace App\Providers;

use Illuminate\Support\Composer;
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
        // view()->composer('*',function($view){
        //     $getdate = date('F m, Y');
        //     $view->with('getdate',$getdate);
        // });

        // View::composer('aungchantharhotel.blog.singlelayout.fstpost',function($view){
        //     $getdate = date('F m, Y');
        //     $view->with('getdate',$getdate);
        // });
       

        View::composer(['aungchantharhotel.blog.singlelayout.fstpost','aungchantharhotel.blog.singlelayout.secpost','aungchantharhotel.blog.singlelayout.tdpost'],function($view){
            $getdate = date('F m, Y');
            $view->with('getdate',$getdate);
        });
    }
}
