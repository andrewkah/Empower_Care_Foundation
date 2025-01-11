<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share visitor count with all views or specific views
        View::composer('*', function ($view) {
            $visitorCount = DB::table('visitors')->count();
            $view->with('visitorCount', $visitorCount);
        });
    }
}
