<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'dashboard'])->name('dashboard');

Route::get('/all_product', [App\Http\Controllers\PageController::class, 'all_product']);

Route::get('/atomizer', [App\Http\Controllers\PageController::class, 'atomizer']);

Route::get('/battery', [App\Http\Controllers\PageController::class, 'battery']);

Route::get('/liquid', [App\Http\Controllers\PageController::class, 'liquid']);

Route::get('/mod', [App\Http\Controllers\PageController::class, 'mod']);

Route::get('/admin', [App\Http\Controllers\PageController::class, 'admin']);

Route::get('/sigIn ', [App\Http\Controllers\LoginController::class, 'sigIn']);

Route::post('/login/proses', [App\Http\Controllers\LoginController::class, 'progress']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/atomizer', function () {
//     return view('product/atomizer');
// });

// Route::get('/baterai', function () {
//     return view('product/baterai');
// });

// Route::get('/liquid', function () {
//     return view('product/liquid');
// });

// Route::get('/mod', function () {
//     return view('product/mod');
// });

// Route::get('/allproduct', function () {
//     return view('product/all');
// });