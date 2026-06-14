<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});

Route::get('view', [UserController::class, 'show_view'])->name('user.view');

Route::get('add', [UserController::class, 'show_add'])->name('user.add');

Route::post('store', [UserController::class, 'insert'])->name('user.insert');

Route::get('edit/{id}', [UserController::class, 'show_edit'])->name('user.edit');

Route::put('update/{id}', [UserController::class, 'update'])->name('user.update');

Route::delete('delete/{id}', [UserController::class, 'delete'])->name('user.delete');
