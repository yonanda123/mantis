<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'pc_dark_layout' => 'default',
        'pc_box_container' => 'false',
        'pc_rtl_layout' => 'false',
        'pc_preset_theme' => '',
        'font_name' => '',
        'breadcrumb_item' => '',
        'breadcrumb_item_active' => 'Dashboard'
    ]);
});
