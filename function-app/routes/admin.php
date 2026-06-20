<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('index', function () {
    return view('dashboard.pages.index');
});

Route::resource('admin', AdminController::class);
