<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [UserController::class, 'show_view'])->name('user.home');

Route::get('add', [UserController::class, 'show_form'])->name('user.add');

Route::post('insert', [UserController::class, 'store'])->name('user.insert');
