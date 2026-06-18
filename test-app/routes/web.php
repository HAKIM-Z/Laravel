<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [UserController::class, 'show_view'])->name('user.view');

Route::get('add', [UserController::class, 'show_form'])->name('user.add');

Route::post('insert', [UserController::class, 'store'])->name('user.insert');

Route::get('update/{id}', [UserController::class, 'show_edit'])->name('user.edit');

Route::put('eidt/{id}', [UserController::class, 'update'])->name('user.update');

Route::delete('delete/{id}', [UserController::class, 'delete'])->name('user.delete');

Route::resource('admin', AdminController::class);
