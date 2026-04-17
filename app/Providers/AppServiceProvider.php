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
        View::share([
            'pc_dark_layout' => 'default',
            'pc_box_container' => 'false',
            'pc_rtl_layout' => 'false',
            'pc_preset_theme' => '',
            'font_name' => '',
            'breadcrumb_item' => '',
            'breadcrumb_item_active' => 'Dashboard'
        ]);
    }
}
