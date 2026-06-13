<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});



// Route::get('home', function () {
//     return view('index');
// });

Route::view('home', 'index');

Route::get('hakim', function () {
    return "welcome hakim";
});

// Route::get('add', function () {
//     return view('form');
// });

Route::view('add', 'form');

// Route::post('handel', function () {
//     return "inserted";
// });

Route::redirect('x', 'home');

Route::put('update', function () {
    return "updated successfully";
});
