<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Client
Route::get('/{any}', function () {
    return view('admin');
})->where('any', '.*')->name('app');

// Admin
// Route::get('/{any}', function () {
//     return view('admin');
// })->where('any', '.*')->name('admin');
