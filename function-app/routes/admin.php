<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminAuth;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('index', function () {
    return view('dashboard.pages.index');
})->name('dash.index');

Route::middleware(AdminAuth::class)->group(function () {

    Route::resource('admin', AdminController::class);

    Route::resource('cat', CatController::class);

    Route::resource('product', ProductController::class);

    Route::get('messages', [MessageController::class, 'show_messages'])->name('messages.show');
});


Route::get('login', [AuthController::class, 'show_form'])->name('login.form');

Route::post('check', [AuthController::class, 'login_check'])->name('login.check');

Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
