<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('ecomm.pages.index');
// });


Route::get('/', [WebController::class, 'index'])->name('web.index');

Route::get('details/{id}', [WebController::class, 'product_details'])->name('product.details');
