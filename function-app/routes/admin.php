<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('index', function () {
    return view('dashboard.pages.index');
})->name('dash.index');

Route::resource('admin', AdminController::class);

Route::resource('cat', CatController::class);

Route::resource('product',ProductController::class);
