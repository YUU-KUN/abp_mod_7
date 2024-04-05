<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     if (Auth::check()) return redirect('/product');
//     return view('login');
// })->name('login');
// Route::get('/logout', function () {
//     Auth::logout();
//     return redirect('/login');
// });

Route::resource('product', ProductController::class);

// memanggil fungsi dari suatu Controller
Route::post('/auth', [SiteController::class, 'auth']);