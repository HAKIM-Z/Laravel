<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('ecomm.pages.index');
// });


Route::get('/', [WebController::class, 'index'])->name('web.index');

Route::get('details/{id}', [WebController::class, 'product_details'])->name('product.details');

Route::get('contact', [WebController::class, 'contact_show'])->name('contact.view');

Route::post('message_store', [WebController::class, 'message_store']);

Route::get('register', [AuthUserController::class, 'register_form'])->name('user.register.form');

Route::post('store', [AuthUserController::class, 'register_data'])->name('user.register');

Route::get('login', [AuthUserController::class, 'login_form'])->name('user.login.form');

Route::post('check', [AuthUserController::class, 'login_check'])->name('user.login');

Route::get('logout', [AuthUserController::class, 'logout'])->name('user.logout');

Route::post('cart', [CartController::class, 'store_cart']);
