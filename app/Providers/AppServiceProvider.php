<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $setting = \Illuminate\Support\Facades\Cache::remember('setting', 120, function (){
            return \Illuminate\Support\Facades\DB::table("table_setting")
                ->first();
        });

        $optsetting = (!empty($setting->options)) ? json_decode($setting->options, true) : null;

        View::share('setting', $setting);
        View::share('optsetting', $optsetting);
        Paginator::useBootstrapFive();
    }
}
