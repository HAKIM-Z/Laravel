<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home', function () {
//     return view('index');
// });

Route::view('home', 'index');

// Route::get('add', function () {
//     return view('form');
// });

Route::view('add', 'form');

Route::post('handle', function () {
    return "inserted";
});

Route::redirect('x', 'home');

Route::put('update', function () {
    return "updated";
});

Route::delete('delete', function () {
    return "deleted";
});

Route::any('all', function () {
    return "all methods";
});

Route::match(['get', 'post'], 'mat', function () {
    return "match methods";
});
